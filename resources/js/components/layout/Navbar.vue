<template>
    <header class="fixed inset-x-0 top-0 z-50 pt-8">
        <!-- Website Menu -->
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6">

            <!-- Logo -->
            <RouterLink to="/" class="text-3xl font-extrabold tracking-tight text-gray-900">
                Doctor Diary
            </RouterLink>

            <!-- Desktop Navigation -->
            <nav class="hidden items-center rounded-full bg-white p-2 shadow-xl lg:flex">
                <RouterLink
                    v-for="item in navigationItems"
                    :key="item.to"
                    :to="item.to"
                    class="rounded-full px-6 py-2 text-sm font-semibold transition-all duration-300"
                    :class="route.path === item.to
                        ? 'bg-black text-white'
                        : 'text-gray-700 hover:bg-gray-100 hover:text-black'"
                >
                    {{ item.name }}
                </RouterLink>
            </nav>

            <!-- CTA -->
            <RouterLink
                to="/login"
                class="hidden lg:inline-flex items-center justify-center rounded-full bg-blue-600 px-8 py-3 text-sm font-semibold text-white transition-all duration-300 hover:-translate-y-0.5 hover:bg-blue-700"
            >
                Let's Talk
            </RouterLink>

            <!-- Mobile Toggle -->
            <button
                class="flex h-11 w-11 items-center justify-center rounded-full bg-white shadow-md lg:hidden"
                @click="isMobileMenuOpen = !isMobileMenuOpen"
            >
                <Bars3Icon
                    v-if="!isMobileMenuOpen"
                    class="h-6 w-6 text-gray-800"
                />

                <XMarkIcon
                    v-else
                    class="h-6 w-6 text-gray-800"
                />
            </button>

        </div>

        <!-- Mobile Menu -->
        <Transition
            enter-active-class="transition duration-300 ease-out"
            enter-from-class="opacity-0 -translate-y-3"
            enter-to-class="opacity-100 translate-y-0"
            leave-active-class="transition duration-200 ease-in"
            leave-from-class="opacity-100 translate-y-0"
            leave-to-class="opacity-0 -translate-y-3"
        >
            <div
                v-if="isMobileMenuOpen"
                class="mx-5 mt-5 rounded-3xl bg-white p-6 shadow-2xl lg:hidden"
            >
                <nav class="flex flex-col gap-4">

                    <RouterLink
                        v-for="item in navigationItems"
                        :key="item.to"
                        :to="item.to"
                        @click="closeMobileMenu"
                        class="rounded-xl px-4 py-3 font-medium transition-all duration-300"
                        :class="route.path === item.to
                            ? 'bg-black text-white'
                            : 'text-gray-700 hover:bg-gray-100'"
                    >
                        {{ item.name }}
                    </RouterLink>

                </nav>

                <RouterLink
                    to="/login"
                    @click="closeMobileMenu"
                    class="mt-6 flex justify-center rounded-full bg-blue-600 px-6 py-3 font-semibold text-white transition hover:bg-blue-700"
                >
                    Get Started
                </RouterLink>
            </div>
        </Transition>
    </header>
</template>

<script setup>
import { ref } from 'vue';
import { useRoute } from 'vue-router';
import { Bars3Icon, XMarkIcon } from '@heroicons/vue/24/outline';

const route = useRoute();

const isMobileMenuOpen = ref(false);

const closeMobileMenu = () => {
    isMobileMenuOpen.value = false;
};

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
];
</script>
