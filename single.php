<!-- FOR WP POST CONTENT -->
<?php
    while(have_posts()){
        the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <h2><?php the_content(); ?></h2>
        <?php
    }
    
?>
