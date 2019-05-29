<?php 

/*
Template Name: gallery-template
*/

?>

<?php 
get_header(); 
get_template_part('partials/navbars/forgallery');
?>

<!-- Page Content  -->
<div id="content">
    <?php get_template_part('partials/toggle'); ?>
            
<!-- Gallery Content -->
<section class="gallery-block cards-gallery">
   	<div class="container">
   		<div class="row">
   			<div class="col-md-6 col-lg-4 pl-2 pr-2  py-3">
   				<div class="card border-0 transform-on-hover">
   					<a class="lightbox" href="http://www.yoonheefashion.info/wp-content/uploads/2019/05/DSF0003.jpg"><img src="http://www.yoonheefashion.info/wp-content/uploads/2019/05/PH-Gallery-1.jpg" class="card-img-top"></a>
   				</div>
   			</div>
   			
   			<div class="col-md-6 col-lg-4 pl-2 pr-2  py-3">
   				<div class="card border-0 transform-on-hover">
   					<a class="lightbox" href="http://www.yoonheefashion.info/wp-content/uploads/2019/05/DSF0013.jpg"><img src="http://www.yoonheefashion.info/wp-content/uploads/2019/05/PH-Gallery-2.jpg" class="card-img-top"></a>
   				</div>
   			</div>
   			
   			<div class="col-md-6 col-lg-4 pl-2 pr-2  py-3">
   				<div class="card border-0 transform-on-hover">
   					<a class="lightbox" href="http://www.yoonheefashion.info/wp-content/uploads/2019/05/DSF9966.jpg"><img src="http://www.yoonheefashion.info/wp-content/uploads/2019/05/PH-Gallery-3.jpg" class="card-img-top"></a>
   				</div>
   			</div>
   		</div>
   		
   		
   		<div class="row">
   			<div class="col-md-6 col-lg-4 pl-2 pr-2  py-3">
   				<div class="card border-0 transform-on-hover">
   					<a class="lightbox" href="http://www.yoonheefashion.info/wp-content/uploads/2019/05/DSF9978.jpg"><img src="http://www.yoonheefashion.info/wp-content/uploads/2019/05/PH-Gallery-4.jpg" class="card-img-top"></a>
   				</div>
   			</div>
   			
   			<div class="col-md-6 col-lg-4 pl-2 pr-2  py-3">
   				<div class="card border-0 transform-on-hover">
   					<a class="lightbox" href="http://www.yoonheefashion.info/wp-content/uploads/2019/05/DSF9990.jpg"><img src="http://www.yoonheefashion.info/wp-content/uploads/2019/05/PH-Gallery-5.jpg" class="card-img-top"></a>
   				</div>
   			</div>
   			
   			<div class="col-md-6 col-lg-4 pl-2 pr-2  py-3">
   				<div class="card border-0 transform-on-hover">
   					<a class="lightbox" href="http://www.yoonheefashion.info/wp-content/uploads/2019/05/DSF0003.jpg"><img src="http://www.yoonheefashion.info/wp-content/uploads/2019/05/PH-Gallery-1.jpg" class="card-img-top"></a>
   				</div>
   			</div>
   		</div>
   	</div>
   </section>

   
    <!-- BaguetteBox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>

<?php get_footer(); ?>