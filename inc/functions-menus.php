<?php
add_action('after_setup_theme', 'theme_register_nav_menu');


function theme_register_nav_menu()
{
    register_nav_menu('header-menu', 'Header Menu');
}

# Header Menu
function header_nav()
{
    wp_nav_menu(
        array(
            'theme_location' => 'header-menu',
            'menu' => '',
            'container' => '',
            'container_class' => 'menu-{menu slug}-container',
            'container_id' => '',
            'menu_class' => 'menu font-medium flex flex-col  md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0',
            'menu_id' => '',
            'echo' => true,
            'fallback_cb' => 'wp_page_menu',
            'before' => '',
            'after' => '',
            'link_before' => '',
            'link_after' => '',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth' => 0,
            'walker' => ''
        )
    );
}

// Remove surrounding <div> from WP Navigation
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args');
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}
