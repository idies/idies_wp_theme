<?php 
global $post;
if ( !dynamic_sidebar( 'sidebar-' . $post->post_name ) ) {
	dynamic_sidebar('sidebar-primary');
}
?>
