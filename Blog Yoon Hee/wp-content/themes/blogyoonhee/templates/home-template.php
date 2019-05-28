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
<div class="micontainer">
          <?php get_template_part('partials/toggle'); ?>
        </div>
            <div class="mioverlay"></div>
            
        
       
            <!--<div class="embed-responsive embed-responsive-16by9 videoWrapper">-->
                <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" controls>
                    <source src="http://www.yoonheefashion.info/wp-content/uploads/2019/05/videoYoonHee.mp4" type="video/mp4">
                </video>
          <!--  </div>-->
        
</div>
</div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    
    

<?php get_footer(); ?>