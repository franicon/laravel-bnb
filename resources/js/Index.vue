<template>
    <nav class="navbar bg-white border-bottom navbar-light">
        <router-link :to="{ name: 'home' }" class="px-4 navbar-brand mr-auto"> LaravelBnb </router-link>
        <router-link :to="{ name: 'contact' }" class=" px-4 btn nav-button"> contact </router-link>
    </nav>
    <div class="container mb-4 mt-4 pe-4">
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: "Index"
}
</script>

<style scoped>

</style>
