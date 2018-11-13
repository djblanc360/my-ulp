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

				<div class="row" id="ms-container">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				    <div class="ms-item col-lg-6 col-md-6 col-sm-6 col-xs-12">

				        <?php if (has_post_thumbnail()) : ?>

				            <figure class="article-preview-image">

				                <?php the_post_thumbnail('large'); ?>

				            </figure>

				        <?php else : ?>

				        <?php endif; ?>

				            <h2 class="post-title"><a href="<?php the_permalink(); ?>" class="post-title-link"><?php the_title(); ?></a></h2>

				        <?php the_excerpt(); ?>

				    <div class="clearfix"></div>

				<a href="<?php the_permalink(); ?>" class="btn btn-green btn-block">Read More</a>

				    <div class="clearfix"></div>

				    </div>

				    <?php endwhile;

				    else : ?>

				        <article class="no-posts">

				            <h1><?php _e('No posts were found.'); ?></h1>

				        </article>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

	<script type="text/javascript">

			jQuery(window).load(function() {
		var container = document.querySelector('#ms-container');
		var msnry = new Masonry( container, {
			itemSelector: '.ms-item',
			columnWidth: '.ms-item',
		});

			});
	</script>
<?php
get_footer();
