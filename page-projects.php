<?php 

Themewrangler::setup_page();get_header(/***Template Name: Projects */); 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
$thumb_url = $thumb_url_array[0];

?>

<?php include locate_template('parts/single-page/projects.php' ); ?>
<?php include locate_template('parts/single-page/project-list-images-all.php'); ?>
      
<?php get_footer(); ?>