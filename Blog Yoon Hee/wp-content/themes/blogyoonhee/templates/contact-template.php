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
            

            <div class="col-md-6 miformulario">
                <form>
                <div class="form-group">
                   
                    <input type="email" placeholder="MAIL..." class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    
                    <input type="email" PLACEHOLDER="SUBJECT..." class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    
                    <textarea class="form-control" placeholder="MESSAGE..." id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                </form>
                </div>

                <div class="col-md-6 mipic">
                    <div class="">
                    <img class="img-responsive lapicture" src="http://www.yoonheefashion.info/wp-content/uploads/2019/05/yooon.jpg">
                    </div>
                </div>

                </div>
</div>
        </div>
    
        
    

<?php get_footer(); ?>