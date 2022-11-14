<template>
  <Navbar/>
  <div class="app">
    <Sidebar/>
    <router-view />
  </div>
</template>

<script setup>
import Sidebar from './components/Sidebar.vue'
import Navbar from './components/Navbar.vue'
</script>

<style lang="scss">
:root{
  --primary: #4ade80;

}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Oswald', sans-serif;
}
.app{
  display: flex;
  main{
    flex: 1 1 0;
    padding: 2rem;
    @media (max-width: 768px){
      padding-left: 6rem;
    }
  }
}
</style>


<!--  COLORS THEME
      primary: '#274C77',
      secundary: '#45F0DF',
      terciary: '#6096BA',
      white: '#fafafa',
      black: '#171717',
      teste: '#047857'
-->