
    <footer id="footer">
      <div class="fs-row">
        <div class='fs-cell fs-lg-11 fs-md-6 fs-sm-3'>
          <span class="btn btn--nav btn__first">Copyright <?php bloginfo('name' );?> <?php echo date('Y'); ?></span>
          <a href="#mailchimp-modal" class="open--modal btn btn--nav">Join the Newsletter</a>
          <a href="#search-modal" class="open--modal btn btn--nav">Search</a>
        </div>
      </div>
    </footer>

<?php include locate_template('parts/footer-mailchimp.php' ); ?>
<?php include locate_template('parts/footer-search.php' ); ?>
<?php include locate_template('parts/mobile-menu.php' ); ?>

  </div><!--Wrapper-->

<?php wp_footer(); ?>

</body>
</html>
