<?php
/*
  Template Name: Accueil
  Description : modèle de la page d'accueil
 */
get_header('accueil');
?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1><?php the_field('mon-nom-prenom');?></h1>
      <p>Je suis <span class="typed" data-typed-items="<?php

// Check rows exists.
if( have_rows('liste-je-suis') ):

    // Loop through rows.
    while( have_rows('liste-je-suis') ) : the_row();

    ?><?php the_sub_field('libelle-je-suis');?>,<?php
    // End loop.
    endwhile;
  // Do something...
  endif;

  wp_reset_query();

  ?>"></span></p>
  <br>
  <p><a href="<?php the_field('url-cv');?>" target="_blank">Voir mon CV</a></p>
    </div>
  </section><!-- End Hero -->

<?php get_footer();?>