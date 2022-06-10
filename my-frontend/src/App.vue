<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
  <header>
    <div> 
      <div id="nav">
        <div class="wrapper">
          <div id="nav-2" class="w3-right"><RouterLink class="nav-3" to="/order">Order</RouterLink></div>
          <div id="nav-2" class="w3-right"> <RouterLink class="nav-3" to="/about">About</RouterLink></div>
          <div id="nav-2" class="w3-right"><RouterLink class="nav-3" to="/">Home</RouterLink></div>
          <h1 class="brand">Food Booking</h1>
        </div>
      </div>
    </div>
  </header>

  <div class="wrapper">
    <RouterView />
  </div>
</template>

<style>
.wrapper {
  width: 960px;
  margin: 0 auto;
}
#nav-2 {
  color: rgb(236, 226, 226);
  font-family: sans-serif;
  font-size: 17px;
  margin-top: 20px;
}
#nav-2:hover {
  background-color: rgba(175, 175, 175, 0.331);
}
.nav-3 {
  text-decoration: none;
  padding: 13px;
}
.brand {
  color: rgb(255, 255, 255);
  font-family: "Lucida Console", "Courier New", monospace;
  margin-top: 50px;
}
h1 {
  margin-top: 50px;
}
</style>
