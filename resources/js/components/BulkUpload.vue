<template>
    <div v-if="errors">
        <div v-for="error in errors.data">
            <h1><span style="color: red">{{ error.row }}. sor</span> --- {{ error.errors[0]}}</h1>
        </div>
    </div>
    <form @submit.prevent="send">
        <div class="form-group">
            <label for="row_start">Sor kezdete <small> (innen kezdi a feltöltést)</small></label>
            <input name="row_start" id="row_start" type="number" v-model="form.row_start">
        </div>
        <div class="form-group">
            <label for="row_limit">Limit <small> (ha kissebb mint 1 akkor nem tölt fel!)</small></label>
            <input name="row_limit" id="row_limit" type="number" v-model="form.row_limit">
        </div>
        <div class="form-group">
            <label for="file">Fájl</label>
            <input ref="file" name="file" id="file" type="file" v-on:change="handleFileUpload()">
        </div>

        <button type="button" class="form-button process" disabled="" v-if="loading">
            <svg class="animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="white" stroke-width="4"></circle>
                <path class="opacity-75" fill="#464646" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            Processing...
        </button>
        <button type="submit" class="form-button submit" v-else>Feltöltés</button>
    </form>
</template>

<script>

import axios from "axios";

export default {
    name: "BulkUpload",
    data() {
        return {
            form: {
                row_start: 2,
                row_limit: 0,
                file: ''
            },
            errors: [],
            loading: false
        }
    },
    methods: {
        send() {
            this.errors = [];
            if (!this.form.file) {
                alert('Nincs file kiválasztva')
            } else {
                this.loading = true;
                const formData = new FormData();

                formData.append('row_start',this.form.row_start)
                formData.append('row_limit',this.form.row_limit)
                formData.append('file', this.form.file);

                axios.post('/api/admin/bulk-update',formData).then((response) => {
                    if (response === 'success')
                    {
                        alert('Feltöltve')
                    } else {
                        this.errors = response
                    }
                    this.loading = false;
                }).catch((e) => {
                    console.log(e)
                    this.loading = false;

                })
            }
        },
        handleFileUpload() {
            // debugger;
            this.form.file = file.files[0]
            console.log("selected file",file.files[0])
            //Upload to server
        }
    }
}
</script>

<style scoped>
    form {
        width: 300px;
    }
    .form-group {
        display: grid;
        flex-wrap: wrap;
    }
    .form-group input {
        border-radius: 4px;
        padding: .5rem 1rem;
        margin-top: .5rem;
    }
    .form-group label {
        font-weight: 600;
        margin-top: 1rem;
    }
    .form-group input[name="file"] {
        padding: 0;
    }
    .form-button {
        margin-top: 1rem;
        border: 2px solid #464646;
        font-size: 1rem;
        padding: .5rem 1rem;
        cursor: pointer;
    }
    .form-button.submit {
        color: #464646;
        background-color: #ffffff;
    }
    .form-button.submit:hover {
        background-color: #464646;
        color: #ffffff;
    }
    small {
        font-size: 12px;
        margin-left: 1rem;
    }
    .form-button.process {
        background-color: #464646;
        color: #ffffff;
    }
    .animate-spin {
        animation: spin 1s linear infinite;
        width: 16px;
    }
    @keyframes spin {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }
</style>
