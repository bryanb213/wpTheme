<!-- IF SOMEONE WANTED TO VIEW BLOG POSTS FROM A CERTAIN CATEGORY OR AUTHOR IT'S THIS PAGE THAT WILL SHOW UP -->

<?php

get_header(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">

        <!-- IF IT'S A CATEGORY SHOW IT IN BANNERR ELSE SHOW THE AUTHOR NAME -->
        <!-- OR the_archive_title() can do it for everything omnth day category n author -->
        <h1 class="page-banner__title">All Events</h1>
        <div class="page-banner__intro">
            <!--  -->
            <p>See what's going on in our world!</p>
        </div>
    </div>
</div>

<div class="container container--narrow page-section">
    <?php
    while (have_posts()) {
        the_post(); ?>
        <div class="event-summary">
            <a class="event-summary__date t-center" href="<?php the_permalink(); ?>">
                <span class="event-summary__month"><?php
                //get date and format it
                $eventDate = new DateTime(get_field('event_date'));
                echo $eventDate->format('M'); ?></span>
                <span class="event-summary__day"><?php //get date and format it
                // $eventDate = new DateTime(get_field('event_date'));
                echo $eventDate->format('d'); ?></span>
            </a>
            <div class="event-summary__content">
                <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
                <p><?php echo wp_trim_words(get_the_content(), 15); ?><a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
            </div>
        </div>
    <?php }
    //adds link to next couple of posts
    echo paginate_links();
    ?>
    <hr class="section-break">
    <p>Looking for a Of past events?<a href="<?php echo site_url('/past-events') ?>">Check out our past events archive</a>.</p>

</div>

<?php get_footer();

?>