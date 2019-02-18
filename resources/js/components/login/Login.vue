<template>
    
    <div>

        <template>
  <v-form v-model="valid">
        
    <v-container>
      <v-layout>
      
         <v-flex
          xs12
          md4
        >
          <v-text-field
            v-model="email"
            label="E-mail"
            type="email"
            required
          ></v-text-field>
        </v-flex>
       
        <v-flex
          xs12
          md4
        >
          <v-text-field
            v-model="lastname"
            label="Enter Password"
            type="password"
            required
          ></v-text-field>

          
        </v-flex>

     

        
     
      </v-layout>

         <v-btn color="green" dark type="submit" style="margin-left:0px;">Login</v-btn>
      
    </v-container>
    
  </v-form>
</template>
  


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
 }

}
</script>

<style>

</style>
