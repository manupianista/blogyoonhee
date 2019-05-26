<?php 

/*
Template Name: Collections 1 - template
*/

?>

<?php get_header(); ?>

<div class="container">
 
     <div class="container gallery-container">
       
         <h1 class="text-center">Bootstrap 3 Gallery</h1>
       
         <p class="page-description text-center">Grid Layout With Zoom Effect</p>
           
         <div class="tz-gallery">
       
             <div class="row mb-3">
                 <div class="col-md-4">
                     <div class="card">
                         <a class="lightbox">
                         <img src="http://www.yoonheefashion.info/wp-content/uploads/2019/05/DSC0970.jpg" class="img-fluid" alt="Park" class="card-img-top">
                         </a>
                     </div>
                 </div>
                  
                 <div class="col-md-4">
                     <div class="card">
                         <a class="lightbox">
                         <img src="http://www.yoonheefashion.info/wp-content/uploads/2019/05/DSC0974-2.jpg" alt="Park" class="card-img-top">
                         </a>
                     </div>
                 </div>
                  
                 <div class="col-md-4">
                     <div class="card">
                         <a class="lightbox">
                         <img src="http://www.yoonheefashion.info/wp-content/uploads/2019/05/DSC0980.jpg" alt="Park" class="card-img-top">
                         </a>
                     </div>
                 </div>
             </div>
               <div class="row"> 
                 <div class="col-md-4">
                     <div class="card">
                         <a class="lightbox">
                         <img src="http://www.yoonheefashion.info/wp-content/uploads/2019/05/DSC0977.jpg" alt="Park" class="card-img-top">
                         </a>
                     </div>
                 </div>
                  
                 <div class="col-md-4">
                     <div class="card">
                         <a class="lightbox">
                         <img src="http://www.yoonheefashion.info/wp-content/uploads/2019/05/DSC0943.jpg" alt="Park" class="card-img-top">
                         </a>
                     </div>
                 </div>
                  
                 <div class="col-md-4">
                     <div class="card">
                         <a class="lightbox">
                         <img src="http://www.yoonheefashion.info/wp-content/uploads/2019/05/DSC0961.jpg" alt="Park" class="card-img-top">
                         </a>
                     </div>
                 </div>
              
             </div>
       
         </div>
       
     </div>
      
     </div>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js">
     <script>
        baguetteBox.run('.tz-gallery');
     </script>

<?php get_footer(); ?>