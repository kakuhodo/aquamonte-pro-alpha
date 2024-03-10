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
     *
    public function hookActionGetTemplatePart(string $slug, string $name, array $templates, array $args)
    {
        $templates[] = "templates/$slug.php";
        $this->slap($templates);
    }

    /**
     *
     */

    /**
     *
     */

//[EOC]*/
}
