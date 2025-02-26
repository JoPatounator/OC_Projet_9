<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/css/style.css');
    //wp_enqueue_style('swiper-bundle.min.css', get_stylesheet_directory_uri() . '/css/style-fade-in.css');
    //wp_enqueue_style('swiper-bundle.min.css', 'https://unpkg.com/swiper/swiper-bundle.min.css', [], null);
}


//----------------------------------------------- Scripts JS ---------------------------------------------------------------------------------------------------------------
// Prise en charge le l'animation "slide-up"
function enqueue_titre_slide_up_script()
{
    //  Mise en file d'attende du script "titre-slide-up.js" et "skrollr.min.js"
    wp_enqueue_script('titre-slide-up', get_stylesheet_directory_uri() . '/js/titre-slide-up.js', array(), null, true); // "true" force le chargement du js en pied de page.
}
add_action('wp_enqueue_scripts', 'enqueue_titre_slide_up_script');

// Prise en charge le l'initialisation de skrollr "init-parallax.js"
function enqueue_init_parallax_script()
{
    wp_enqueue_script('parallax', get_stylesheet_directory_uri() . '/js/init-parallax.js', array('skrollr'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_init_parallax_script');

// Prise en charge de skrollr "skrollr.min.js"
function enqueue_skrollr_script()
{
    wp_enqueue_script('skrollr', get_stylesheet_directory_uri() . '/js/skrollr.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_skrollr_script');

/*function enqueue_swiper_scripts()
{
    wp_enqueue_script('init-swipperJS.js', get_stylesheet_directory_uri() . '/js/init-swipperJS.js', array(), null, true);
    wp_enqueue_script('swiper-bundle.min.js', get_stylesheet_directory_uri() . '/js/swiper-bundle.min.js', array(), null, true);
    //wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_scripts');*/

/*function wp_enqueue_swiper()
{
    wp_enqueue_style('swiper-css', get_stylesheet_directory_uri() . '/css/init-swipperJS.js', array(), null, true);
    wp_enqueue_script('swiper-js', get_stylesheet_directory_uri() . '/js/swiper-bundle.min.js');
}
add_action('wp_enqueue_scripts', 'wp_enqueue_swiper');*/

function wp_enqueue_swiper()
{
    wp_enqueue_style('swiper-css', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js');
    wp_enqueue_script('init-swiperJS.js', get_stylesheet_directory_uri() . '/js/init-swiperJS.js', array('swiper-js'), null, true);
}
add_action('wp_enqueue_scripts', 'wp_enqueue_swiper');

//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// Get customizer options form parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // prevent update to child theme mods
    }, 10, 2);
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}
