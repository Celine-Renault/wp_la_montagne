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
        // echo"connecté";
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

add_filter('the_content','filter_the_content' );

/**
 * Filters the post content.
 *
 * @param string $content Content of the current post.
 * @return string Content of the current post.
 */
function filter_the_content( string $content ) : string {
    // $content .= '<div>Ce contenu a été a jouté à la fin</div>';
    if(is_page()){
        $content .= '<div>Ce contenu a été ajouté à la fin</div>';
    }
   
	return $content;
}

add_filter('the_title','filter_the_title', 10, 2 );

/**
 * Filters the post title.
 *
 * @param string $title The post title.
 * @param int    $id    The post ID.
 * @return string The post title.
 */
function filter_the_title( string $title, int $id ) : string {

    // $title = 'Nouveau titre';
    // $title = '<u>Titre</u>';
	return $title;
}

add_filter('excerpt_length','filter_excerpt_length');

/**
 * Filters the maximum number of words in a post excerpt.
 *
 * @param int $number The maximum number of words. Default 55.
 * @return int The maximum number of words. Default 55.
 */
function filter_excerpt_length( int $number ) : int {
	return 10;
}



?>