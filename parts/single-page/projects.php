<?php 

if ( get_query_var('paged') ) {
  $paged = get_query_var('paged');
} elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
  $paged = get_query_var('page');
} else {
  $paged = 1;
}

$date = isset($_GET['date']);
$cat = isset($_GET['category']);
$views = $_GET['viewing'];
#$date = isset($_GET['date']);

if ($cat) {
  $cat = $_GET['category'];
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

  <?php include locate_template('parts/header-info.php' ); ?>

  <div id="page-content--tools" class="header project-list__item">
    <div class="fs-row">
      <div class="fs-cell fs-all-full fs-sm-hide">
        <?php include locate_template('parts/single-page/project-form.php' ); ?>
      </div>
    </div>
  </div>

  <hr class="divider nomargin">

  <div id='page-content' class="project-wrapper header--lg">
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