<?php

namespace App\Shortcodes;

use function add_shortcode;
use function add_action;

class ShortcodeLoader {

    protected $shortcodes = [];

    public function add( $class )
    {
        $this->shortcodes[] = new $class;
        return $this;
    }

    public function register()
    {
        add_action('init', [$this, 'load']);
    }

    public function load()
    {
        foreach( $this->shortcodes as $shortcode )
            add_shortcode($shortcode->getName(), [$shortcode, 'handle']);
    }
}