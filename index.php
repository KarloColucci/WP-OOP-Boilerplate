<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage THEME_NAME
 * @since THEME_NAME 1.1.1
 */


get_header();


printf(
    __(
        '<h1>WP OOP Boilerplate</h1>
         <p> Set your menus and start building your theme according the <a href="%1$s">WordPress template hierarchy.</a></p>
         <p> If you want to get more details, check the <a href="%2$s">readme.md</a> file.</p>',
        'theme-name'
    ),
    $url_wp_template_hierarchy =  esc_url('https://developer.wordpress.org/themes/basics/template-hierarchy/'),
    $read_me_file = get_template_directory_uri() . '/readme.md'
);

get_footer();
