<script setup>
    import Nav from '../components/Sidebar.vue'
</script>
<template>
    <main class="container md:flex md:gap-x-4">
        <div class="md:w-3/12">
            <Nav />
        </div>
        <div class="md:w-9/12 relative flex flex-col items-start">
            <slot />
        </div>
    </main>
    <footer class="h-[100px]">
    </footer>
</template>
