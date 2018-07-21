<?

function themeName_setup() {
    //enable post-thumbnail option in WP Dashboard
    add_theme_support('post-thumbnails');
}
//hook the setup
add_action('after_setup_theme', 'themeName_setup');

?>