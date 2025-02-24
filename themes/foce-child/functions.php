<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/css/style.css');
    //wp_enqueue_style('fade-in-style', get_template_directory_uri() . '/css/style-fade-in.css');
}

// Prise en charge le l'animation "slide-up"
add_action('wp_enqueue_scripts', 'enqueue_titre_slide_up');
function enqueue_titre_slide_up()
{
    //  Mise en file d'attende du script "titre-slide-up.js"
    wp_enqueue_script('titre-slide-up', get_stylesheet_directory_uri() . '/js/titre-slide-up.js', array(), null, true); // "true" force le chargement du js en pied de page.
}

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
