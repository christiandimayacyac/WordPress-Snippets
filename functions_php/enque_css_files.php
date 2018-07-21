<?

function themeName_styles() {
    //adding scripts
    wp_register_script('jquery', get_template_directory_uri(). '/js/jquery3.2.2.js', array(), '8.0.0', true );
    wp_register_script('script', get_template_directory_uri(). '/js/main.js', array(), '1.0.0', true );

    //enque the script(s)
    wp_enqueue_script('jquery');
    wp_enqueue_script('script');
}

//hook the enque
add_action('wp_enqueue_scripts', 'themeName_styles');


// ------above code could be added together with the stylesheets------ //
<?

function themeName_styles() {
    //adding stylesheets
    wp_register_style('normalize', get_template_directory_uri(). '/css/normalize.css', array(), '8.0.0' );
    wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0.0' );

    //enque the style(s)
    wp_enqueue_style('normalize');
    wp_enqueue_style('style');
    
    //adding scripts
    wp_register_script('jquery', get_template_directory_uri(). '/js/jquery3.2.2.js', array(), '8.0.0', true );
    wp_register_script('script', get_template_directory_uri(). '/js/main.js', array(), '1.0.0', true );

    //enque the script(s)
    wp_enqueue_script('jquery');
    wp_enqueue_script('script');
}

//hook the enque
add_action('wp_enqueue_scripts', 'themeName_styles');