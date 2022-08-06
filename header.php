<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 *
 * @package WordPress
 * @subpackage THEME_NAME
 * @since THEME_NAME 1.1.1
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Custom WP Theme">
    <meta name="keywords" content="HTML, CSS, JQuery, Wordpress, PHP, POO">
    <meta name="author" content="DNM-WARE">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <div id="page" class="site">

        <header id="masthead" class="site-header">

            <?php get_template_part('template-parts/header/main-navmenu'); ?>
            <?php get_template_part('template-parts/header/mobile-dropdown-menu'); ?>

        </header><!-- #masthead -->

        <div id="content" class="site-content-wrapper">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">