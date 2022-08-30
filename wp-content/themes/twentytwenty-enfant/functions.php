<?php 
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

// on vérifie si l'utilisateur est connecté
add_action('wp','action_reference_wp' );

/**
 * Fires once the WordPress environment has been set up.
 *
 * @param \WP $wp Current WordPress environment instance (passed by reference).
 */
function action_reference_wp(\WP $wp) : void {
    if(is_user_logged_in()){
        echo"connecté";
    }
}

// Si je ne suis pas connecté je n'ai pas accès à la page a propos 
//et je suis rediriger vers la page d'accueil
add_action("template_redirect",'action_template_redirect');

/**
 * Fires before determining which template to load.
 *
 */
function action_template_redirect() : void {
    if(!is_user_logged_in()&&is_page('a-propos')){ // is_page('slug page a propos')
        wp_redirect('/');
        exit;
    }
}
?>