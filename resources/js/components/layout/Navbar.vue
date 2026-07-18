<template>
    <header class="fixed top-0 left-0 right-0 z-50 py-5">
        <div class="mx-auto flex max-w-7xl items-center justify-between rounded-full px-6 py-4">
            <!-- logo -->
            <RouterLink to="/" class="text-2xl font-bold traking-tight">Doctor Diary</RouterLink>
            <!-- menus -->
            <nav class="hidden items-center gap-8 lg:flex">
                <RouterLink v-for="item in navigationItems" :key="item.to" :to="item.to" class="text-sm font-medium transition-colors duration-200 hover:text-blue-600">
                    {{ item.name }}
                </RouterLink>
            </nav>
            <!-- CTA -->
            <RouterLink to="/login" class="rounded-full bg-blue-600 px-5 py-3 text-sm font-semibold text-white transition hover: bg-blue-700">Get Started</RouterLink>
        </div>
    </header>
</template>

<script setup>
const navigationItems = [
    {
        name: 'Home',
        to: '/',
    },
    {
        name: 'About',
        to: '/about',
    },
    {
        name: 'Journey',
        to: '/journey',
    },
    {
        name: 'Blogs',
        to: '/blogs',
    },
    {
        name: 'Contact',
        to: '/contact',
    },
]
</script>
