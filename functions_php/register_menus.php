<?

function themeName_menus() {
    //add menus
   register_nav_menus(array(
       'primary-menu' => __('Main Menu', 'itemdesc or themename')
   ));
}

//hook the enque
add_action('init', 'themeName_menus');