//Registers the image thumbnail size and initializes/updates the WP Dashboard W x H Media Settings
//A Regenerate Thumbnail Plugin is required to regenerate thumbnails

<?php
    function themeName_setup() {
        update_option('thumbnail_size_w', 253);
        update_option('thumbnail_size_h', 164);
    }
    add_action('after_theme_setup', 'themeName_setup');
?>

