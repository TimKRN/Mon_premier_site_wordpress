<?php

 get_header(); ?>

<section class="container">
    <div class="row">
        <div class="col-12">
            <h1>Erreur 404</h1>
            <p>Cette page n'existe pas, je vous invite à retourner à l'accueil.</p>
            <div><a href="<?php echo home_url()?>">Retouner à l'accueil</a></div>
        </div>
    </div>
</section>

<?php get_footer();?>