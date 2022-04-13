<?php get_header() ?>
<main class="site__main">
<?php wp_nav_menu(array(
        "menu"=> "menu_accueil",
        "container" => "nav")); ?>

   <?php if (have_posts()): the_post(); ?>
   <h1><?php the_title() ?></h1>
        <?php the_content() ?>   
  
   <?php endif ?>
</main>
<?php get_footer() ?>