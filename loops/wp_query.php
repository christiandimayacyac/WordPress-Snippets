<?php $loop = new WP_Query(array('post_type'=>'CPT_name', 'post_per_page' => 10, 'orderby' => 'post-id', 'order' => 'ASC', 'category_name' => 'technology')); ?>


<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
   
   
<?php endwhile; wp_reset_postdata()(); ?>
    