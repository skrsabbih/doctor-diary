<template>
    <header class="fixed top-0 left-0 right-0 z-50 py-5">
        <div class="mx-auto flex max-w-7xl items-center justify-between rounded-full px-6 py-4">
            <!-- Logo -->
            <RouterLink to="/" class="text-2xl font-bold tracking-tight">Doctor Diary</RouterLink>
            <!-- Menus -->
            <nav class="hidden items-center gap-8 lg:flex">
                <RouterLink v-for="item in navigationItems" :key="item.to" :to="item.to"
                    class="text-sm font-medium transition-colors duration-200 hover:text-blue-600">
                    {{ item.name }}
                </RouterLink>
            </nav>
            <!-- CTA -->
            <RouterLink to="/login"
                class="hidden lg:inline-flex rounded-full bg-blue-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-blue-700">
                Get Started
            </RouterLink>

            <!-- Mobile Toggle -->
            <button class="flex lg:hidden" @click="isMobileMenuOpen = !isMobileMenuOpen">
                <Bars3Icon v-if="!isMobileMenuOpen" class="h-6 w-6" />
                <XMarkIcon v-else class="h-6 w-6" />
            </button>
        </div>
        <!-- Mobile Menu -->
        <div v-if="isMobileMenuOpen" class="mx-6 mt-4 rounded-2xl bg-white p-6 shadow-lg lg:hidden">
            <!-- Mobile Navigation -->
            <nav class="flex flex-col gap-5">
                <RouterLink v-for="item in navigationItems" :key="item.to" :to="item.to"
                    class="text-base font-medium text-gray-700 transition-colors duration-200 hover:text-blue-600"
                    @click="closeMobileMenu">
                    {{ item.name }}
                </RouterLink>
            </nav>
            <!-- Mobile CTA -->
            <RouterLink to="/login"
                class="mt-8 inline-flex justify-center rounded-full bg-blue-600 px-5 py-3 text-sm font-semibold text-white hover:bg-blue-700"
                @click="closeMobileMenu">
                Get Started
            </RouterLink>
        </div>
    </header>
</template>

<script setup>
import { ref } from 'vue';
import { Bars3Icon, XMarkIcon } from '@heroicons/vue/24/outline';

const isMobileMenuOpen = ref(false);

const closeMobileMenu = () => {
    isMobileMenuOpen.value = false;
}

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
