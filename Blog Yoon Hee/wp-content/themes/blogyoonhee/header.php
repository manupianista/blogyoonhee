<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/custom/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom/animate.css">
    
    <link rel="stylesheet" href="assets/css/custom/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/custom/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/custom/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/custom/aos.css">

    <link rel="stylesheet" href="assets/css/custom/ionicons.min.css">

    <link rel="stylesheet" href="assets/css/custom/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/custom/jquery.timepicker.css">

    
    <link rel="stylesheet" href="assets/css/custom/flaticon.css">
    <link rel="stylesheet" href="assets/css/custom/icomoon.css">
    <link rel="stylesheet" href="assets/css/custom/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); 
    get_template_part('partials/asidenavbar');
    //get_header('navbarmenu');
    
    ?>
</head>

<body <?php body_class(); ?>>

