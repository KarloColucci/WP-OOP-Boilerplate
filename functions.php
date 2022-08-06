<?php

/**
 * Core functions and definitions
 *
 * @package WordPress
 * @subpackage THEME_NAME
 * @since THEME_NAME 1.1.1
 */


class wp_custom_theme
{

	private $theme_name;

	private $theme_version;

	public function __construct()
	{
		$this->theme_name = 'THEME_NAME';
		$this->theme_version = '1.1.1';
		$this->load_theme_dependencies();
		add_action('after_setup_theme', array($this, 'custom_theme_setup'));
	}

	/**
	 * Loads core custom theme classes 
	 */

	private function load_theme_dependencies()
	{
		// The class responsible for defining all actions in the admin area.
		require_once dirname(__FILE__) . '/classes/class_THEME_NAME_admin.php';
		new THEME_NAME_Admin($this->theme_name, $this->theme_version);

		//The class responsible for defining all actions in the public side 
		require_once dirname(__FILE__) . '/classes/class_THEME_NAME_public.php';
		new THEME_NAME_Public($this->theme_name, $this->theme_version);

		//The class responsible for defining all custom actions in the customizer
		require_once dirname(__FILE__) . '/classes/class_THEME_NAME_customize.php';
		new THEME_NAME_customize();

		//The class responsible for defining all actions after theme activation
		require_once dirname(__FILE__) . '/classes/class_THEME_NAME_activator.php';
		new THEME_NAME_activator($this->theme_name, $this->theme_version);
	}

	/**
	 * Sets up theme and registers support for various WordPress features.
	 */

	public function custom_theme_setup()
	{
		//Make theme available for translations.
		load_theme_textdomain('theme-name', get_template_directory() . '/languages');

		//register menus and footers
		register_nav_menus(array(
			'primary'   => __('Primary Menu', 'theme-name'),
			'secondary' => __('Secondary Menu', 'theme-name'),
			'mobile' => __('Mobile dropdown Menu', 'theme-name'),
			'footer-col-1' => __('Footer sidebar 1', 'theme-name'),
			'footer-col-2' => __('Footer sidebar 2', 'theme-name'),
			'footer-col-3' => __('Footer sidebar 3', 'theme-name'),
		));

		//add support for WooCommerce
		add_theme_support('woocommerce');

		//Let WordPress manage the document title tag.
		add_theme_support('title-tag');

		//Enable support for Post Thumbnails on posts and pages.
		add_theme_support('post-thumbnails');

		// Add theme support for customizer selective refresh.
		add_theme_support('customize-selective-refresh-widgets');

		//Add support for core custom logo.
		//logo upload and resizing though customizer API
		$defaults = array(
			'height'               => 48,
			'width'                => 180,
			'flex-height'          => true,
			'flex-width'           => true,
			'header-text'          => false,
			'unlink-homepage-logo' => false,
		);
		add_theme_support('custom-logo', $defaults);

		add_image_size('custom-logo-size', 180, 48, array('left', 'top'));
	}
}

$custom_theme = new wp_custom_theme();
