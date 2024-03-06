<template>
    <div>
        <Nav />
        <router-view></router-view>
        <Sidebar />
    </div>
</template>
<script setup>
import { ref } from "vue";
import Nav from "../components/Nav.vue";
import Sidebar from '../components/Sidebar.vue';
</script>