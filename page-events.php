<?php
/**
 * Template Name: Events
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package University_Lab_Partners
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section id="eventsIntro" class="container">
					
					<h2 class="text-center">Events at University Lab Partners</h2>
					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

					<div class="upRecentEventsContainer">
						<div class="row">
							<div class="col-sm-6">
								<div class="upRecentEventsContainerInner">
									<h2 class="text-center">Upcoming Events</h2>
									<div class="upFeed">

										<?php 
										   // the query
										   $the_query = new WP_Query( array(
										   		'post_type'			 => 'events',
										      'posts_per_page' => 3,
										   )); 
										?>

										<?php if ( $the_query->have_posts() ) : ?>
										  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

										    <div class="upFeedItem">
														<div class="row">
															<div class="col-3">
																<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
															</div>
															<div class="col-9">
																<p class="postTime"><?php the_field('event_date'); ?></p>
																<h4 class="postTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
																<p class="postTease"><?php the_excerpt(); ?></p>
																<p class="postReadMore"><a href="<?php the_permalink(); ?>">Read More</a></p>
															</div>
														</div>
													</div>
										    

										  <?php endwhile; ?>
										  <?php wp_reset_postdata(); ?>

										<?php else : ?>
										  <p><?php __('No News'); ?></p>
										<?php endif; ?>

									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="upRecentEventsContainerInner">
									<h2 class="text-center">Recent Events</h2>
									<div class="upFeed">

										

										<?php 
										   // the query
										   $the_query = new WP_Query( array(
										   		'post_type'			 => 'events',
										      'posts_per_page' => 3,
										   )); 
										?>

										<?php if ( $the_query->have_posts() ) : ?>
										  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

										    <div class="upFeedItem">
														<div class="row">
															<div class="col-3">
																<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
															</div>
															<div class="col-9">
																<p class="postTime"><?php the_field('event_date'); ?></p>
																<h4 class="postTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
																<p class="postTease"><?php the_excerpt(); ?></p>
																<p class="postReadMore"><a href="<?php the_permalink(); ?>">Read More</a></p>
															</div>
														</div>
													</div>
										    

										  <?php endwhile; ?>
										  <?php wp_reset_postdata(); ?>

										<?php else : ?>
										  <p><?php __('No News'); ?></p>
										<?php endif; ?>

									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</section>

			<section id="pastEvents" class="container">
				<h2 class="text-center">Past Events</h2>
				<div class="grid">
					<div class="row">
						<div class="col-sm-4">
							<div class="pastEventContainer">
								<div class="pastEventImageContainer">
									<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/event-demo.jpg" alt="">
									<div class="pastEventTeaser">
										<h3>Pellentesque habitant morbi tristique</h3>
									</div>
								</div>
								<p class="pastEventDate text-center">24 July, 2018</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="pastEventContainer">
								<div class="pastEventImageContainer">
									<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/event-demo.jpg" alt="">
									<div class="pastEventTeaser">
										<h3>Pellentesque habitant morbi tristique</h3>
									</div>
								</div>
								<p class="pastEventDate text-center">24 July, 2018</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="pastEventContainer">
								<div class="pastEventImageContainer">
									<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/event-demo.jpg" alt="">
									<div class="pastEventTeaser">
										<h3>Pellentesque habitant morbi tristique</h3>
									</div>
								</div>
								<p class="pastEventDate text-center">24 July, 2018</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="pastEventContainer">
								<div class="pastEventImageContainer">
									<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/event-demo.jpg" alt="">
									<div class="pastEventTeaser">
										<h3>Pellentesque habitant morbi tristique</h3>
									</div>
								</div>
								<p class="pastEventDate text-center">24 July, 2018</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="pastEventContainer">
								<div class="pastEventImageContainer">
									<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/event-demo.jpg" alt="">
									<div class="pastEventTeaser">
										<h3>Pellentesque habitant morbi tristique</h3>
									</div>
								</div>
								<p class="pastEventDate text-center">24 July, 2018</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="pastEventContainer">
								<div class="pastEventImageContainer">
									<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/event-demo.jpg" alt="">
									<div class="pastEventTeaser">
										<h3>Pellentesque habitant morbi tristique</h3>
									</div>
								</div>
								<p class="pastEventDate text-center">24 July, 2018</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="pastEventContainer">
								<div class="pastEventImageContainer">
									<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/event-demo.jpg" alt="">
									<div class="pastEventTeaser">
										<h3>Pellentesque habitant morbi tristique</h3>
									</div>
								</div>
								<p class="pastEventDate text-center">24 July, 2018</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="pastEventContainer">
								<div class="pastEventImageContainer">
									<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/event-demo.jpg" alt="">
									<div class="pastEventTeaser">
										<h3>Pellentesque habitant morbi tristique</h3>
									</div>
								</div>
								<p class="pastEventDate text-center">24 July, 2018</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="pastEventContainer">
								<div class="pastEventImageContainer">
									<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/event-demo.jpg" alt="">
									<div class="pastEventTeaser">
										<h3>Pellentesque habitant morbi tristique</h3>
									</div>
								</div>
								<p class="pastEventDate text-center">24 July, 2018</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="pastEventContainer">
								<div class="pastEventImageContainer">
									<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/event-demo.jpg" alt="">
									<div class="pastEventTeaser">
										<h3>Pellentesque habitant morbi tristique</h3>
									</div>
								</div>
								<p class="pastEventDate text-center">24 July, 2018</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="pastEventContainer">
								<div class="pastEventImageContainer">
									<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/event-demo.jpg" alt="">
									<div class="pastEventTeaser">
										<h3>Pellentesque habitant morbi tristique</h3>
									</div>
								</div>
								<p class="pastEventDate text-center">24 July, 2018</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="pastEventContainer">
								<div class="pastEventImageContainer">
									<img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/event-demo.jpg" alt="">
									<div class="pastEventTeaser">
										<h3>Pellentesque habitant morbi tristique</h3>
									</div>
								</div>
								<p class="pastEventDate text-center">24 July, 2018</p>
							</div>
						</div>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
