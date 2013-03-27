<?php
  function Square_init() {
    /* Cleaing Up wp_head() */
    remove_action( 'wp_head', 'wlwmanifest_link'); // Removes Winwdows Live Writer publishing
    remove_action( 'wp_head', 'index_rel_link'); // Removes the index link
    remove_action( 'wp_head', 'wp_generator'); // Removes the Wordpress version i.e. - WordPress 3.1.1
    remove_action( 'wp_head', 'rsd_link'); // Remove rsd+xml edit url
    remove_action( 'wp_head', 'feed_links_extra', 3 ); // Remove the links to the extra feeds such as category feeds
    remove_action( 'wp_head', 'index_rel_link'); // Remove index-meta
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head'); // Remove next/prev meta


    wp_enqueue_script( 'modernizr', get_template_directory_uri().'/js/vendor/modernizr-2.6.2.min.js', "2.6.5", false);
    
    wp_enqueue_script( 'theme-plugins-script', get_template_directory_uri().'/js/plugins.js', array('jquery'), "1.0.0", true);
    wp_enqueue_script( 'theme-init-script', get_template_directory_uri().'/js/main.js', array('jquery'), "1.0.0", true);
  }
  add_action('init', 'Square_init');
?>