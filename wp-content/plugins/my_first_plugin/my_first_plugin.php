<?php
/*
Plugin Name: Mon premier plugin
Description: Mon premier plugin !
Author: Moi
*/
echo('Salut Plugin');


add_filter('the_content','filter_count' );

/**
 * Filters the post content.
 *
 * @param string $content Content of the current post.
 * @return string Content of the current post.
 */
function filter_count( string $content ) : string {
	return str_word_count($content);
}