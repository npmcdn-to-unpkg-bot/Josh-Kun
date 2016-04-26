<?php 

Themewrangler::setup_page();get_header(); 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
$thumb_url = $thumb_url_array[0];

?>

<article <?php post_class(); ?>>
	<header class="hentry__header text-center">
		<div class="hero hero relative bg--black wallpaper" data-background-options='{"source":"<?php echo $thumb_url; ?>"}'>
			<div class="centered">
				<h1 class="hentry__title title--xl color--white"><?php the_title(); ?></h1>
			</div>
		</div>
	</header>
	<hr class="invisible">
	<div class="hentry__content">
		<div class="fs-row">
			<div class="fs-cell fs-lg-8 fs-md-5 fs-sm-3 fs-centered">
				<?php the_post(); the_content(); ?>
			</div>
		</div>
	</div>
</article>

<?php get_footer(); ?>