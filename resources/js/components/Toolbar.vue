<template>
     <v-toolbar>
    <v-toolbar-side-icon></v-toolbar-side-icon>
    <v-toolbar-title>STARKS</v-toolbar-title>
    <v-spacer></v-spacer>
    <v-toolbar-items class="hidden-sm-and-down" >
      <router-link to="/login" tag="v-btn" class="v-btn--flat" >Forum</router-link>
      <router-link to="/login" tag="v-btn" class="v-btn--flat">Ask Question</router-link>
      <router-link to="/login" tag="v-btn" class="v-btn--flat">Category</router-link>    
     <router-link to="/login" tag="v-btn" class="v-btn--flat">Login</router-link>
    </v-toolbar-items>
  </v-toolbar>
</template>

<script>
export default {

}
</script>

<style>

</style>
