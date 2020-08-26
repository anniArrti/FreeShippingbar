<template>
  <div class="container mt-4 pb-4 border">
    <form @submit.prevent="getFormValues">
       <div class="row mt-4">
          <div class="col-md-12 mb-4">
            <h4>Style Configuration</h4>
         </div>
           <div class="col-md-4">
               <label>Background Color</label>
                <input type="color" class="form-control" name="bg_color" v-model="setting.bg_color">
           </div>
           <div class="col-md-4">
               <label>Text Color</label>
               <input type="color" class="form-control" name="txt_color" v-model="setting.txt_color">
           </div>
           <div class="col-md-4">
               <label>Special Text Color</label>
               <input type="color" class="form-control" name="spt_color" v-model="setting.spt_color">
           </div>
       </div>
       <div class="row mt-4">
           <div class="col-md-5">
               <label>Background Color Opacity</label>
               <input type="range" min="0" max="9" value="1" class="slider form-control" id="opacity" v-model="setting.opacity">
           </div>
       </div>
       <div class="row mt-4">
           <div class="col-md-5">
               <label>Background Image</label>
               <input type="file" class="images_C" name="bg_img" @change="previewFiles">
           </div>
       </div>
       <div class="row mt-4">
          <div class="col-md-12 mb-4">
            <h4>Content Configuration</h4>
         </div>
           <div class="col-md-5">
               <label>Name :</label>
                <input type="text" class="form-control" name="name" v-model="setting.name">
           </div>
       </div>
       <div class="row mt-4">
           <div class="col-md-5">
               <label>Free Shipping Goal :</label>
                <input type="text" class="form-control" name="goal" v-model="setting.goal">
           </div>
       </div>
       <div class="row mt-4">
           <div class="col-md-5">
               <label>Initial Message :</label>
                <input type="text" class="form-control" name="intial_msg" v-model="setting.intial_msg">
           </div>
       </div>
       <div class="row mt-4">
           <div class="col-md-5">
               <label>Progress Message</label>
                <input type="text" class="form-control" name="progress_msg" v-model="setting.progress_msg">
           </div>
       </div>
       <div class="row mt-4">
           <div class="col-md-5">
               <label>Goal Achieved Message :</label>
                <input type="text" class="form-control" name="achive_msg" v-model="setting.achive_msg">
           </div>
       </div>
       <div class="row mt-4">
           <div class="col-md-12">
               <input type="submit" class="btn btn-primary" value="Save">
           </div>
       </div>
   </form>
   </div>
</template>
<script>
   export default {
       data(){
          return {
           setting:{
            txt_color:'#000000',
            bg_color:'#000000',
            spt_color:'#000000',
            opacity:'1',
            name:'',
            goal:'',
            intial_msg:'',
            progress_msg:'',
            achive_msg:'',
          }, 
          bg_img:'',
          }
        },
        mounted(){},
        methods: {
          getFormValues (submitEvent) {
            console.log(this.setting); 
            let formData = new FormData();
            formData.append('file', this.bg_img);
            formData.append('name', this.setting.name);
            formData.append('goal', this.setting.goal);
            formData.append('intial_msg', this.setting.intial_msg);
            formData.append('progress_msg', this.setting.progress_msg);
            formData.append('opacity', this.setting.opacity);
            formData.append('achive_msg', this.setting.achive_msg);
            formData.append('spt_color', this.setting.spt_color);
            formData.append('bg_color', this.setting.bg_color);
            formData.append('txt_color', this.setting.txt_color);
           console.log(formData);
             axios.post('/create', formData,
             {
                headers: {
                  'Content-Type': 'multipart/form-data'
                }
             })
             .then(function (response) {});
          },
          previewFiles(event){
            console.log(event.target.files);
            this.bg_img = event.target.files[0];
          }
        }
      }
  </script>
