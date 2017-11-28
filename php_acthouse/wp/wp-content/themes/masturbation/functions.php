<?php
register_sidebar(array('id' => 'sidebar-1'));
?>

<?php

add_theme_support('post-thumbnails');

?>

<?php

  function my_scripts() {
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'index',get_template_directory_uri().'/js/index.js',array('jquery'));
  }
    add_action( 'wp_enqueue_scripts', 'my_scripts' );

?>