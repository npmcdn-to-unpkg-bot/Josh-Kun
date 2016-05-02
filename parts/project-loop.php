<div class="project__item-wrapper" data-title="<?php the_title(); ?>">
  <a href="<?php the_permalink(); ?>" class="project-title title ajax-link fs-row">
    <span class="fs-cell fs-lg-6 fs-md-3 fs-sm-3"><?php #echo $i; ?><?php the_title(); ?></span>
    <span class="fs-cell fs-lg-1 fs-md-1 fs-sm-hide"><?php the_field('year'); ?></span>
    <span class="fs-cell fs-lg-5 fs-md-2 fs-sm-3">
      <?php
        foreach((get_the_category()) as $category) {
          echo $category->cat_name . ' ';
        }
      ?>
    </span>
    <span class="fs-cell fs-lg-hide fs-md-hide fs-sm-3"><?php the_field('year'); ?></span>
    <hr class="fs-cell fs-lg-hide fs-md-hide fs-sm-3 divider compact">
  </a>
</div>