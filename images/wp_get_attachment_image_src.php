//Returns the image from a post with a specified image size
//full -built-in WP size. Otherwise, a registered image size label can be use
//The code below is used to display the attached post thumbnail to blog page w/c is index.php

<?php
    $blog_page = get_option('posts_per_page');
    $image = get_post_thumbnail_id($blog_page);
    $imgae = wp_get_attachment_image_src($image, 'full'); //full -built-in image size label
?>

