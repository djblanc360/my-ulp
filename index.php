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

	<?php
	$postlist = get_posts( 'orderby=menu_order&sort_order=asc' );
	$posts = array();
	foreach ( $postlist as $post ) {
	   $posts[] += $post->ID;
	}

	$current = array_search( get_the_ID(), $posts );
	$prevID = $posts[$current-1];
	$nextID = $posts[$current+1];
	?>

	<div class="navigation">
	<?php if ( !empty( $prevID ) ): ?>
	<div class="alignleft">
	<a href="<?php echo get_permalink( $prevID ); ?>"
	  title="<?php echo get_the_title( $prevID ); ?>">Previous</a>
	</div>
	<?php endif;
	if ( !empty( $nextID ) ): ?>
	<div class="alignright">
	<a href="<?php echo get_permalink( $nextID ); ?>"
	 title="<?php echo get_the_title( $nextID ); ?>">Next</a>
	</div>
	<?php endif; ?>
	</div><!-- .navigation -->

	</div> <!--end row ms-container -->
<div class="clearfix"></div>

</div><!--end container -->
<!--paginationn functions here -->
<div class="news-navigation">
	<span class="pagination-buttons">

			<a href="<?php echo site_url(); ?>/news/"><img src="<?php echo site_url(); ?>/wp-content/themes/ulp/img/home-icon.png" alt="home icon"></a>
	</span>
	<span class="nav-previous pagination-buttons"><?php previous_posts_link( '<' ); ?></span>
	<span class="nav-next pagination-buttons"><?php next_posts_link( '>' ); ?></span>
</div>
<?php get_footer(); ?>
