<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php bloginfo( 'sitename' ) ?></title>
<link rel="shortcut icon" href="/assets/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<?php wp_head(); ?>

<!--[if lt IE 9]>
<script src="/assets/js/app.ie.min.js"></script>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php include_once locate_template('lib/config.fonts.php' ); ?>
<?php include_once locate_template('lib/config.menus.php' ); ?>

</head>

<<<<<<< HEAD
<body <?php body_class('fs-grid fs-grid-fluid animate'); ?>>
<div id="wrapper">

<div id="content-wrapper" class='fs-grid'>
=======
<body class="fs-grid fs-grid-fluid">
  <div id="wrapper">
    <?php if(is_page(9999)): ?>
    <header id="header" class="header header--lg pinned pinned--top" <?php if(is_front_page()):?>style="display:none"<?php endif; ?>>
      <div class="fs-row">
        <menu id="header-main" class="fs-cell fs-lg-4 fs-md-2 fs-sm-2">
          <a href="/" id="header--logo" class="btn btn--logo btn--nav btn_first color--white"><?php bloginfo('name' );?></a>
        </menu>
        <menu id="header-mobile" class="fs-cell fs-lg-1 fs-md-1 fs-sm-1 text-right">
          <a data-swap-target="#mobile-menu" class="mobile-toggle btn btn--hamburg btn--hamburg__white btn--nav btn_first btn_last">&nbsp;</a>
        </menu>
        <menu id="header-navigation" class="fs-cell fs-lg-hide fs-md-hide fs-sm-hide text-right color--white">

<?php echo strip_tags(wp_nav_menu( $mainMenu ), '<a>' ); ?>
<?php // include locate_template('parts/store/shopify--bag.php') ?>

        </menu>
      </div>
    </header>
    <?php endif; ?>

>>>>>>> 519a25bec259c60576e83acf16c3e894e502457a
