<template>
	<div class="container mt-4 pb-4 border">
       <div class="row mt-4">
	       	<div class="col-md-12 mb-4">
	       		<h3>Free Shipping Bars</h3>
            <router-link :to="{ name: 'create' }" class="btn btn-primary float-right">Create bar</router-link>
	        </div>
          <div class="col-md-12">
            <table class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Message</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody id="tab-body">
                <tr>No bar found</tr>
              </tbody>
            </table>
          </div>
        </div>   
   </div>
</template>
<script>
   export default {
       data(){
          return {
            data:[],
          }
        },
        mounted(){
          this.getFormValues();
        },
        methods: {
         	getFormValues () {
             axios.get('/getbars')
             .then(function (response) {
              console.log(response);
             });
  		    },
        }
      }
  </script>
