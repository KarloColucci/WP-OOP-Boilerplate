<?php

/**
 * Displays the footer menu.
 *
 * @package WordPress
 * @subpackage THEME_NAME
 * @since THEME_NAME 1.1.1
 */

?>

<div class="footer-container">

	<div class="footer-site-branding">

		<?php
		$blog_info    = get_bloginfo('name');
		$description  = get_bloginfo('description', 'display');

		echo '<H3 class="site-title">' . esc_html($blog_info) . '</H3>';
		echo '<p class="site-description">' . esc_html($description) . '</p>';
		?>

	</div><!-- .footer-site-branding -->

	<?php if (has_nav_menu('footer-col-1')) : ?>

		<div class="footer-sidebar">

			<?php
			$locations = get_nav_menu_locations();
			$menu = wp_get_nav_menu_object($locations['footer-col-1']);
			echo '<H3 class="sidebar-title">' . esc_html($menu->name) . '</H3>';
			?>

			<ul class="footer-menu-wrapper">

				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer-col-1',
						'items_wrap'     => '%3$s',
						'depth'          => 1,
						//'link_before'    => '<span>',
						//'link_after'     => '</span>',
						'fallback_cb'    => false,
					)
				);
				?>

			</ul><!-- .footer-menu-wrapper -->

		</div><!-- .footer-sidebar -->

	<?php endif; ?>

	<?php if (has_nav_menu('footer-col-2')) : ?>

		<div class="footer-sidebar">

			<?php
			$locations = get_nav_menu_locations();
			$menu = wp_get_nav_menu_object($locations['footer-col-2']);
			echo '<H3 class="sidebar-title">' . esc_html($menu->name) . '</H3>';
			?>

			<ul class="footer-menu-wrapper">

				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer-col-2',
						'items_wrap'     => '%3$s',
						'depth'          => 1,
						//'link_before'    => '<span>',
						//'link_after'     => '</span>',
						'fallback_cb'    => false,
					)
				);
				?>

			</ul><!-- .footer-menu-wrapper -->

		</div><!-- .footer-sidebar -->

	<?php endif; ?>

	<?php if (has_nav_menu('footer-col-3')) : ?>

		<div class="footer-sidebar">

			<?php
			$locations = get_nav_menu_locations();
			$menu = wp_get_nav_menu_object($locations['footer-col-3']);
			echo '<H3 class="sidebar-title">' . esc_html($menu->name) . '</H3>';
			?>

			<ul class="footer-menu-wrapper">

				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer-col-3',
						'items_wrap'     => '%3$s',
						'depth'          => 1,
						//'link_before'    => '<span>',
						//'link_after'     => '</span>',
						'fallback_cb'    => false,
					)
				);
				?>

			</ul><!-- .footer-menu-wrapper -->

		</div><!-- .footer-sidebar -->

	<?php endif; ?>


</div><!-- .footer-container -->


<div class="copyright-div">

	<div class="social-logo copyright-colums">

		<a><i class="fa-brands fa-github"></i></a>
		<a><i class="fa-brands fa-facebook"></i></a>
		<a><i class="fa-brands fa-twitter"></i></a>
		<a><i class="fa-brands fa-instagram"></i></a>

	</div><!-- .social-logo-->

	<div class="powered-by copyright-colums">
		<p>
			<?php

			printf(
				__('%2$s %1$s', 'theme-name'),
				$site_name = get_bloginfo('name'),
				$date = get_the_date('Y')
			);
			?>
		</p>
	</div><!-- .powered-by -->

	<div class="company-logo copyright-colums">

		<a>
			<?php
			printf(
				__('Powered by <a href="%s">WordPress</a>', 'theme-name'),
				$wordpress_url = esc_url('https://www.wordpress.org')
			);
			?></a>

	</div><!-- .company-logo-->

</div><!-- .copyright-div" -->