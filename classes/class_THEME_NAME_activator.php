
<?php
/**
 * Defines all actions to run after theme activation.
 *
 */

class THEME_NAME_activator
{

    private $theme_name;

    private $theme_version;

    public function __construct($theme_name, $theme_version)
    {

        $this->theme_name = $theme_name;
        $this->theme_version = $theme_version;

        add_action('after_switch_theme',  array($this, 'custom_actions_on_activation'));
    }

    /**
     * Fired after theme activation
     */

    public function custom_actions_on_activation()
    {
        printf(
            __(
                '<div class="updated notice is-dismissible">
                <p> Welcome on board </p>
                </div>',
                'theme-name'
            ),
        );
    }
}
