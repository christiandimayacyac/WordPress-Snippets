'admin_email' – E-mail address of blog administrator.
'blogname' – Weblog title; set in General Options.
'blogdescription' – Tagline for your blog; set in General Options.
'blog_charset' – Character encoding for your blog; set in Reading Options.
'date_format' – Default date format; set in General Options.
'default_category' – Default post category; set in Writing Options.
'home' – The blog’s home web address; set in General Options.
'siteurl' – WordPress web address; set in General Options.
####Warning: This is not the same as get_bloginfo( 'url' ) (which will return the homepage url), but as get_bloginfo( 'wpurl' ).
'template' – The current theme’s name; set in Presentation.
'start_of_week' – Day of week calendar should start on; set in General Options.
'upload_path' – Default upload location; set in Miscellaneous Options.
'users_can_register' – Whether users can register; set in General Options.
'page_for_posts' - returns the id of the index page //USED to get the post thumbnail of the index page
'posts_per_page' – Maximum number of posts to show on a page; set in Reading Options.
'posts_per_rss' – Maximum number of most recent posts to show in the syndication feed; set in Reading Options.


Ex.


<?php
    $blog_page = get_option('posts_per_page');
    $image = get_post_thumbnail_id($blog_page);
    $imgae = wp_get_attachment_image_src($image, 'full'); //full -built-in image size label
?>

