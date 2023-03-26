<?php
get_header();
?>


<main id="tt-pageContent">
	<div class="section-indent">
		<div class="container container-md-fluid">
			<div class="row">
				<div class="col-12 col-sm-7 col-md-8">
					<div class="blog-single">
						<div class="blog-single__img">
							<img src="images/blog/blog_img01_large.jpg" alt="">
						</div>
						<div class="blog-single__wrapper">
							<div class="blog-single__data">
                            <div class="tt-col">
									<div class="data__time"><?php echo get_the_date('d/m/Y')?></div>
								</div>
								<div class="tt-col">
									<div class="data__posted">Posted by: <a href="#"><?php the_author() ?></a></div>
								</div>

							</div>
							<h1 class="blog-single__title"><?php the_title() ?></h1>
                                <div class="blog-obj__img">
                                        <a href="blog-item.html"><?php the_post_thumbnail() ?></a>
                                </div>
							<blockquote class="blockquote03">
								<?php the_content()?>
								
							
								<div class="tt-col">
									<ul class="tt-social">
										<li><a href="#" class="icon-twitter-logo-button"></a></li>
										<li><a href="#" href="https://www.facebook.com/sharer.php?u=<?php urlencode($url) ?>"class="icon-facebook-logo-button"></a></li>
										<li><a href="#" class="icon-instagram-logo"></a></li>
									</ul>
								</div>
							</div>
							<div class="personal-info personal-info__top">
								<div class="personal-info__img">
									<img src="images/blog/personal-box__img01.jpg" alt="">
								</div>
								
									
					<div class="tt-block-aside tt-block-aside__shadow">
						<h3 class="tt-aside-title">Tags</h3>
						<div class="tt-aside-content">
							<nav class="nav-categories">
                                <?php echo wp_list_categories() ?>
                            </nav>
						</div>
					</div>
					<div class="tt-block-aside">
						<h3 class="tt-aside-title">Resent Posts</h3>
						<div class="tt-aside-content">
							<div class="tt-recent-list slick-type01 slick-dotted" data-slick='{
									"dots": true,
									"arrows": false,
									"infinite": true,
									"speed": 300,
									"slidesToShow": 1,
									"slidesToScroll": 1,
									"adaptiveHeight": true
								}'>
                                <?php 
                                $the_query = new WP_Query
                                (
                                    array
                                    (
                                    'orderby' => 'ASC',
                                    'orderby' => 'ID',
                                    'posts_per_page' => 3,
                                    )
                                );
        
                                    while ($the_query->have_posts()) :
                                    $the_query->the_post();
                                ?>

								<div class="tt-item">
                                    <div class="blog-obj">
                                    <div class="blog-obj__img">
                                        <a href="blog-item.html"><?php the_post_thumbnail() ?></a>
                                    </div>
                                    <div class="blog-obj__wrapper">
                                        <div class="blog-obj__data">
                                            <div class="tt-col">
                                                <div class="data__time"><?php echo get_the_date('d/m/Y')?></div>
                                            </div>
                                            <div class="tt-col">
                                                <div class="data__posted">Posted by: <a href="#"><?php the_author() ?></a></div>
                                            </div>
                                            
                                        </div>
                                        <h3 class="blog-obj__title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                                        <p>
                                        <?php echo the_excerpt()?>
                                        </p>
                                        <div class="blog-obj__row-btn">
                                            <a href="<?php the_permalink() ?>" class="tt-btn btn__color01"><span class="icon-lightning"></span>Read more</a>
                                        </div>
                                    </div>
                                </div>


                                </div>
                                 <?php endwhile; wp_reset_query();?>

							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer();