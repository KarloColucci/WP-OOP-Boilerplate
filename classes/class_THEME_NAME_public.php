
<?php

/**
 * Public-facing functionalities.
 */

class THEME_NAME_Public
{

    private $theme_name;

    private $theme_version;

    public function __construct($theme_name, $theme_version)
    {

        $this->theme_name = $theme_name;
        $this->theme_version = $theme_version;

        add_action('wp_enqueue_scripts', array($this, 'enqueue_styles'));
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
    }

    /**
     * Register the stylesheets for the public-facing side of the site.
     */

    public function enqueue_styles()
    {
        wp_enqueue_style($this->theme_name . '_public_css', get_stylesheet_directory_uri() . '/style.css', array(), $this->theme_version);
        wp_enqueue_style($this->theme_name . '_fontawsome', get_stylesheet_directory_uri() . '/assets/fontawesome/css/all.css', array(), $this->theme_version, 'all');
    }

    /**
     * Register the JavaScript for the public-facing side of the site.
     */

    public function enqueue_scripts()
    {
        wp_enqueue_script($this->theme_name . '_public_js',   get_stylesheet_directory_uri() . '/assets/js/' . $this->theme_name . '_public.js', array('jquery'), $this->theme_version, false);
    }
}
