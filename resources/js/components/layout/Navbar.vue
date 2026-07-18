<template>
    <header class="navbar">
        <div class="container">
            <!-- logo -->
            <RouterLink to="/" class="logo">Doctor Diary</RouterLink>
            <!-- menus -->
            <nav class="nav-links">
                <RouterLink v-for="item in navigationItems" :key="item.to" :to="item.to">
                    {{ item.name }}
                </RouterLink>
            </nav>
            <!-- CTA -->
            <RouterLink to="/login" class="btn btn-primary">Get Started</RouterLink>
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
