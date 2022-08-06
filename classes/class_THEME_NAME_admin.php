<?php

/**
 *  Admin-side functionalities.
 */

class THEME_NAME_Admin
{

	private $theme_name;

	private $theme_version;

	public function __construct($theme_name, $theme_version)
	{
		$this->theme_name = $theme_name;
		$this->theme_version = $theme_version;

		add_action('admin_enqueue_scripts', array($this, 'enqueue_scripts'));
		add_action('admin_enqueue_scripts', array($this, 'enqueue_styles'));
		add_filter('upload_mimes', array ($this , 'allowing_svg') , 10, 1);		
	}

	/**
	 * Register the stylesheets for the admin area.
	 */

	public function enqueue_styles()
	{
		wp_enqueue_style($this->theme_name . '_admin_css',  get_stylesheet_directory_uri() . '/assets/css/admin-side.css', array(), $this->theme_version, 'all');
	}

	/**
	 * Register the JavaScript for the admin area.
	 */

	public function enqueue_scripts()
	{
		wp_enqueue_script($this->theme_name . '_admin_js',  get_stylesheet_directory_uri() . '/assets/js/' . $this->theme_name . '_admin.js', array('jquery'), $this->theme_version, false);
	}

	/**
	 * Allow SVG Image upload
	 */

	function allowing_svg($mimes) {

		//image SVG
		$mimes['svg']  = 'image/svg+xml';
		$mimes['svgz'] = 'image/svg+xml';

		return $mimes; 
	}

}
