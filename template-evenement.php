<?php /*Template Name: Évenement*/ ?>

<?php get_header() ?>
<main class="site__main">
    <h1>----template-evenement----</h1>
    <?php if (have_posts()): while(have_posts()): the_post(); ?>
    <?php the_post_thumbnail()?>
    <?php the_title() ?>
    <p class="evenement_resume"><?php the_field('resume') ?></p>
    <p class="evenement_endroit"><?php the_field('endroit') ?></p>
    <p><?php the_field('organisateur'); ?></p>
    <p><?php the_field('date'); ?></p>
    <p><?php the_field('heure'); ?></p>
    <?php the_content() ?>
    <?php endwhile ?>
    <?php endif ?>
</main>
<?php get_footer() ?>