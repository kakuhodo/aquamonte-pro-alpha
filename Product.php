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
    public function amFilterBodyClass(array $classes, array $css_class)
    {
        global $post;
        switch ($post->post_name) {
            case 'duo':
            case 'dash':
                if (in_array('layout-solo', $classes)) {
                    $key = array_search('layout-solo', $classes);
                    unset($classes[$key]);
                    $classes[] = 'layout-' . $post->post_name;
                }
                break;
            default:
                break;
        }
        return $classes;
    }

    /**
     *
     */

    /**
     *
     */

//[EOC]*/
}
