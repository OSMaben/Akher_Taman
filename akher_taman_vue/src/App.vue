<template>
  <div id="app">
    <MyHeader />
    <router-view></router-view>
    <MyFooter />
  </div>
</template>

<script>
import MyHeader from "./components/HeaderApp.vue";
import MyFooter from "./components/FooterApp.vue";

export default {
  name: 'App',
  components: {
    MyHeader,
    MyFooter
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
