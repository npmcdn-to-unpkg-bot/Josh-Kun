<?php 

if ( $post->post_parent == '6' ) {
  include_once locate_template('page-project.php');  
} else {
  include_once locate_template('page-default.php');  
}

<<<<<<< HEAD
?>
<<<<<<< HEAD

<article <?php post_class('bg--black color--white'); ?> id="page">
	<header id="page-header" class="header header--lg">
		<div class="fs-row">
			<div class="fs-cell fs-all-full">
				<a href="#" class="btn btn--nav ss-gizmo ss-up popup-modal-dismiss fs-sm-hide"></a>
				<a href="#" class="btn btn--nav ss-gizmo ss-delete popup-modal-dismiss fs-lg-hide fs-md-hide"></a>
			</div>
		</div>
	</header>
	<div class="fs-row">
		<div class="fs-cell fs-lg-half fs-md-full fs-sm-3">
			<header class="hentry__header">
				<h1 class="hentry__title title--lg color--white"><?php the_title(); ?></h1>
				<?php if ( $post->post_parent == '6' ) : ?>
				<ul class="hentry__details">
					<li>Year: <?php the_field('year'); ?></li>
					<li>Location: <?php the_field('location'); ?></li>
					<li>Collaborators: <?php the_field('collaborators'); ?></li>
					<li>Link: <?php the_field('url'); ?></li>
				</ul>
				<?php endif; ?>
			</header>
			<div class="hentry__content">
				<?php the_post(); the_content(); ?>
			</div>
		</div>
		<div class="fs-cell fs-lg-half fs-md-full fs-sm-3">
			<?php include locate_template('parts/project-gallery.php' ); ?>
		</div>
	</div>
</article>

=======
      <article <?php post_class('bg--black color--white'); ?> id="page">
        <div id="page-content">
          <div class="fs-row">
            <!--
            <div class="fs-cell fs-all-full">
              <a href="#" class="ss-gizmo ss-up popup-modal-dismiss"></a>
              <hr class="invisible compact">
            </div>
            -->
            <div class="fs-cell fs-lg-half fs-md-half fs-sm-3">
              <header class="hentry__header">
                <h1 class="hentry__title title--lg color--white"><?php the_title(); ?></h1>
                <ul class="hentry__details color--white">
                  <li>Year: <?php the_field('year'); ?></li>
                  <li>Location: <?php the_field('location'); ?></li>
                  <li>Collaborators: <?php the_field('collaborators'); ?></li>
                  <li>Link: <?php the_field('url'); ?></li>
                </ul>
              </header>
              <div class="hentry__content color--white">
                <?php the_post(); the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </article>
>>>>>>> 519a25bec259c60576e83acf16c3e894e502457a
<?php get_footer(); ?>
=======
?>
>>>>>>> develop
