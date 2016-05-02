<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php bloginfo( 'sitename' ) ?></title>
<meta name="description" content="<?php bloginfo( 'description' ) ?>">
<link rel="shortcut icon" href="/assets/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php wp_head(); ?>

<!--[if lt IE 9]>
<script src="/assets/js/app.ie.min.js"></script>
<![endif]-->

<?php include_once locate_template('lib/config.fonts.php' ); ?>
<?php include_once locate_template('lib/config.menus.php' ); ?>

</head>

<body <?php body_class('fs-grid fs-grid-fluid'); ?>>
<div id="wrapper">

<header id="header" class="header header--lg pinned pinned--top">
  <div class="fs-row">
    <menu id="header-main" class="fs-cell fs-lg-6 fs-md-3 fs-sm-1">
      <a href="<?php echo the_permalink(104); ?>" id="header--logo" class="ajax-link btn btn--logo btn--nav btn_first"><?php echo get_the_title(104); ?></a>
    </menu>
    <menu class="fs-cell fs-lg-3 fs-md-fourth fs-sm-1">
      <a href="<?php echo the_permalink(106); ?>" id="header--logo" class="ajax-link btn btn--logo btn--nav btn_first"><?php echo get_the_title(106); ?></a>
    </menu>
    <menu class="fs-cell fs-lg-3 fs-md-fourth fs-sm-1 text-right">
      <a href="<?php echo the_permalink(104); ?>" id="header--logo" class="btn btn--logo btn--nav btn_last ss-gizmo ss-mail"></a>
    </menu>
  </div>
</header>

<div id="content-wrapper" class='fs-grid'>
<div class="header header--lg"><span class="btn btn--nav">&nbsp;</span></div>