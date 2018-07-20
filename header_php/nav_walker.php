<?php
    wp_nav_menu( array(
        'theme_location'    => 'primary-menu',
        'container'         => 'nav',
        'container_class'   => 'navbar-collapse collapse',
        'menu_class'        => 'nav navbar-nav navbar-right'
    ) );
    
    wp_nav_menu( array(
        'theme_location'    => 'socials-menu',
        'container'         => 'nav',
        'container_class'   => 'socials',
        'container_id'      => 'socials',
        'link_before'       => '<span class="sr-only"',
        'link_after'        => '</span>'
    ) );
?>

// Social Icons are displayed while anchor tag text is hidden