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
            
<!-- Collection No. 1 Content -->
<section class="gallery-block cards-gallery">
   	<div class="container">
   		<div class="row">
   			<div class="col-md-6 col-lg-4 pl-2 pr-2">
   				<div class="card border-0 transform-on-hover">
   					<a class="lightbox" href=""><img src="" class="card-img-top"></a>
   				</div>
   			</div>
   			
   			<div class="col-md-6 col-lg-4 pl-2 pr-2">
   				<div class="card border-0 transform-on-hover">
   					<a class="lightbox" href=""><img src="" class="card-img-top"></a>
   				</div>
   			</div>
   			
   			<div class="col-md-6 col-lg-4 pl-2 pr-2">
   				<div class="card border-0 transform-on-hover">
   					<a class="lightbox" href=""><img src="" class="card-img-top"></a>
   				</div>
   			</div>
   		</div>
   		
   		
   		<div class="row">
   			<div class="col-md-6 col-lg-4 pl-2 pr-2">
   				<div class="card border-0 transform-on-hover">
   					<a class="lightbox" href=""><img src="" class="card-img-top"></a>
   				</div>
   			</div>
   			
   			<div class="col-md-6 col-lg-4 pl-2 pr-2">
   				<div class="card border-0 transform-on-hover">
   					<a class="lightbox" href=""><img src="" class="card-img-top"></a>
   				</div>
   			</div>
   			
   			<div class="col-md-6 col-lg-4 pl-2 pr-2">
   				<div class="card border-0 transform-on-hover">
   					<a class="lightbox" href=""><img src="" class="card-img-top"></a>
   				</div>
   			</div>
   		</div>
   	</div>
   </section>
</div>
       
    <script src="Box.min.js"></script>
    <script>
	      baguetteBox.run('.cards-gallery', {animation: 'slideIn'});
	</script>

<?php get_footer(); ?>