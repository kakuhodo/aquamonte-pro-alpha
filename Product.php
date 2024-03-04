<?php
namespace Pearlpuppy\AquaMonte;

use Pearlpuppy\CoCore\Awp\Abs_Theme;

/**
 *  @file   Product
 */

/**
 *
 */
class Product extends Abs_Theme
{

    // Mixins

    /**
     *
     */

    // Constants

    /**
     *
     */

    // Properties

    /**
     *
     */

    // Constructor

    /**
     *
     */

    // Methods

    /**
     *
     */
    public function hookActionAdminHead()
    {
        # !![ISSUE] use fontawesome in admin -->>> should be config
        echo '<script src="https://kit.fontawesome.com/158897db51.js" crossorigin="anonymous"></script>' . PHP_EOL;
    }

    /**
     *
     */
    public function hookActionAfterSetupTheme()
    {
        if (is_child_theme()) {
            add_editor_style(get_template_directory_uri() . '/editor-style.css');
        }
        add_editor_style('editor-style.css');
    }

    /**
     *
     */

    /**
     *
     */

//[EOC]*/
}
