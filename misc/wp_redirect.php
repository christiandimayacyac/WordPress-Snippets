//Redirects the user to a page.
//The following code block redirects a user to a WP page after getting the page url by title

   
<?php
    $url = get_page_by_title("This is the Gallery Page");
    wp_redirect(get_permalink($url));
    exit();
}

?>

//###WARNING: exit() is required after the wp_redirect() function.

