<?php
/*
  Template Name: Plan du site
  Description : modèle de la page plan du site
 */
get_header();
?>


<div class="container">
<div class="row">
  <div class="col-lg-12">
    <div class="page-content">
        <div class="col-lg-12">
          <?php wp_nav_menu(array('menu'=>'plan_de_site')); ?>
        </div>
    </div>
  </div>
</div>
</div>




<?php get_footer();?>