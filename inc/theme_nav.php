<?php
function register_my_menus()
{
   register_nav_menus(
      array(
         'header-menu' => __('Main Menu'),
         'footer-menu' => __('footer Menu')
      )
   );
}
add_action('init', 'register_my_menus');
