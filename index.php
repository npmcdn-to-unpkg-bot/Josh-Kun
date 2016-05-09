<?php Themewrangler::setup_page();get_header(); ?>

<div class="fs-row">
<div class='fs-cell fs-lg-8 fs-md-6 fs-sm-3'>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'parts/entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
</div>
</div>

<?php get_footer(); ?>