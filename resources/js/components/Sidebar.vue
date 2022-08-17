<script setup>
    import { computed, ref, onMounted } from 'vue'
    import { usePage, Link } from '@inertiajs/inertia-vue3'
    import en from '../../lang/en.json';
    import hu from '../../lang/hu.json';

    const show = ref(false)
    const navWorks = ref([])
    const lang = document.documentElement.lang;
    const translations = {};

    translations.en = en;
    translations.hu = hu;

    function __(key) {
        return translations[lang][key] || key;
    }

    // let navWorks = computed(() => {
    //     return usePage().props.value.navWorks
    // })

    onMounted(() => {
        if (route().current('gallery.*')) {
            show.value = true
        }

        if (!usePage().props.value) {
            axios.get('/api/works-nav').then((response) => {
                // console.log(response.data.data)
                navWorks.value = response.data.data
            })
        } else {
            navWorks.value = usePage().props.value.navWorks
        }
    })
</script>
<template>
    <nav class="grid gap-y-1 transition">
        <p>
            <a href="">Bio</a>
        </p>
        <div v-if="navWorks">
            <p :class="{'font-bold' : route().current('gallery.*') || show}">
                <span @click="show = !show">Geléria</span>
            </p>
            <Transition>
                <ul class="ml-4" v-if="show">
                    <li v-for="work in navWorks">
                        <Link :href="route('gallery.show',work.slug)" :class="{'font-bold' : route().current('gallery.show',work.slug)}">{{ work.title }}</Link>
                    </li>
                </ul>
            </Transition>
        </div>
        <p>
            <a href="">Installációk</a>
        </p>
        <p>
            <a href="">Video</a>
        </p>
        <p>
            <a href="">Cikkek</a>
        </p>
        <p>
            <a href="">Publikációk</a>
        </p>
        <p>
            <a href="">{{ __('Exhibitions')}}</a>
        </p>

        <p>
            <a :href="route('page.view','sadasdasd')" :class="{'font-bold' : route().current('page.view','sadasdasd')}">Test</a>
        </p>
    </nav>

</template>

<style>
    .v-enter-active,
    .v-leave-active {
        transition: opacity 0.4s ease-in-out;
    }

    .v-enter-from,
    .v-leave-to {
        opacity: 0;
    }
</style>
