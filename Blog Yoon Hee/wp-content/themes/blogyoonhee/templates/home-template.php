<?php 

/*
Template Name: home-template
*/

?>

<?php 
get_header(); 
get_template_part('partials/navbars/asidenavbar');
?>

        
    
        <!-- Page Content  -->
       
<div class="miheader col" id="content">
   
<div class="micontainer col">
          <?php get_template_part('partials/toggle'); ?>
        </div>
            <div class="mioverlay"></div>
            
        
       
            <!--<div class="embed-responsive embed-responsive-16by9 videoWrapper">-->
                <video playsinline="playsinline" muted loop controls autoplay>
                    <source src="http://www.yoonheefashion.info/wp-content/uploads/2019/05/videoYoonHee.mp4" type="video/mp4" class="elsupervideo">
                </video>
          <!--  </div>-->

        
</div>
</div>

    
    

<?php get_footer(); ?>