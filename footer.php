<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 *
 * @package WordPress
 * @subpackage THEME_NAME
 * @since THEME_NAME 1.1.1
 */

?>

</main><!-- .site-main -->
</div><!-- .content-area -->


<footer id="website-footer" class="site-footer">

	<?php get_template_part('template-parts/footer/footer-menu'); ?>

</footer><!-- .site-footer -->


</div><!-- .site-content-wrapper -->
</div><!-- .site -->

<?php wp_footer(); ?>

</body>

</html>