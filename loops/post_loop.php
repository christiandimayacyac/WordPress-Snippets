<?php while (have_posts()) : the_post(); ?>
    <?php the_post_thumbnail(); ?>
    <?php the_title(); ?>
    <?php the_content(); ?>
<?php endwhile; ?>