<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package University_Lab_Partners
 */

get_header();
?>
<script type="text/javascript">

		jQuery(window).load(function() {
	var container = document.querySelector('#ms-container');
	var msnry = new Masonry( container, {
		itemSelector: '.ms-item',
		columnWidth: '.ms-item',
	});

		});


</script>

<h2>The latest news from ULP</h2>
<div class="container">
<div class="row" id="ms-container">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<!-- ADD OVERLAY HERE -->

    <div class="ms-item col-lg-6 col-md-6 col-sm-6 col-xs-12">

        <?php if (has_post_thumbnail()) : ?>

            <figure class="article-preview-image">

                <?php the_post_thumbnail('large'); ?>

            </figure>

        <?php else : ?>

        <?php endif; ?>

            <h6 class="post-title"><a href="<?php the_permalink(); ?>" class="post-title-link"><?php the_title(); ?></a></h6>
						<P>
							<?php the_author(); ?>  |	<?php the_category( ', ' ); ?>
						</P>
						<hr>
        <?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="btn btn-green btn-block read-more-button">Read More</a>
				    <div class="clearfix"></div>
				<hr>
				<p>
				<?php comments_number( $zero, $one, $more ); ?>  |	<?php the_date(); ?>
				</p>
    <div class="clearfix"></div>

				<div class="overlay">
					<div class="overlay-text">
									<span class="overlay-title">
										<h6 class="post-title"><a href="<?php the_permalink(); ?>" class="post-title-link"> <?php the_title(); ?></a></h6>
									</span>
									<P>
										<?php the_author(); ?>  |	<span class="overlay-link"> <?php the_category( ', ' ); ?> </span>
									</P>
									<hr>
							<?php the_excerpt(); ?>

									<div class="clearfix"></div>
							<hr>
							<p>
							<span class="overlay-link"> <?php comments_number( $zero, $one, $more ); ?>  |	<?php the_date(); ?> </span>
							</p>
					<div class="clearfix"></div>
				</div><!-- end text -->
				</div><!-- end overlay -->
    </div>

    <?php endwhile; ?>
  <?php  else : ?>

        <article class="no-posts">

            <h1><?php _e('No posts were found.'); ?></h1>

        </article>
    <?php endif; ?>

	</div> <!--end row ms-container -->
<div class="clearfix"></div>

<!--paginationn functions here -->
<div class="news-navigation">
	<span class="pagination-buttons">
			<?php
			$args = array(
				'numberposts' => 10,
				'offset' => 0,
				'category' => 0,
				'orderby' => 'post_date',
				'order' => 'DESC',
				'include' => '',
				'exclude' => '',
				'meta_key' => '',
				'meta_value' =>'',
				'post_type' => 'post',
				'post_status' => 'draft, publish, future, pending, private',
				'suppress_filters' => true
			);

			$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
			?>
	</span>
	<span class="nav-previous pagination-buttons"><?php previous_posts_link( '<' ); ?></span>
	<span class="nav-next pagination-buttons"><?php next_posts_link( '>' ); ?></span>
</div>



</div><!--end container -->

<?php get_footer(); ?>
