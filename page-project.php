<?php 

Themewrangler::setup_page();get_header(/***Template Name: Project */); 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
$thumb_url = $thumb_url_array[0];

?>
      <article id="page" <?php post_class(); ?>>
        <div id="page-content" class="hentry__content">
          <div class="fs-row">
            <div class="fs-cell fs-lg-8 fs-md-5 fs-sm-3 color--white">
              <?php the_post(); the_content(); ?>
            </div>
          </div>
        </div>
      </article>
<?php get_footer(); ?>