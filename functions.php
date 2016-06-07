<?php

// rajouter les images à la une dans le thème
add_theme_support('post-thumbnails');

// nouveau format d'image
add_image_size('name', 100, 100, true);

// setup nav
add_action('after_setup_theme', 'nav_function');
function nav_function() {
    register_nav_menu('nav-first', __('Primary Menu', 'Triangle'));
    register_nav_menu('nav-footer', __('Footer Menu', 'Triangle'));
}

// ajout des scripts et stylesheets
add_action('wp_enqueue_scripts', 'name_of_it');
function name_of_it() {

    $version = 1;

    // stylesheets
    wp_register_style('unknown', get_stylesheet_directory_uri() . '/unknown.css', array(), $version, 'all');
    wp_enqueue_style('unknown');

    // scripts
    wp_register_script('name', get_stylesheet_directory_uri() . '/name.js', array(), $version, 'all');
    wp_enqueue_script('name');

}

// pour créer un type de contenu

$labels = array(
    'name' => __( 'Phrase' ),
    'singular_name' => __( 'Phrase' ),
    'add_new_item' => __( 'Ajouter une nouvelle Phrase' ),
    'edit_item' => __( 'Modifier une Phrase' ),
    'new_item' => __( 'Ajouter une Phrase' ),
    'all_items' => __( 'Toutes les Phrases' ),
    'view_item' => __( 'Voir la Phrase' ),
    'search_items' => __( 'Chercher dans les Phrases' ),
    'not_found' => __( 'Pas de Phrase trouvée' ),
    'not_found_in_trash' => __( 'Pas de Phrase trouvée dans la corbeille' ),
    'add_new' => __( 'Ajouter' )
);

$args =array(
    'labels'             => $labels,
    'public'             => true,
    'show_in_nav_menus'  => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'supports'           => array( 'title' , 'thumbnail', 'revisions' )
);