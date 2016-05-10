<?php 

if ( get_query_var('paged') ) {
  $paged = get_query_var('paged');
} elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
  $paged = get_query_var('page');
} else {
  $paged = 1;
}

if (isset($program)) {
  $tax_query[] =  array(
    'taxonomy' => 'tribe_events_cat',
    'field'    => 'slug',
    'terms'    => $program,
  );
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
      <div id="page-content--tools" class="header header--lg">
        <hr class="divider">
        <div class="fs-row">
          <div class="fs-cell fs-all-full">
            <form method="get">
              <select name="sort">
                <option <?php if( $program == $term->slug): echo 'selected'; endif; ?> value="">Default</option>
                <option <?php if( $program == $term->slug): echo 'selected'; endif; ?> value="alpha">Alpha</option>
                <option <?php if( $program == $term->slug): echo 'selected'; endif; ?> value="date">Date</option>
              </select>
              <input type="submit" value="Submit">
            </form>
          </div>
        </div>
      </div>
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