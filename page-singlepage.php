<?php 

	#Themewrangler::setup_page(true,'smartjax');get_header(/***Template Name: Single Page */); 
	Themewrangler::setup_page(true,'smartajax|plugins|scripts');get_header(/***Template Name: Single Page */); 
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
	$thumb_url = $thumb_url_array[0];

?>

<div id="single-page" class="covered bg--black">
	<div id="single-page__one" class="slide covered bg--black"><?php include locate_template('parts/single-page/home.php' ); ?></div>
	<div id="single-page__two" class="slide covered bg--bgGray"><?php include locate_template('parts/single-page/projects.php' ); ?></div>
	<div id="single-page__three" class="slide covered" style="position:fixed; z-index: 10;"><?php include locate_template('parts/single-page/project-list-images.php'); ?></div>
</div>

<?php get_footer(); ?>