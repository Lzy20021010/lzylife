  <?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
  <!--[if (gte IE 9)|!(IE)]><!-->
  <script src="<?php $this->options->themeUrl('public/js/jquery.min.js');?>"></script>
  <!--<![endif]-->
  <!--[if lte IE 8 ]>
  <script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
  <script src="<?php $this->options->themeUrl('public/js/amazeui.ie8polyfill.min.js');?>"></script>
  <![endif]-->
  <script src="<?php $this->options->themeUrl('public/js/amazeui.min.js');?>"></script>
<footer class="blog-footer blog-center footer-background">
    <small>
    	&copy; <?php echo date('Y'); ?><a href="<?php $this->options->siteUrl(); ?>"> <?php $this->options->title(); ?></a>.
    	<?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>.<p>Theme By<a href="https://www.lzy20021010.xyz"> Lzy20021010</a></p>
    	<?php if ($this->options->socialICP): ?>
    		<img src="<?php $this->options->themeUrl('/images/icp.ico');?>" alt="工信部ICP备案号"><a href="http://www.miibeian.gov.cn/publish/query/indexFirst.action" target="_blank"> <?php $this->options->socialICP(); ?></a>
    	<?php endif; ?>
    	<?php if ($this->options->socialGA): ?>
			<img src="<?php $this->options->themeUrl('/images/ga.png');?>" alt="公安机关备案号"><a href="<?php $this->options->socialGAURL(); ?>" target="_blank"> <?php $this->options->socialGA(); ?></a>
		<?php endif; ?>
    </small>
</footer>
