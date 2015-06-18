<?php
// ----------------------------------
// TO-DO:
// 1 contenu personalité
// 1 short code
// 1 widgets ou plugins (expliquer son choix)
// ----------------------------------

add_action('wp_enqueue_scripts','gui_name_script');
function gui_name_script() {
	wp_enqueue_script( 'stylesheet', get_template_directory_uri() . '/style.css');
}

function display_hello()
{
    echo '<h1>Bonjour !</h1>';
    echo '<p>Bienvenu sur mon theme "themGui" !<p>';
}


add_action('widgets_init','gui_add_sidebar');
function gui_add_sidebar()
{
    register_sidebar(array(
        'id' => 'my_custom_zone',
        'name' => 'Zone supérieure',
        'description' => 'Apparait en haut du site',
        'before_widget' => '<aside>',
        'after_widget' => '</aside>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
    ));
}


$defaults = array(
    'default-image'           => '',
    'random-default'          => false,
    'width'                   => 0,
    'height'                  => 0,
    'flex-height'             => false,
    'flex-width'              => false,
    'default-text-color'      => '',
    'header-text'             => true,
    'uploads'                 => true,
    'wp-head-callback'        => '',
    'admin-head-callback'     => '',
    'admin-preview-callback'  => ''
);

add_theme_support('custom-header', $defaults);


function onglet_options() {
    
}








// add_action('init', 'gui_add_menu');
// function gui_add_menu()
// {
//     register_nav_menu('main_menu', 'Menu Moana');
// }