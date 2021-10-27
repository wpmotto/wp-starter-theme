<?php

namespace App\Shortcodes;

abstract class Shortcode {

    protected $name;

    public function getName()
    {
        return $this->name;
    }

    abstract public function handle($atts, $slot = null);
}