<?

function themeName_styles() {
    //adding stylesheets
    wp_register_style('normalize', get_template_directory_uri(). '/css/normalize.css', array(), '8.0.0' );
    wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0.0' );

    //enque the style(s)
    wp_enqueue_style('normalize');
    wp_enqueue_style('style');
}

//hook the enque
add_action('wp_enqueue_scripts', 'themeName_styles');