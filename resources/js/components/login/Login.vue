<template>
    
    <div>

        
  <v-form @submit.prevent="login">
        
    <v-container>
      <v-layout>
      
         <v-flex
          xs12
          md4
        >
          <v-text-field v-model="form.email"
           
            label="E-mail"
            type="email"
            required
          ></v-text-field>
        </v-flex>
       
        <v-flex
          xs12
          md4
        >
          <v-text-field v-model="form.password"
          
            label="Enter Password"
            type="password"
            required
          ></v-text-field>

          
        </v-flex>

     

        
     
      </v-layout>

         <v-btn color="green" dark type="submit" style="margin-left:0px;">Login</v-btn>
         <router-link to="/signup" tag="button" class="v-btn theme--dark orange">
         Signu Up
         </router-link>
         
    </v-container>
    
  </v-form>

  


    </div>






</template>

<script>



export default {
   
 data() {
     return {
         form: {
             email: null,
             password: null
         }

     }
 },
 methods: {

   login(){
     User.login(this.form);
   }
   
 }

}
</script>

<style>

</style>
