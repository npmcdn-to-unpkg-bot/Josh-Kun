<?php 

Themewrangler::setup_page();get_header(); 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
$thumb_url = $thumb_url_array[0];

?>
      <article <?php post_class('bg--black color--white'); ?> id="page">
        <div id="page-content">
          <div class="fs-row">
            <div class="fs-cell fs-lg-half fs-md-half fs-sm-3">
              <header class="hentry__header">
                <h1 class="hentry__title title--lg color--white"><?php the_title(); ?></h1>
              </header>
              <div class="hentry__content color--white">
                <?php the_post(); the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </article>
<?php get_footer(); ?>