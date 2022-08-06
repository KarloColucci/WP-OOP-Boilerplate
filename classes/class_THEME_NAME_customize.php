<?php

/**
 * Customizer settings.
 *
 */

class THEME_NAME_customize
{
	public function __construct()
	{
		add_action('customize_register', array($this, 'theme_customizer_register'));
	}

	/**
	 * Register customizer options.
	 * @param Wp_Customize_Manager
	 */

	function theme_customizer_register($wp_customize)
	{

		// Add partial for blogname.
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title',
				'render_callback' => 'blogname',
			)
		);

		// Add partial for blogdescription.
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'blogdescription',
			)
		);

		// Add partial for custom logo.
		$wp_customize->selective_refresh->add_partial(
			'custom_logo',
			array(
				'selector'        => '.site-logo',
				'render_callback' => 'custom_logo',
			)
		);

		/* Custom logo resizing controls */

		$custom_logo_id = get_theme_mod('custom_logo');
		$logo = wp_get_attachment_image_src($custom_logo_id, 'custom-logo-size');
		$custom_logo_width = $logo[1];
		$custom_logo_height = $logo[2];


		//width setting
		$wp_customize->add_setting('logo_width', array(
			'default' => 180,
		));

		//height setting
		$wp_customize->add_setting('logo_height', array(
			'default' => 48,
		));

		//Logo width range control
		$wp_customize->add_control('logo_width_control', array(
			'label' => __('Range', 'theme-name'),
			'description' => __('Set your logo width', 'theme-name'),
			'type' => 'range',
			'priority' => 8,
			'section' => 'title_tagline',
			'settings' => 'logo_width',
			'input_attrs' => array(
				'min' => 0,
				'max' => 180,
				'step' => 1,
				'value' => esc_attr($custom_logo_width),
				'style' => 'cursor:pointer',
			),
		));

		//Logo height range control
		$wp_customize->add_control('logo_height_control', array(
			'description' => __('Set your logo height', 'theme-name'),
			'type' => 'range',
			'priority' => 8,
			'style' => 'cursor:pointer;',
			'section' => 'title_tagline',
			'settings' => 'logo_height',
			'input_attrs' => array(
				'min' => 0,
				'max' => 48,
				'step' => 1,
				'value' => esc_attr($custom_logo_height),
				'style' => 'cursor:pointer',
			),

		));
	}
}
