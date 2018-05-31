<?php

// Navigation

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu('nav_main', 'Navigations Links am Desktop');
}



?>