<?php get_header() ?>
<main class="site__main">
<?php wp_nav_menu(array(
        "menu"=> "menu_accueil",
        "container" => "nav")); ?>

   <?php if (have_posts()): the_post(); ?>
   <h1><?php the_title() ?></h1>
        <?php the_content() ?>   
  
   <?php endif ?>
    <!-- <div class="animation__bloc"><a href="">1</a></div> 
    <div class="animation__bloc"><a href="">2</a></div> 
    <div class="animation__bloc"><a href="">3</a></div> 
    <div class="animation__bloc"><a href="">4</a></div> 
    <div class="animation__bloc"><a href="">5</a></div>  -->
    <?php get_sidebar("animation");?>

   
</main>
<?php get_footer() ?>