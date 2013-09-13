<?php
/**
* Use latest jQuery release
*/
if( !is_admin() ){
  wp_deregister_script('jquery');
  wp_register_script('jquery', ("http://code.jquery.com/jquery-latest.min.js"), false, '');
  wp_enqueue_script('jquery');
}

/**
 * Register our sidebars and widgetized areas.
 *
 */
function faco_widgets_init() {

  register_sidebar( array(
    'name' => 'faco',
    'id' => 'init_1',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="rounded">',
    'after_title' => '</h2>',
  ) );
}
add_action( 'widgets_init', 'faco_widgets_init' );

?>
