<template>
  <div id="app">
    <Argonautes />
  </div>
</template>

<script>
import Argonautes from './components/Argonautes.vue'

export default {
  name: 'App',
  components: {
    Argonautes
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
 
}
</style>
