<?php
/*
  Template Name: Qui suis-je ?
  Description : modèle de la page Qui suis-je ?
 */
get_header();
?>


 <!-- ======= About Section ======= -->
 <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Qui suis-je ?</h2>
          <p><?php the_field('qsj-description');?></p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="<?php the_field('qsj-mon-image');?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3><?php the_field('qsj-profession');?></h3>
            <p class="fst-italic">
            <?php the_field('petite-description-qui-je-suis');?>
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                <?php

                // Check rows exists.
                if( have_rows('liste-infos-qsj-1') ):

                // Loop through rows.
                while( have_rows('liste-infos-qsj-1') ) : the_row();

                ?>
                  <li><i class="bi bi-chevron-right"></i> <strong><?php the_sub_field('libelle-info');?> : </strong> <span><?php the_sub_field('champ-info');?></span></li>
                <?php
                // End loop.
                endwhile;
                // Do something...
                endif;

                wp_reset_query();

                ?>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <?php

                  // Check rows exists.
                  if( have_rows('liste-infos-qsj-2') ):

                  // Loop through rows.
                  while( have_rows('liste-infos-qsj-2') ) : the_row();

                  ?>
                    <li><i class="bi bi-chevron-right"></i> <strong><?php the_sub_field('libelle-info');?> : </strong> <span><?php the_sub_field('champ-info');?></span></li>
                  <?php
                  // End loop.
                  endwhile;
                  // Do something...
                  endif;

                  wp_reset_query();

                  ?>
                  </ul>
              </div>
            </div>
            <p>
            <?php the_field('qsj-petit-resume');?>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Mes passions</h2>

          <?php

          // Check rows exists.
          if( have_rows('mes-passions') ):

          // Loop through rows.
          while( have_rows('mes-passions') ) : the_row();

          ?>

          <h3><?php the_sub_field('titre-passion');?></h3>

          <p><?php the_sub_field('description-passion');?></p>


          <br>

          <?php
          // End loop.
          endwhile;
          // Do something...
          endif;

          wp_reset_query();

          ?>

        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php the_field('nombre-projets');?>" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Nombre de projets réalisés</strong></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php the_field('nombre-annees-formation');?>" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Nombre d'années de formation post-BAC</strong></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php the_field('nombre-annees-experience-pro');?>" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Nombre d'années d'expérience professionnelle</strong></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

<?php get_footer();?>