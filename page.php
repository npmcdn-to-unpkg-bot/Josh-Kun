<?php 

Themewrangler::setup_page();get_header(); 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
$thumb_url = $thumb_url_array[0];

?>

<article <?php post_class('bg--black color--white'); ?> id="page">
	<div class="fs-row">
		<div class="fs-cell fs-all-full">
			<a href="#" class="ss-gizmo ss-up popup-modal-dismiss"></a>
			<hr class="invisible compact">
		</div>
		<div class="fs-cell fs-lg-half fs-md-half fs-sm-3">
			<header class="hentry__header">
				<h1 class="hentry__title title--lg color--white"><?php the_title(); ?></h1>
				<ul class="hentry__details">
					<li>Year: <?php the_field('year'); ?></li>
					<li>Location: <?php the_field('location'); ?></li>
					<li>Collaborators: <?php the_field('collaborators'); ?></li>
					<li>Link: <?php the_field('url'); ?></li>
				</ul>
			</header>
			<div class="hentry__content">
				<?php the_post(); the_content(); ?>
			</div>
		</div>
	</div>
</article>

<?php get_footer(); ?>