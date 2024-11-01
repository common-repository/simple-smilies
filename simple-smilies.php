<?php
/*
Plugin Name: Simple Smilies
Text Domain: simple-smilies
Domain Path: /languages
Plugin URI: http://dianakcury.com/wordpress/dev/simple-smilies
Description: Let your visitors insert any WordPress smilies when commenting in your site.
Author: Dianakc
Author URI: http://dianakcury.com/
*/


add_action( 'init', 'simple_smilies_init',1 );

function simple_smilies_init(){
    load_plugin_textdomain( 'simple-smilies', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
    add_filter('get_header','insert_script');
}



function insert_script(){
      if ( is_singular() )
      wp_enqueue_script( 'simple-smilies', plugins_url() . '/simple-smilies/emoticons.js');
}


function call_smilies(){
 include("emoticons.php");
}

add_action('init', 'insert_emoticons');
function insert_emoticons() {

  if (is_user_logged_in()) {
  add_action('comment_form_logged_in_after', 'call_smilies');
  } else {
  add_action('comment_form_after_fields', 'call_smilies');
  }

 }

;?>