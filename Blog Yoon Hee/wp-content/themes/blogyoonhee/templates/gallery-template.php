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

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="n.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="s" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <script src="Box.min.js"></script>
    <script>
	      baguetteBox.run('.cards-gallery', {animation: 'slideIn'});
	</script>

<?php get_footer(); ?>