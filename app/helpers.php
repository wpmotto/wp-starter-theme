<?php

/**
 * Theme helpers.
 */

namespace App;

use function add_action;
use function apply_filters;
use App\Shortcodes\Component;
use App\Shortcodes\ShortcodeLoader;

/**
 * Add Google Fonts Preconnect
 */
function load_google_fonts() {
    $fontUrl = apply_filters('theme_google_fonts_link', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
    echo <<<EOT
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="$fontUrl">    
    <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="$fontUrl">
    <noscript>
        <link rel="stylesheet" href="$fontUrl">
    </noscript>    
    EOT;    
}
add_action('wp_head', __NAMESPACE__ . '\\load_google_fonts', 1);

(new ShortcodeLoader)->add(Component::class)->register();