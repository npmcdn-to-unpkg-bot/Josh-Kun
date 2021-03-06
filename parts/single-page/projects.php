<?php 

if ( get_query_var('paged') ) {
  $paged = get_query_var('paged');
} elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
  $paged = get_query_var('page');
} else {
  $paged = 1;
}

$query = array(
  'posts_per_page'  => 10,
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

<div class="covered relative" data-background-options='{"source":"<?php echo $thumb_url; ?>"}'>
	<div class="">
		<div id="page-content">
			<div id="page-content__inner">
				<?php while ($wp_query->have_posts()) : $wp_query->the_post();  ?>
				<?php include locate_template('parts/single-page/project-list-item.php'); ?>
				<?php 
					endwhile; 
					$wp_query = null; 
					$wp_query = $temp;
				?>
			</div>
		</div>
	</div>
</div>