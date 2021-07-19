<template>
    <div class="app-container">
        <h1 v-if="showHeader">Laravel + Vue Test</h1>
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: "App.vue",
    data: function() {
        return {
            showHeader: false,
        };
    },
    created: function() {
        const path = this.$route.path;
        if (path !== '/login' && path !== '/signup') {
            this.showHeader = true;
        }
    }
}
</script>

<style scoped>
.app-container {
    width: 100vw;
    height: 100vh;
}
</style>
