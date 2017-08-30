<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="keywords" content="<?php echo get_option('lzy_theme_keywords'); ?>">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <title><?php if ( is_home() ) {
    bloginfo('name'); echo " - "; bloginfo('description');
  } elseif ( is_category() ) {
    single_cat_title(); echo " - "; bloginfo('name');
  } elseif (is_single() || is_page() ) {
    single_post_title();
  } elseif (is_search() ) {
    echo "搜索结果"; echo " - "; bloginfo('name');
  } elseif (is_404() ) {
    echo '页面未找到!';
  } else {
    wp_title('',true);
  } ?></title>
  <!-- Set render engine for 360 browser -->
  <meta name="renderer" content="webkit">
  <!-- No Baidu Siteapp-->
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/public/i/favicon.png">
  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="<?php bloginfo('template_url'); ?>/public/i/app-icon72x72@2x.png">
  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?>"/>
  <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/public/i/app-icon72x72@2x.png">
  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/public/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileColor" content="#0e90d2">

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/public/css/amazeui.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/public/css/app.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有文章" href="<?php echo get_bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有评论" href="<?php bloginfo('comments_rss2_url'); ?>" />
  <?php wp_head(); ?>
  <?php flush(); ?>
</head>
<body>
  <header class="am-topbar am-topbar-inverse">
    <div class="am-container">
      <h1 class="am-topbar-brand">
        <a href="<?php echo get_option('home'); ?>" class="am-text-ir"><?php bloginfo('name'); ?></a>
      </h1>

      <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

      <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
        <ul class="am-nav am-nav-pills am-topbar-nav">
          <?php $amenu = array('container' => false,'echo'  => true,'items_wrap' => '%3$s','theme_location' => 'header-menu','depth' => 1,'fallback_cb'=>'fanly_nav_fallback');echo strip_tags(wp_nav_menu( $amenu ), '<a>' );?>            
        </ul>

        <form class="am-topbar-right am-topbar-form am-topbar-left am-form-inline" role="search" action="<?php echo home_url( '/' ); ?>" method="get" id="searchform">
          <div class="am-form-group">
            <label for="s" class="am-icon-search"></label>
            <input type="text" class="am-form-field am-input-sm" placeholder="搜索" value="<?php the_search_query(); ?>" name="s" id="s">
          </div>
        </form>
      </div>
    </div>
  </header>
