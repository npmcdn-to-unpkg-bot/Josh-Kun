
<div class="project-list__item">
	<div class="fs-row">
    <hr class="divider compact fs-cell fs-lg-hide fs-md-6 fs-sm-3">
		<a href="<?php the_permalink(); ?>" class="project-title title ajax-link accent">
  		<div class="fs-cell fs-lg-7 fs-md-3 fs-sm-3"><?php #echo $i; ?><?php the_title(); ?></div>
      <div class="fs-cell fs-lg-1 fs-md-1 fs-sm-3"><span class="fs-lg-hide fs-md-hide">Date: </span><?php the_field('year'); ?>&nbsp;</div>
  		<div class="fs-cell fs-lg-4 fs-md-2 fs-sm-3">
  			<?php $categories = get_the_category(); ?>
				<?php $i = 0; foreach((get_the_category()) as $category): ?>
				<?php echo $category->cat_name; if ($category !== end($categories)): echo ','; endif; ?>
				<?php $i++; endforeach; ?>
  		</div>
  	</a>
	</div>
</div>
