<?php $images = get_field('gallery'); ?>
<?php if($images): ?>
<div class="gallery">
<?php foreach($images as $image): ?>

  <div class="gallery__item">
    <figure><img src="<?php echo $image['url']; ?>" class="img-responsive"></figure>
    <?php if($image['caption']): ?><figcaption><?php echo $image['caption']; ?></figcaption><?php endif; ?>
    <hr class="invisible compact">
  </div>

<?php endforeach; ?>
</div>
<?php endif; ?>