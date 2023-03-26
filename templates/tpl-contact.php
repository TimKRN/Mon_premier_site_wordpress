<?php
/*
  Template Name: Contact
  Description : modèle de la page de contact
 */
get_header();
?>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p><?php the_field('contact-description');?></p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Adresse :</h4>
                <p><?php the_field('adresse-postale');?></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><a href="mailto:<?php the_field('adresse-email');?>"><?php the_field('adresse-email');?></a></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Téléphone:</h4>
                <p><a href="tel:<?php the_field('telephone-pro');?>"><?php the_field('telephone-pro');?></a></p>
              </div>


              <iframe src="<?php the_field('lien-gmaps');?>" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="google-map"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <?php echo do_shortcode('[contact-form-7 id="10" title="Formulaire de contact 1"]')?>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


<?php get_footer();?>