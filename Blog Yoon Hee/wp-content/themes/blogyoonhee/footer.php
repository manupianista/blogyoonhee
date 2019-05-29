</div><!-- /.row -->
 
</div><!-- /.container -->
 
<footer class="blog-footer">
    <?php if ( is_active_sidebar( 'footer-copyright-text' ) ) { dynamic_sidebar( 'footer-copyright-text' ); } ?>
</footer>
<?php wp_footer(); ?>

<<<<<<< HEAD
<script>
    $(document).ready(
    function () {
    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar, #content').toggleClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
});
</script>

=======
    <script>
	      baguetteBox.run('.cards-gallery', {animation: 'slideIn'});
	</script>
    
>>>>>>> kevin
</body>
</html>