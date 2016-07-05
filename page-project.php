<?php 

Themewrangler::setup_page();get_header(); 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
$thumb_url = $thumb_url_array[0];

?>
      <article <?php post_class('bg--black color--white'); ?> id="page">
        <div id="page-content" class="bg--black">
          <?php include locate_template('parts/header-info--project.php' ); ?>
          <div class="fs-row header--lg nopad--top">
            <!--
            <div class="fs-cell fs-all-full">
              <a href="#" class="ss-gizmo ss-up popup-modal-dismiss"></a>
              <hr class="invisible compact">
            </div>
            -->
            <div class="fs-cell fs-lg-half fs-md-full fs-sm-3">
              <header class="hentry__header">
                <h1 class="hentry__title title--lg color--white"><?php the_title(); ?></h1>
                <ul class="hentry__details color--white">
                  <li>Year: <?php the_field('year'); ?></li>
                  <li>Location: <?php the_field('location'); ?></li>
                  <li>Collaborators: <?php the_field('collaborators'); ?></li>
                  <li>Link: <a href="<?php the_field('link'); ?>" target="blank"><?php the_field('link'); ?></a></li>
                </ul>
              </header>
              <div class="hentry__content color--white">
                <?php the_post(); the_content(); ?>
              </div>
            </div>

            <div class="fs-cell fs-lg-half fs-md-full fs-sm-3">
              <?php $images = get_field('gallery'); ?>
              <?php if($images): ?>
              <?php foreach ($images as $image): ?>
              <figure>
                <img src="<?php echo $image['sizes']['large']; ?>" class="img-responsive" alt="<?php echo $image['title']; ?>" />
                <?php if($image['caption']): ?><figcaption><?php echo $image['caption']; ?></figcaption><?php endif; ?>
              </figure>
              <?php endforeach; ?>
              <?php endif; ?>
            </div>

          </div>
        </div>
      </article>
<?php get_footer(); ?>