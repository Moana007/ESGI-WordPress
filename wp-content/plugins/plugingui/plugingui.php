<?php
/*
Plugin Name: Plugingui
Description: Plugin créé dans le cadre d'un projet d'école
Author: Guillaume LEGAIE
*/


add_filter('wp_title', 'plugingui_add_content', 20) ;
function plugingui_add_content($title) {
    return $title . ' Mon plugingui marche !' ;
}

// add_filter( 'plugin_action_links', 'plugingui_add_facebook', 10, 2 );
// function plugingui_add_facebook($btn) {
//     return $tbn . ' | ICI MES BOUTONS !' ;
// }