<script setup>
    import { computed, ref, onMounted } from 'vue'
    import { usePage, Link } from '@inertiajs/inertia-vue3'

    const show = ref(false)

    const navWorks = computed(() => {
        return usePage().props.value.navWorks
    })

    onMounted(() => {
        if (route().current('gallery.*')) {
            show.value = true
        }
    })
    console.log(route().current('gallery.*'))
</script>
<template>
    <nav class="grid gap-y-1 transition">
        <div>
            <p :class="{'font-bold' : route().current('gallery.*')}">
                <a href="javascript:void(0);" @click="show = !show">Muvek</a>
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
            <a href="">valami</a>
        </p>
        <p>
            <a href="">valami</a>
        </p>
        <p>
            <a href="">valami</a>
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
