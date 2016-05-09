<?php 

if ( get_query_var('paged') ) {
  $paged = get_query_var('paged');
} elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
  $paged = get_query_var('page');
} else {
  $paged = 1;
}

$query = array(
  'posts_per_page'  => 3,
  'post_parent'     => 6,
  'post_type'       => 'page',
  'paged'						=> $paged,
  'orderby'         => 'meta_value_num',
  'meta_key'        => 'year',
);

$temp = $wp_query; 
$wp_query = null; 
$wp_query = new WP_Query(); 
$wp_query->query($query);

?>

<?php while ($wp_query->have_posts()) : $wp_query->the_post();  ?>
<?php if ( has_post_thumbnail() ): ?>
<div data-title="<?php the_title(); ?>" class="covered" style="z-index: 8; display: none;">
	<div class="centered">
		<div class="fs-row">
			<div class="fs-cell fs-lg-half fs-md-4 fs-sm-3 fs-centered">
				<?php the_post_thumbnail('large', array('class' => 'img-centered')); ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php 
	endwhile; 
	$wp_query = null; 
	$wp_query = $temp;
?>