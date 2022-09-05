<?php
/*
  Plugin Name: My Register Form
  Description: Formulaire d'inscription
  Author: Moi
 */

function example_form_plugin(){

    $content ='';
    $content .='<h2>Contactez-nous</h2>';

    $content .='<form method="post" action="http://localhost:8080/?page_id=141">';

    $content .='<label>Nom</label>';
    $content .='<input type="text" name="your_name" placeholder="Entrer votre prénom"/>';

    $content .='<label>Prénom</label>';
    $content .='<input type="text" name="your_firstname" placeholder="Entrer votre nom"/>';

    $content .='<label>Email</label>';
    $content .='<input type="email" name="your_email" placeholder="Entrer votre email"/>';

    $content .='<label>Message</label>';
    $content .='<textarea name="your_comments">Entrer votre message</textarea>';

    $content .='<br /><input type="submit" name="example_form_submit" value="SUBMIT"/>';
    $content .='</form>';

    return $content;
}

add_shortcode('example_form','example_form_plugin');

function example_form_capture(){
    if(isset($_POST['example_form_submit'])){
        // echo "<pre>";print_r($_POST);echo "</pre>";

        $name = sanitize_text_field($_POST['your_name']);
        $firstname = sanitize_text_field($_POST['your_firstname']);
        $email = sanitize_text_field($_POST['your_email']);
        $comments = sanitize_textarea_field($_POST['your_comments']);

        $to = 'celine@yopmail.com';
        $subject = 'Test form submission';
        $message =''.$name.' _ '.$firstname.' _ '.$email.' _ '.$comments;

        wp_mail($to, $subject, $message);
    }

}
add_action('wp_head','example_form_capture');
?>