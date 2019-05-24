

<div class="blog-masthead">
    <div class="container">
        <!-- si se quiere cambiar la forma que se pone el menu cambiar estos -->
                <?php wp_nav_menu( array( 
            'theme_location' => 'header-menu', 
            'menu_class' => 'blog-nav list-inline' 
            ) ); ?>
    </div>
</div>

<div class="container">

        <div class="blog-header">
            <h1 class="blog-title"><?php bloginfo( 'name' ); ?></h1>
            <?php $description = get_bloginfo( 'description', 'display' ); ?>
            <?php if($description) { ?><p class="lead blog-description"><?php echo $description ?></p><?php } ?>
        </div>

    <div class="row">