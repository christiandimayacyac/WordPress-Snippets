//An image is rendered according to the specified size.
//Use WP Plugn Regenerate Thumbnails to regenerate images after registering images sizes.
        //See add_image_size.php for registering image sizes in the function.php
//gallery_box is the name of the registered image size in the function.php
//image[0] - index 0 contains the image URL after selecting return Image ID from ACF

<?php 
    $image_id = get_field('the_image');
    $image = wp_get_attachment_image_src($image_id, 'gallery_box'); 
?>
<img src="<?php echo $image[0]; ?>" alt="image" class="post__img"> 