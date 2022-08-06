<?php

/**
 * Displays the mobile dropdown menu
 *
 * @package WordPress
 * @subpackage THEME_NAME
 * @since THEME_NAME 1.1.1
 */

?>

<div class="mobile-dropdown-menu">
    <nav class="mobile-navigation">
        <?php
        wp_nav_menu(
            array(
                'theme_location'  => 'mobile',
                'menu_class'      => 'mobile-menu-wrapper',
                'container_class' => 'mobile-menu-container',
                'items_wrap'      => '<ul id="mobile-menu-list" class="%2$s">%3$s</ul>',
                'fallback_cb'     => false,
            )
        );
        ?>
    </nav>

</div><!-- .mobile-dropdown-menu -->