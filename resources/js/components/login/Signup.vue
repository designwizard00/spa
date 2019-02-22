<template>

<div width="300px">

    <v-container>    
     <v-form @submit.prevent="signup">   
    <v-text-field v-model="form.name"       
      label="name"
      required
    ></v-text-field>
    <span class="red--text"></span>

    <v-text-field v-model="form.email"     
      label="email"
      required
    ></v-text-field>

      <v-text-field
      v-model="form.password" 
      type="password"    
      label="password"
      required
    ></v-text-field>

     <v-text-field v-model="form.passwrd_confirmation" 
      type="password"    
      label="password"
      required
    ></v-text-field>

     <v-btn
      type="submit"
      color="warning"
      style="margin-left:0px;"     
    > Sign Up
    </v-btn>

    <router-link 
         to="/login" 
         tag="button" 
         class="v-btn theme--dark success">
         Back To Login
    </router-link>
 </v-form>
   
    
</v-container>

</div>


</template>


<script>
export default {
   
 data() {
     return {
         form: {
             name: null,
             email: null,
             password: null,
             password_confirmation:null
         },
         errors: {

         }

     }
 },
 methods: {
     signup() {
      
         axios.post('/api/auth/signup', this.form)
            .then(res=>User.responseAfterLogin(res))
            .catch(error=>this.errors = error.response.data.errors)
     }
   
 }

}
</script>

<style>

</style> 

   


 

