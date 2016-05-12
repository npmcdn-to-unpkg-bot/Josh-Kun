
<div class="project-list__item">
	<div class="fs-row">
    <hr class="divider fs-cell fs-lg-hide fs-md-hide fs-sm-3">
		<a href="<?php the_permalink(); ?>" class="project-title title ajax-link accent">
  		<span class="fs-cell fs-lg-7 fs-md-3 fs-sm-3"><?php #echo $i; ?><?php the_title(); ?></span>
      <span class="fs-cell fs-lg-1 fs-md-1 fs-sm-3"><?php the_field('year'); ?>&nbsp;</span>
  		<span class="fs-cell fs-lg-4 fs-md-2 fs-sm-3">
  			<?php $categories = get_the_category(); ?>
				<?php $i = 0; foreach((get_the_category()) as $category): ?>
				<?php echo $category->cat_name; if ($category !== end($categories)): echo ','; endif; ?>
				<?php $i++; endforeach; ?>
  		</span>
  	</a>
	</div>
</div>
