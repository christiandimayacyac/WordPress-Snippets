//Synatax: add_image_size(identifier, width, height, crop)
//WP Plugin "Regenerate Thumbnails is used after registering image sizes"

<?php 

    function themeName_setup() {
        add_image_size('gallery_box', 420, 310, true);
    }


    add_action('after_setup_theme', 'themeName')

?>