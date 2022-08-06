<?php

/**
 * Displays main menu with website logo or title
 *
 * @package WordPress
 * @subpackage THEME_NAME
 * @since THEME_NAME 1.1.1
 */

?>

<div class="main-navmenu-container">

    <div class="site-logo">

        <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'custom-logo-size');
        $blog_info    = get_bloginfo('name');

        if (has_custom_logo()) {
            echo '<a href="' . esc_url(home_url('/')) . '"><img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" width="' . get_theme_mod('logo_width') . '" height="' . get_theme_mod('logo_height') . '"></a>';
        } else {
            echo '<a href="' . esc_url(home_url('/')) . '"><h3 class="site-title-menu">' . esc_html($blog_info) . '</h3></a>';
        }
        ?>

    </div><!-- .site-logo -->

    <?php if (has_nav_menu('primary')) : ?>

        <nav id="site-navigation" class="primary-navigation" aria-label="<?php esc_attr_e('Primary menu', 'theme-name'); ?>">

            <?php
            wp_nav_menu(
                array(
                    'theme_location'  => 'primary',
                    'menu_class'      => 'menu-wrapper',
                    'container_class' => 'primary-menu-container',
                    'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
                    'fallback_cb'     => false,
                )
            );
            ?>

        </nav>
        <!--.primary-navigation -->

    <?php endif; ?>

    <nav id="site-navigation-2" class="secondary-navigation" aria-label="<?php esc_attr_e('Secondary menu', 'theme-name'); ?>">

        <?php if (has_nav_menu('secondary')) :
            wp_nav_menu(
                array(
                    'theme_location'  => 'secondary',
                    'menu_class'      => 'menu-wrapper',
                    'container_class' => 'secondary-menu-container',
                    'items_wrap'      => '<ul id="secondary-menu-list" class="%2$s">%3$s<li><a href="#" class="search-icon"><i class="fa-solid fa-search"></i></a></li></ul>',
                    'fallback_cb'     => false,
                )
            );
        ?>
        <?php else : ?>
            <ul class="menu-wrapper">
                <li><a href="#"><i class="fa-solid fa-search"></i></a></li>
            </ul>
        <?php endif; ?>

        <div class="mobile-hamburger-icon js-toggle-hamburger">
            <span class="hamburger-bars"></span>
            <span class="hamburger-bars"></span>
            <span class="hamburger-bars"></span>
        </div>

        <div class="menu-search-mobile">
         <ul><li><a href="#" class="search-icon-mobile"><i class="fa-solid fa-search"></i></a></li></ul>
        </div>

    </nav><!-- .secondary-navigation -->



</div><!-- .main-navmenu-container -->