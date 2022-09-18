<?php
 function my_script() {
  wp_enqueue_script(
    'myscript',
    get_template_directory_uri() . '/script.js',
    array(),/* 読み込むべきjsあれば記述する。 */
    false,/* バージョン番号 */
    true/* falseだとheader,trueだとfooterでjsが読み込まれる */
  );
}
add_action( 'wp_enqueue_scripts' , 'my_script' );

add_filter('script_loader_tag', 'add_defer', 10, 2);
function add_defer($tag, $handle) {
  if($handle !== 'myscript') {
    return $tag;
  }

  return str_replace(' src=', ' defer src=', $tag);
}

  add_action('init', 'registerCustomPost');
  function registerCustomPost() {
    $labels = array('name' => 'ニュース', 'singular_name' => 'news-list');
    $args = array(
      'labels' => $labels,
      'public' => true,
      'exclude_from_search' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'menu_position' => 4,
      'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
    );
    register_post_type('news-list', $args);
  }

  add_action('init', 'registerCustomPost2');
  function registerCustomPost2() {
    $labels = array('name' => 'コンテンツアーカイブ', 'singular_name' => 'archive');
    $args = array(
      'labels' => $labels,
      'public' => true,
      'exclude_from_search' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'menu_position' => 4,
      'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
    );
    register_post_type('archive', $args);
  }