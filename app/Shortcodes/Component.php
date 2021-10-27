<?php

namespace App\Shortcodes;

use App\Shortcodes\Shortcode;
use Illuminate\View\ComponentAttributeBag;

class Component extends Shortcode {
    
    protected $name = 'component';

    public function handle($atts, $slot = null) {
        // Attributes
        $name = $atts['name'];
        unset($atts['name']);
    
        $className = "\\App\\View\\Components\\" . Str::studly($name);
        if( class_exists($className) )
            return __('This shortcode only works with <a href="https://laravel.com/docs/8.x/blade#anonymous-components">anonymous components</a>.', 'motto');
            // return (new $className)->render();
    
        if( !view()->exists("components.$name") )
            return __("No component class or view could be found from $name", 'motto');
        
        return view("components.$name", [
            'slot' => $slot,
            'attributes' => new ComponentAttributeBag($atts),
        ])->render();
    }
}