<script setup>
import Layout from '../../Layouts/App.vue'
import Works from '../../components/Works.vue'
const props = defineProps({
    works: {
        type: Object,
        default: () => ({})
    }
})
</script>

<template>
    <Layout>
        <Works :worksData="works.data" />
    </Layout>
</template>
