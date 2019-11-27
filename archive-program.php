<!-- IF SOMEONE WANTED TO VIEW BLOG POSTS FROM A CERTAIN CATEGORY OR AUTHOR IT'S THIS PAGE THAT WILL SHOW UP -->

<?php

get_header(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">

        <!-- IF IT'S A CATEGORY SHOW IT IN BANNERR ELSE SHOW THE AUTHOR NAME -->
        <!-- OR the_archive_title() can do it for everything omnth day category n author -->
        <h1 class="page-banner__title">All Programs</h1>
        <div class="page-banner__intro">
            <!--  -->
            <p>There is something for everyone</p>
        </div>
    </div>
</div>

<div class="container container--narrow page-section">
    <ul class="link-list min-list">
    <?php
    while (have_posts()) {
        the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></li>
    <?php }
    //adds link to next couple of posts
    echo paginate_links();
    ?>
    </ul>

</div> 

<?php get_footer();

?>