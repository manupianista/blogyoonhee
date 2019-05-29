<?php 

/*
Template Name: contact-template
*/

?>

<?php
 
            //response messages
        /*$not_human       = "Human verification incorrect.";*/
        $missing_content = "Please supply all information.";
        $email_invalid   = "Email Address Invalid.";
        $message_unsent  = "Message was not sent. Try Again.";
        $message_sent    = "Thanks! Your message has been sent.";
        
        //user posted variables
        $name = $_POST['message_name'];
        $email = $_POST['message_email'];
        $message = $_POST['message_text'];
        $subjectmsg = $_POST['message_subject'];
       /* $human = $_POST['message_human'];*/
        
        //php mailer variables
        $to = get_option('admin_email');
        $subject = $subjectmsg;
        $headers = 'From: '. $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n";
  //response generation function
  $response = "";
 
  //function to generate response
  function my_contact_form_generate_response($type, $message){
 
    global $response;
 
    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";
 
  }
 if(isset($_POST['submitted'])){
    //validate email
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    my_contact_form_generate_response("error", $email_invalid);
    else //email is valid
    {
            //validate presence of name and message
        if(empty($name) || empty($message)){
            my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
                    $sent = wp_mail($to, $subject, $message, $headers);
        if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
        else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
    
    }
 }
  //if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);
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
            <?php echo $response; ?>
                <form class="elform" action="<?php the_permalink(); ?>" method="post">
                <div class="form-group">
                   
                    <input type="text" placeholder="NAME..." class="form-control" id="exampleFormControlInput1" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>">
                </div>
                <div class="form-group">
                   
                    <input type="email" placeholder="MAIL..." class="form-control" id="exampleFormControlInput1" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>">
                </div>
                <div class="form-group">
                    
                    <input type="text" PLACEHOLDER="SUBJECT..." class="form-control" id="exampleFormControlInput1" name="message_subject" value="<?php echo esc_attr($_POST['message_subject']); ?>">
                </div>
                <div class="form-group">
                    
                    <textarea class="form-control formmsg" placeholder="MESSAGE..." id="exampleFormControlTextarea1" rows="3" name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea>
                </div>
                <input type="hidden" name="submitted" value="1"> 
                <button type="submit" class="btn btn-primary">Submit</button>
                
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