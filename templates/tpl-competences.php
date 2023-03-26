<?php
/*
  Template Name: Mes compétences
  Description : modèle de la page mes compétences
 */
get_header();
?>


<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2><?php the_field('titre-comp');?></h2>
          <p><?php the_field('zone-txt-comp');?></p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

          <?php

            // Check rows exists.
            if( have_rows('repeteur-comp-1') ):

                // Loop through rows.
                while( have_rows('repeteur-comp-1') ) : the_row();

                ?>

            <div class="progress">
              <span class="skill"><?php the_sub_field('libelle-comp');?> <i class="val"><?php the_sub_field('pourcent-comp');?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php the_sub_field('pourcent-comp');?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <?php
                // End loop.
                endwhile;
            // Do something...
            endif;

            wp_reset_query();

            ?>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

          <?php

            // Check rows exists.
            if( have_rows('repeteur-comp-2') ):

              // Loop through rows.
              while( have_rows('repeteur-comp-2') ) : the_row();

              ?>

            <div class="progress">
              <span class="skill"><?php the_sub_field('libelle-comp');?> <i class="val"><?php the_sub_field('pourcent-comp');?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php the_sub_field('pourcent-comp');?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <?php
                // End loop.
                endwhile;
            // Do something...
            endif;

            wp_reset_query();

            ?>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2><?php the_field('titre-parcours-pro');?></h2>
          <p><?php the_field('texte-parcours-pro');?></p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Résumé</h3>
            <div class="resume-item pb-0">
              <h4><?php the_field('resume-nom');?></h4>
              <p><em><?php the_field('resume-description');?></em></p>
              <ul>
              <?php

                // Check rows exists.
                if( have_rows('resume-liste') ):

                  // Loop through rows.
                  while( have_rows('resume-liste') ) : the_row();

                  ?>
                <li><?php the_sub_field('resume-champ-liste');?></li>

                <?php
                // End loop.
                endwhile;
                // Do something...
                endif;

                wp_reset_query();

                ?>
              </ul>
            </div>

            <h3 class="resume-title">Formations</h3>
              <?php

              // Check rows exists.
              if( have_rows('formation-liste') ):

                // Loop through rows.
                while( have_rows('formation-liste') ) : the_row();

                ?>
                <div class="resume-item">
                  <h4><?php the_sub_field('formation-letitre');?></h4>
                  <h5><?php the_sub_field('formation-annee-debut');?> - <?php the_sub_field('formation-annee-fin');?></h5>
                  <p><em><?php the_sub_field('formation-ecole');?></em></p>
                  <p><?php the_sub_field('formation-description');?></p>
                </div>
              <?php
                // End loop.
                endwhile;
                // Do something...
                endif;

                wp_reset_query();

                ?>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Experiences Professionnelles</h3>
            <?php

            // Check rows exists.
            if( have_rows('experience-pro-liste') ):

              // Loop through rows.
              while( have_rows('experience-pro-liste') ) : the_row();

              ?>
            <div class="resume-item">
              <h4><?php the_sub_field('experience-pro-titre');?></h4>
              <h5><?php the_sub_field('experience-pro-annee-debut');?> - <?php the_sub_field('experience-pro-annee-fin');?></h5>
              <p><em><?php the_sub_field('experience-pro-entreprise');?></em></p>
              <ul>
                <?php

                // Check rows exists.
                if( have_rows('experience-pro-mission') ):

                // Loop through rows.
                while( have_rows('experience-pro-mission') ) : the_row();

                ?>
                <li><?php the_sub_field('mission-desciription');?></li>
                <?php
                // End loop.
                endwhile;
                // Do something...
                endif;

                wp_reset_query();

                ?>
              </ul>
            </div>
            <?php
            // End loop.
            endwhile;
            // Do something...
            endif;

            wp_reset_query();

            ?>
            
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->



<?php get_footer();?>