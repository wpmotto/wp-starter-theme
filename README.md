# WP Starter Theme

This theme is mostly based off of [Sage 10](https://github.com/roots/sage), so refer there more most the documentation.

## Customizations

### theme.json

We leverage the theme.json file native to WordPress to automatically create our color palette and some other stuff like typography.

### Added Vue + Components

JQuery has been removed and replaced with [Vue 3](https://v3.vuejs.org/guide/introduction.html). So Vue components should be used in place of any complex JQuery you might've otherwise have used. 

Some basic components have been included like a Modal and a SlideOver that have been integrated from [TailwindUI](https://tailwindui.com/). That's a good place to start if you want to integrate more components. 

### Shortcodes

There is a Shortcode loader class included that is called in the `app/helpers.php` file. Use this to load more shortcodes if necessary. 

One shortcode, `component` is already included which simply renders a blade component. Simple but pretty useful to avoid repition between your theme and the content management of WordPress.

### Styles

Some extra styling was been provided to give you a head start. 

In the **header** we've provided drop down menus and a mobile navigation with button toggle. 

Our **typography** has been aliased to WordPress's naming convention so they remain synced with our theme and the block editor headings. 

**Google Fonts** has also been preloaded in `app/helpers.php`


