<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!doctype html>
<html class="no-js">
<head>
  <meta charset="<?php $this->options->charset(); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="<?php $this->options->description() ?> ">
  <meta name="keywords" content="<?php $this->options->socialKeywords(); ?>">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
  <!-- Set render engine for 360 browser -->
  <meta name="renderer" content="webkit">
  <!-- No Baidu Siteapp-->
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="icon" type="image/png" href="<?php $this->options->themeUrl('public/i/favicon.png');?>">
  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="<?php $this->options->themeUrl('public/i/app-icon72x72@2x.png');?>">
  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="<?php $this->options->title(); ?>"/>
  <link rel="apple-touch-icon-precomposed" href="<?php $this->options->themeUrl('public/i/app-icon72x72@2x.png');?>">
  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="<?php $this->options->themeUrl('public/i/app-icon72x72@2x.png');?>">
  <meta name="msapplication-TileColor" content="#0e90d2">

  <link rel="stylesheet" href="<?php $this->options->themeUrl('public/css/amazeui.min.css');?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('public/css/app.css');?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('public/css/base.css');?>">
  <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->

  <header class="am-topbar am-topbar-inverse">
    <div class="am-container">
      <h1 class="am-topbar-brand">
        <a href=" <?php $this->options->siteUrl(); ?> " class="am-text-ir"> <?php $this->options->title() ?> </a>
      </h1>

      <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

      <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
        <ul class="am-nav am-nav-pills am-topbar-nav">
          <li <?php if($this->is('index')): ?>class="am-active"<?php endif; ?>><a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
          <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
          <?php while($pages->next()): ?>
              <li <?php if($this->is('page', $pages->slug)): ?>class="am-active"<?php endif; ?>><a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></li>
          <?php endwhile; ?>
          <li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('RSS'); ?></a></li>
        </ul>

        <form class="am-topbar-right am-topbar-form am-topbar-left am-form-inline" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
          <div class="am-form-group">
            <label for="s" class="sr-only am-icon-search"></label>
            <input type="text" name="s" class="text am-form-field am-input-sm" placeholder="<?php _e('输入关键字搜索'); ?>" />
          </div>
        </form>
      </div>
    </div>
  </header>
