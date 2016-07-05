<?php 

<<<<<<< HEAD
	Themewrangler::setup_page();get_header(/***Template Name: Projects */); 

  $posts = get_posts(array(
    'posts_per_page'  => -1,
    'post_parent'     => 6,
    'post_type'       => 'page',
    'orderby' 				=> 'meta_value_num',
		'meta_key' 				=> 'year',
  ));

?>

<?php include locate_template('parts/home-intro.php' ); ?>
<div id="home--projects">
<?php include locate_template('parts/home-header.php' ); ?>
<?php include locate_template('parts/home-projects.php' ); ?>
</div>
<div id="home--images">
<?php include locate_template('parts/home-images.php' ); ?>
</div>

<?php get_footer(); ?>
=======
Themewrangler::setup_page();get_header(/***Template Name: Projects */); 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
$thumb_url = $thumb_url_array[0];

?>

<?php include locate_template('parts/single-page/projects.php' ); ?>
<?php include locate_template('parts/single-page/project-list-images-all.php'); ?>
      
<?php get_footer(); ?>
>>>>>>> develop
