<?php

function mytheme_setup_theme() {
  load_theme_textdomain( 'mytheme', get_template_directory() . '/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo', array(
      'width' => 190,
      'height' => 110, 
      'flex-height' => true, 
      'flex-height' => true, 
    ));

    /**
     * Register Nav Menus
     */
    register_nav_menus(
      array(
        'header-menu' => esc_html__( 'Header Menu', 'mytheme' )
      )
      );
}

add_action( 'after_setup_theme', 'mytheme_setup_theme' );

function mytheme_enqueue_scripts() {
  wp_enqueue_style( 'mytheme-style', get_template_directory_uri() . '/assets/css/style.css' );
  wp_enqueue_style( 'mytheme-google-fonts', '//fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap' );

  wp_enqueue_script( 'mytheme-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), false, true );
}

add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_scripts' );
