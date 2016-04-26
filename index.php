<?php Themewrangler::setup_page();get_header(); ?>

<div class="home-wrapper hero--wh">

<div class="hero--wh bg--black home-top relative">
  <div class="centered centered--full">
    <div class="fs-row">
      <div class='fs-cell fs-all-full text-center'>
        <h1 class="color--white title title--xl">Josh Kun</h1>
      </div>
    </div>
  </div>
</div>

<?php 
  $posts = get_posts(array(
    'posts_per_page'  => -1,
    'post_parent'     => 6,
    'post_type'       => 'page'
  ));
?>

<div class="hero--wh bg--white home-bottom relative">

  <hr class="invisible">
  <hr class="invisible">
  <hr class="invisible">

<?php foreach($posts as $post): setup_postdata( $post ); ?>

  <div class="fs-row">
    <div class="fs-cell fs-lg-6"><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></div>
    <div class="fs-cell fs-lg-1">2012</div>
  </div>

  <hr class="compact divider">

<?php endforeach; wp_reset_postdata(); ?>

</div>

</div>

<?php get_footer(); ?>