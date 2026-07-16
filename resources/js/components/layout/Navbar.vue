<template>
    <header class="navbar">
        <div class="container">
            <!-- logo -->
            <RouterLink to="/" class="logo">Doctor Daily</RouterLink>
            <!-- menus -->
            <nav class="nav-links">
                <RouterLink to="/">Home</RouterLink>
                <RouterLink to="/about">About</RouterLink>
                <RouterLink to="/journey">Journey</RouterLink>
                <RouterLink to="/blogs">Blogs</RouterLink>
                <RouterLink to="/contact">Contact</RouterLink>
            </nav>
            <!-- CTA -->
            <RouterLink to="/login" class="btn btn-primary">Get Started</RouterLink>
        </div>
    </header>
</template>
