<?php
//CHARGEMENT DES FICHIERS CSS
function api_styles() {
    //Exemple - Params : ID du fichier, chemin, version, media (all, screen...)

    // Favicons
    wp_enqueue_style('favicons', get_template_directory_uri() . '/assets/img/favicon.png', array(), null);
    wp_enqueue_style('apple-touch-icon', get_template_directory_uri() . 'assets/img/apple-touch-icon.png', array(), null);

    // Google Fonts
    wp_enqueue_style('gfonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i', array(), null);    

    // Vendor CSS Files 
    wp_enqueue_style('design-aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(), null);
    wp_enqueue_style('design-base-bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('design-icons-bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(), null);
    wp_enqueue_style('design-glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', array(), null);
    wp_enqueue_style('design-swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', array(), null);

    // Template Main CSS File
    wp_enqueue_style('design-site', get_template_directory_uri() . '/assets/css/style.css', array(), null);    
    
}
// On s'accroche à la fonction de WordPress avec la fonction api_styles
add_action('wp_enqueue_scripts', 'api_styles');

function api_scripts() {
	//On deregister le jQuery inclus dans WordPress pour utiliser celui du theme et les autres JS inutiles
    //ATTENTION : il est parfois necessaire d'utiliser celui du thème HTML
    wp_deregister_script('jquery');
	
	//Exemple - Params : ID du fichier, chemin, dependance, version, in_footer
	//Mettre le plus possible le dernier parametre sur TRUE

    // Vendor JS Files
    wp_enqueue_script('purecounter', get_template_directory_uri() . '/assets/vendor/purecounter/purecounter_vanilla.js', array(), false, true);
    wp_enqueue_script('aos-script', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), false, true);
    wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), false, true);
    wp_enqueue_script('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array(), false, true);
    wp_enqueue_script('isotope-layout', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), false, true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array(), false, true);
    wp_enqueue_script('typed', get_template_directory_uri() . '/assets/vendor/typed.js/typed.min.js', array(), false, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/vendor/waypoints/noframework.waypoints.js', array(), false, true);
    wp_enqueue_script('script-email-form', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), false, true);

    // Template Main JS File
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'api_scripts');

//OPTIONS

if( function_exists('acf_add_options_page') )  {     acf_add_options_page(array(         'page_title'    => 'Options',         'menu_title'    => 'Options',         'menu_slug'     => 'options',         'icon_url'      => 'dashicons-superhero',         'capability'    => 'edit_posts',         'redirect'      => false     ));                  acf_add_options_sub_page(array         (             'page_title'    => 'MonProfil',             'menu_title'    => 'MonProfil',             'parent_slug'   => 'options',         ));               }

