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

<div class="project-wrapper">
	<div class="fs-row">
		<div class="project-dropdown fs-cell fs-lg-6 fs-md-3 fs-sm-3"><span class="ss-gizmo ss-navigatedown right">Title</span></div>
		<div class="project-dropdown fs-cell fs-lg-1 fs-md-1 fs-sm-3"><span class="ss-gizmo ss-navigatedown right">Year</span></div>
		<div class="project-dropdown fs-cell fs-lg-5 fs-md-2 fs-sm-3"><span class="ss-gizmo ss-navigatedown right">Category</span></div>
	</div>
	<hr class="divider compact">
<div class="fs-row">
<div class="fs-cell fs-all-full">
<div class="carousel--custom">

<?php $i = 1; foreach($posts as $post): setup_postdata( $post ); ?>

	<div class="project__item-wrapper" data-title="<?php the_title(); ?>">
  	<div class="fs-row">
  		<a href="<?php the_permalink(); ?>" class="project-title title ajax-link">
    		<div class="fs-cell fs-lg-6 fs-md-3 fs-sm-3"><?php #echo $i; ?><?php the_title(); ?></div>
    		<div class="fs-cell fs-lg-1 fs-md-1 fs-sm-3"><?php the_field('year'); ?></div>
    		<div class="fs-cell fs-lg-5 fs-md-2 fs-sm-3">
					<?php
						foreach((get_the_category()) as $category) {
							echo $category->cat_name . ' ';
						}
					?>
    		</div>
    	</a>
  	</div>
  </div>

<?php $i++; endforeach; wp_reset_postdata(); ?>

</div><!-- Carousel-->
</div>
</div>
</div><!-- Project Wrapper -->

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

<?php get_footer(); ?>
