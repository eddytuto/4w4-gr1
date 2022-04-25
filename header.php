<?php
/**
 * L'entête « header » de chacune des pages de notre site
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    
</head>

<body <?php body_class("site"); ?> >
    <header class="site__header">
        <div class="site__header__titre">
            <?php echo get_custom_logo();  ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <h1 class="header__titre"><?php bloginfo('name'); ?> </h1>
            </a>
            <h2 class="header__description"><?php bloginfo('description'); ?></h2>
        </div>
        
        <div class="util">
            <div class="util__menu">
                <?php get_sidebar("entete_1");?>
            </div>
        </div>
    </header>
    <section class="site__barre">
        <input type="checkbox" id="chk-burger">
        <label for="chk-burger" id="burger">
            <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                color="#ddd">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </label>
       
        <?php 
             $icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#f00"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
            wp_nav_menu(array(
                        "menu"=>"Menu",
                        "link_before"=>$icone)); 
        ?> 
    </section>