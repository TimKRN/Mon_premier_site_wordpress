<?php get_header(); ?>

<div class="tt-breadcrumb" style="background-image: url('images/breadcrumb_bg.jpg')">
	<div class="container container-lg-fluid">
		<ul>
			<li><a href="<?php echo home_url()?>">Home</a></li>
			<li><?php the_title(); ?></li>
		</ul>
	</div>
</div>
<section class="container">
    <div class="row">
        <div class="col-12">
            
           <?php
             
             ?>
        <?php 
            if (have_posts()) : while (have_posts()) : the_post(); 
            the_content();
            endwhile;
            endif; 
        ?>
        </div>

    </div>
</section>

<?php get_footer();?>