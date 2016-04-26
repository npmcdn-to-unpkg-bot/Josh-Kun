<?php 

Themewrangler::setup_page();get_header(); 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
$thumb_url = $thumb_url_array[0];

?>

<?php the_post(); ?>
<article <?php post_class(); ?>>
	<div class="hero hero relative bg--black wallpaper" data-background-options='{"source":"<?php echo $thumb_url; ?>"}'></div>
	<hr class="invisible">
	<header class="hentry__header">
		<div class="fs-row">
			<div class="fs-cell fs-lg-8 fs-md-5 fs-sm-3 fs-centered">
				<div class="accent accent--sm"><?php the_breadcrumb(); ?></div>
				<h1 class="hentry__title title--lg"><?php the_title(); ?></h1>
				<div class="accent accent--sm">Words by <?php the_author(); ?>, posted on <?php the_date(); ?></div>
			</div>
		</div>
	</header>
	<hr class="invisible">
	<div class="hentry__content">
		<div class="fs-row">
			<div class="fs-cell fs-lg-8 fs-md-5 fs-sm-3 fs-centered">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</article>

<?php get_footer(); ?>