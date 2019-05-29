<?php 

/*
Template Name: contact-template
*/

?>

<?php 
get_header(); 
get_template_part('partials/navbars/forcontact');
?>

        
    
        <!-- Page Content  -->
        <div id="content">

            <?php get_template_part('partials/toggle'); ?>
            <div class="container contactarea">
            <div class="row">
            

            <div class="col-md-5 miformulario">
                <form class="elform">
                <div class="form-group">
                   
                    <input type="email" placeholder="MAIL..." class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    
                    <input type="email" PLACEHOLDER="SUBJECT..." class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    
                    <textarea class="form-control formmsg" placeholder="MESSAGE..." id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                </form>
                </div>
                <div class="col-md-2 espaciopic"></div>
                <div class="col-md-5 mipic">
                    <div class="overlay1"></div>
                    <img class="img-responsive lapicture" src="http://www.yoonheefashion.info/wp-content/uploads/2019/05/yooon.jpg">
                    <div class="container1 h-100">
                    <div class=" h-100 text-center align-items-center">
                    <div class="w-100 text-white">
                        <!--<h1 class="display-3">ABOUT YOON HEE</h1>-->
                        <p class=" mb-0">My name in Yoon Hee Kim, I'm a korean fashion designer currently residing and working from Guatemala City in Central America. </p><br/>
                        <p class=" mb-0">My work revolves around approaching pattern making as the initial point of my research as well as the appreciation of the local craftsmanship`s talent, even though my aesthetical values grew apart from the guatemalan traditional palette and form; those ideas and exposure developed in me a sense of closeness and the intimacy to the pieces that I design, even though my mind frame is always set to industrial mass production.</p><br/>
                        <p class=" mb-0">My preference is for simple forms, a classical minimal approach to color and function.</p><br/>
                        <p class=" mb-0">The synergy that I found between my customs and the local traditions was a pivotal point for the way I started thinking about design and my methods as well.</p><br/>
                    </div>
                    </div>
                </div>
                </div>

                </div>
</div>
        </div>
    
        
    

<?php get_footer(); ?>