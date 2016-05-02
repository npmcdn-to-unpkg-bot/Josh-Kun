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
    <div class="project-dropdown title fs-cell fs-lg-6 fs-md-3 fs-sm-third">
      <a href="#" class="right swap-item" data-swap-target=".project-dropdown__name" data-swap-linked="title">Title</a>
    </div>
    <div class="project-dropdown year fs-cell fs-lg-1 fs-md-1 fs-sm-third"><a class="ss-gizmo ss-navigatedown right">Year</a></div>
    <div class="project-dropdown category fs-cell fs-lg-1 fs-md-1 fs-sm-third">
      <a href="#" class="right swap-item" data-swap-target=".project-dropdown__category" data-swap-linked="category">Category</a>
    </div>
  </div>

<hr class="divider compact">

<div class="project-dropdown__name project-dropdown__content">
  <div class="fs-row">
    <form class="fs-cell fs-all-full">
      <a class="btn btn--small btn--first">A <span class="ss-gizmo ss-right"></span> Z,</a> 
      <a class="btn btn--small">Z <span class="ss-gizmo ss-right"></span> A</a>
      <a class="btn btn--last swap-item fl--right" style="margin:0" data-swap-target=".project-dropdown__name" data-swap-linked="title"><span class="ss-gizmo ss-delete"></span></a>
    </form>
  </div>
  <hr class="divider compact">
</div>

<div class="project-dropdown__category project-dropdown__content">
  <div class="fs-row">
    <form class="fs-cell fs-all-full">
      <a class="btn btn--small btn--first">Writing,</a>
      <a class="btn btn--small">Public Project,</a>
      <a class="btn btn--small">Concert,</a>
      <a class="btn btn--small">Exhibit,</a>
      <a class="btn btn--small">Recording,</a>
      <a class="btn btn--last swap-item fl--right" style="margin:0" data-swap-target=".project-dropdown__category" data-swap-linked="category"><span class="ss-gizmo ss-delete"></span></a>
    </form>
  </div>
  <hr class="divider compact">
</div>

<div class="fs-row">
<div class="fs-cell fs-all-full">
<div class="carousel--custom">

<?php $i = 1; foreach($posts as $post): setup_postdata( $post ); ?>

<?php include locate_template('parts/project-loop.php' ); ?>

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
