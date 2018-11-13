<?php get_header(); ?>
<script type="text/javascript">

		jQuery(window).load(function() {
	var container = document.querySelector('#ms-container');
	var msnry = new Masonry( container, {
		itemSelector: '.ms-item',
		columnWidth: '.ms-item',
	});

		});


</script>
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
    <?php endif; ?>

                </div>
<div class="clearfix"></div>


<?php get_footer(); ?>
