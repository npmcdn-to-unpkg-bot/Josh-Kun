<form method="get" class="fs-row"> 
  <div class="fs-cell fs-lg-7 fs-md-3 fs-sm-1">
    <select name="title">
      <option selected disabled>Title &or;</option>
      <option <?php if( $sort == 'title'): echo 'selected'; endif; ?> value="title-down">Title &darr;</option>
      <option <?php if( $sort == 'title'): echo 'selected'; endif; ?> value="title-up">Title &uarr;</option>
    </select>
  </div>
  <div class="fs-cell fs-lg-1 fs-md-1 fs-sm-1">
    <select name="time">
      <option selected disabled>Year &or;</option>
      <option <?php if( $sort == 'title'): echo 'selected'; endif; ?> value="title-down">Year &darr;</option>
      <option <?php if( $sort == 'title'): echo 'selected'; endif; ?> value="title-up">Year &uarr;</option>
    </select>
  </div>
  <div class="fs-cell fs-lg-4 fs-md-2 fs-sm-1">
    <select name="category">
      <option selected disabled>Category &or;</option>
      <option <?php if( $sort == 'cat'): echo 'selected'; endif; ?> value="">All</option>
<?php foreach ( $categories as $category ): ?>
      <option value="<?php echo $category->slug; ?>"><?php echo $category->name; ?></option>
<?php endforeach; ?>
    </select>
  </div>
  <input type="submit" value="Submit" style="display:none;">
</form>