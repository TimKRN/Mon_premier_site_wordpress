<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php the_field('nom-du-site','options');?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php wp_head()?>
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="<?php the_field('image_tim_1','options') ?>" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.php"><?php the_field('nom-du-detenteur-du-site','options');?></a></h1>
      </div>

      <div id="navbar" class="nav-menu navbar">
        <?php                           
        wp_nav_menu(array(
            'theme_location' => 'Menu principal',
            'depth' => 1,
            'container' => 'nav',
            'container_id' => 'navbar',
            'container_class' => 'nav-menu navbar',
            'menu_class' => '',
            'menu_id' => '',
        ));?> 
      </div><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->