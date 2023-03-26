<?php
/*
  Template Name: Mentions légales
  Description : modèle de la page mentions légales
 */
get_header();
?>

<!-- CONTENU MENTIONS LEGALES -->
<main class="container legal-notice">

<h2>Informations légales</h2>

<p style="text-align:justify"><?php the_field('mentions-legales-texte');?> <a href="<?php the_field('url-du-site');?>" target="_blank"><?php the_field('url-du-site');?></a></p>
<br />
<?php

// Check rows exists.
if( have_rows('repeteur-mentions') ):

    // Loop through rows.
    while( have_rows('repeteur-mentions') ) : the_row();

  ?>
<h3 style="text-align:justify"><?php the_sub_field('titre-ml');?></h3>

    
<p style="text-align:justify"><?php the_sub_field('texte-ml');?></p>
<br />

<?php
    // End loop.
    endwhile;
// Do something...
endif;

wp_reset_query();

?>



</main>



<?php get_footer();?>