<div class="project-images covered">
<?php $i = 1; foreach($posts as $post): setup_postdata( $post ); ?>
<?php 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
$thumb_url = $thumb_url_array[0];
?>
<div class="project-images__project covered" data-title="<?php the_title(); ?>" style="z-index: <?php echo $i; ?>">
<div class="centered text-center">
<img src="<?php echo $thumb_url; ?>" class="img-responsive" />
</div>
</div>
<?php $i++; endforeach; wp_reset_postdata(); ?>
</div>