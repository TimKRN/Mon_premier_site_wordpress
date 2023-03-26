<?php
/*
  Template Name: Portfolio
  Description : modèle de la page portfolio
 */
get_header();
?>


<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p><?php the_field('page-portfolio-description');?></p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">

            <li data-filter="*" class="filter-active">Tous les projets</li>
            <?php

            // Check rows exists.
            if( have_rows('liste-des-filtres') ):

                // Loop through rows.
                while( have_rows('liste-des-filtres') ) : the_row();

                ?>
              
              <li data-filter=".filter-<?php the_sub_field('nom-du-filtre');?>"><?php the_sub_field('nom-du-filtre');?></li>

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

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

        <?php

            // Check rows exists.
            if( have_rows('portfolio') ):

                // Loop through rows.
                while( have_rows('portfolio') ) : the_row();

                ?>
              
          <div class="col-lg-4 col-md-6 portfolio-item filter-<?php the_sub_field('pjt-class');?>">
            <div class="portfolio-wrap">
              <h3><?php the_sub_field('pjt-titre');?></h3>
              <img src="<?php the_sub_field('pjt-image');?>" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?php the_sub_field('pjt-url');?>" target="_blank">Voir sur GitHub</a>
              </div>
              <p><?php the_sub_field('pjt-description');?></p>
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
    </section><!-- End Portfolio Section -->
	
<?php get_footer();?>