<?php 

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
