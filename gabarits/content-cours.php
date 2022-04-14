<?php
    $categorie = get_the_category();
?>
<article class="formation__cours <?php echo $categorie[1]->slug; ?>">
        <?php
        $titre = get_the_title();
        $titreFiltreCours = substr($titre, 4, -6);
        $nbHeures = get_field("nombre_dheures");
        $departement = get_field("departement");
        $sigleCours = substr($titre, 0, 7);
        $descCours = get_the_excerpt();
        ?>
        <?php the_post_thumbnail("thumbnail"); ?>
        <h3 class="cours__titre">
            <a href="<?php echo get_permalink(); ?>">
                <?= $titreFiltreCours; ?>
            </a>
        </h3>
        <div class="cours__nbre-heure"><?= $nbHeures; ?></div>
        <p class="cours__sigle"><?= $sigleCours; ?> </p>
        <p class="cours__desc"> <?= $descCours; ?></p>
        <p class="cours__dep"><?= $departement ?></p>
</article>