<?php 

if ( get_query_var('paged') ) {
  $paged = get_query_var('paged');
} elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
  $paged = get_query_var('page');
} else {
  $paged = 1;
}

if (isset($_GET['category'])) {
  $cat = $_GET['category'];
} else {
  $cat = '';
}

$date = isset($_GET['date']);

if ($date) {
  $cat = $_GET['date'];
} else {
  $cat = '';
}

# meta_value_num

if (isset($_GET['sort'])) {
  $sort = $_GET['sort'];
} else {
  $sort = 'meta_value_num';
}

$categories = get_categories( array(
  'orderby' => 'name',
  'parent'  => 0
));

$query = array(
  'posts_per_page'  => -1,
  'post_parent'     => 6,
  'post_type'       => 'page',
  'paged'						=> $paged,
  'orderby'         => $sort,
  'meta_key'        => 'year',
  'category_name'   => $cat,
);

$temp = $wp_query; 
$wp_query = null; 
$wp_query = new WP_Query(); 
$wp_query->query($query);

?>

<div class="covered relative" data-background-options='{"source":"<?php echo $thumb_url; ?>"}'>
	<div class="">
		<div id="page-content">
      <?php include locate_template('parts/header-info.php' ); ?>
      <div id="page-content--tools" class="header project-list__item">
        <div class="fs-row">
          <div class="fs-cell fs-all-full fs-sm-hide">
            <form method="get" class="fs-row"> 
              <div class="fs-cell fs-lg-7 fs-md-3 fs-sm-1">
                <select name="sort">
                  <option selected disabled>Title &or;</option>
                  <option <?php if( $sort == 'title'): echo 'selected'; endif; ?> value="title-down">Title &darr;</option>
                  <option <?php if( $sort == 'title'): echo 'selected'; endif; ?> value="title-up">Title &uarr;</option>
                </select>
              </div>
              <div class="fs-cell fs-lg-1 fs-md-1 fs-sm-1">
                <select name="category">
                  <option selected disabled>Year &or;</option>
                  <option <?php if( $sort == 'title'): echo 'selected'; endif; ?> value="title-down">Year &darr;</option>
                  <option <?php if( $sort == 'title'): echo 'selected'; endif; ?> value="title-up">Year &uarr;</option>
                </select>
              </div>
              <div class="fs-cell fs-lg-4 fs-md-2 fs-sm-1">
                <select name="sort">
                  <option selected disabled>Category &or;</option>
                  <option <?php if( $sort == 'date'): echo 'selected'; endif; ?> value="category-all">All</option>
<?php foreach ( $categories as $category ): ?>
                  <option value="<?php echo $category->slug; ?>"><?php echo $category->name; ?></option>
<?php endforeach; ?>
                </select>
              </div>
              <input type="submit" value="Submit" style="display: none;">
            </form>
          </div>
        </div>
      </div>
			<div id="page-content__inner">
        <div class="carousel--custom carousel_fade">
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
</div>

<script>
  $(function() {
    $('#page-content--tools select').change(function() {
        $(this).parent('form').submit();
    });
  });
</script>