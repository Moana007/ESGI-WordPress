<?php
// ----------------------------------
// TO-DO:
// 1 contenu personalité
// 1 short code
// 1 widgets ou plugins (expliquer son choix)
// ----------------------------------

// add_action('wp_enqueue_scripts','gui_name_script');
// function gui_name_script() {
// 	wp_enqueue_script( 'stylesheet', get_template_directory_uri() . '/style.css');
// }

function display_hello()
{
    echo '<h1 class="text-center">Bienvenue sur mon site de journalisme !</h1>';
}

//SIDEBAR
add_action('widgets_init','gui_add_sidebar');
function gui_add_sidebar()
{
    register_sidebar(array(
        'id' => 'my_custom_zone',
        'name' => 'Zone supérieure',
        'description' => 'Apparait sur le coté droit du site',
        'before_widget' => '<aside>',
        'after_widget' => '</aside>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
    ));
}

add_action('widgets_init','gui_add_sidebar_menu');
function gui_add_sidebar_menu()
{
    register_sidebar(array(
        'id' => 'my_custom_zone_menu',
        'name' => 'Zone menuTop',
        'description' => 'Apparait en haut du site',
        'before_widget' => '<aside>',
        'after_widget' => '</aside>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
    ));
}

// Permet de custumiser le header dans le BackOffice
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


function interview_module() {
    $args = array(
    'label' => __('Interviews'),
    'singular_label' => __('Interview'),
    'public' => true,
    'show_ui' => true,
    '_builtin' => false, // It's a custom post type, not built in
    '_edit_link' => 'post.php?post=%d',
    'capability_type' => 'post',
    'hierarchical' => false,
    'rewrite' => array("slug" => "interview"),
    'query_var' => "interviews", // This goes to the WP_Query schema
    'supports' => array('title', 'editor', 'thumbnail') //titre + zone de texte + champs personnalisés + miniature valeur possible : 'title','editor','author','thumbnail','excerpt'
    );
    register_post_type( 'interview' , $args ); // enregistrement de l'entité interview basé sur les arguments ci-dessus
    register_taxonomy_for_object_type('post_tag', 'interview','show_tagcloud=1&hierarchical=true'); // ajout des mots clés pour notre custom post type
    add_action("admin_init", "admin_init"); //function pour ajouter des champs personnalisés
    add_action('save_post', 'save_custom'); //function pour la sauvegarde de nos champs personnalisés
}
add_action('init', 'interview_module');

function admin_init(){ //initialisation des champs spécifiques
    add_meta_box("lieu_interview", "Lieu de l'interview", "lieu_interview", "interview", "normal", "low");  //il s'agit de notre champ personnalisé qui apelera la fonction lieu_interview()
}
function lieu_interview(){     //La fonction qui affiche notre champs personnalisé dans l'administration
    global $post;
    $custom = get_post_custom($post->ID); //fonction pour récupérer la valeur de notre champ
    $lieu_interview = $custom["lieu_interview"][0];
    ?>
    <input size="70" type="text" value="<?php echo $lieu_interview;?>" name="lieu_interview"/>
    <?php
}
function save_custom(){ //sauvegarde des champs spécifiques
    global $post;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) { // fonction pour éviter  le vidage des champs personnalisés lors de la sauvegarde automatique
    return $postID;
    }
    update_post_meta($post->ID, "lieu_interview", $_POST["lieu_interview"]); //enregistrement dans la base de données
}

