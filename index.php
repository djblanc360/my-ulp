<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
<script src="/path/to/masonry.pkgd.min.js"></script>
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

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="container">

				<div id="masonry">
				<?php
				$args = array(
				    'posts_per_page'   => 10,
				    'orderby'          => 'post_date',
				    'order'            => 'DESC',
				    'post_type'        => 'post',
				    'post_status'      => 'publish',
				    'suppress_filters' => false );

				    $recent_posts = get_posts( $args );
				    foreach ($recent_posts as $key=>$post): setup_postdata( $post ); {
				    ?>
				                <div class="item normal" data-order='1'><!--BEGIN .item -->
				                    <div <?php post_class(); ?> id="featured-<?php the_ID(); ?>">

				                        <?php


				                            if (has_post_thumbnail(get_the_ID())) {
				                                echo '<a href="' . get_permalink(get_the_ID()) . '">';
				                                echo get_the_post_thumbnail(get_the_ID(), 'archive_grid');
				                                echo '</a>';
				                            }
				                        ?>

				                    </div>
				                </div>
				    <?php } ?> //end of foreach loop
				    <?php get_template_part('includes/index-loadmore'); ?>

				    </div><!--END #masonry -->

				    <div id="masonry-new"></div>

				    <div class="post-navigation clearfix"><!--BEGIN .post-navigation -->
				    <?php dt_pagination(); ?>
				    </div><!--END .post-navigation -->
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
