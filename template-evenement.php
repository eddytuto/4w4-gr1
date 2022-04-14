<?php /*Template Name: Évenement*/ ?>
<h1>----template-evenement----</h1>
<?php get_header() ?>
<main class="site__main">
    
    <?php if (have_posts()): while(have_posts()): the_post(); ?>
    <?php the_post_thumbnail()?>
    <?php the_title() ?>
    <?php the_content() ?>
    <?php endwhile ?>
    <?php endif ?>
</main>
<?php get_footer() ?>