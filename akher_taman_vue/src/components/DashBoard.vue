<template>
  <div class="container">
    <h2>Dashboard : </h2>
    <button type="button" class="btn btn-dark mt-2" @click="logout">Logout</button>
  </div>
</template>

<script setup>
import { useRouter } from 'vue-router';

const router = useRouter();

function logout() {
  localStorage.removeItem('token');
  router.push({ name: 'Home' }); // Replace 'Home' with the correct name of your home route
}
</script>


<style scoped>
</style>
