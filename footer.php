  <!--[if (gte IE 9)|!(IE)]><!-->
  <script src="<?php bloginfo('template_url'); ?>/public/js/jquery.min.js"></script>
  <!--<![endif]-->
  <!--[if lte IE 8 ]>
  <script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/public/js/amazeui.ie8polyfill.min.js"></script>
  <![endif]-->
  <script src="<?php bloginfo('template_url'); ?>/public/js/amazeui.min.js"></script>
<footer class="blog-footer blog-center">
    <small>
    	&copy; <?php echo date('Y'); ?><a href="<?php echo get_option('home'); ?>"> <?php bloginfo('name'); ?></a>.
    	<?php _e('由 <a href="https://cn.wordpress.org">WordPress</a> 强力驱动'); ?>.<p>Theme By<a href="https://www.lzy20021010.xyz"> Lzy20021010</a></p>
    	<?php if (get_option('lzy_theme_icp')): ?>
    		<img src="<?php bloginfo('template_url'); ?>/images/icp.ico" alt="工信部ICP备案号"><a href="http://www.miibeian.gov.cn/publish/query/indexFirst.action" target="_blank"> <?php echo get_option('lzy_theme_icp'); ?></a>
    	<?php endif; ?>
    	<?php if (get_option('lzy_theme_ga')): ?>
			<img src="<?php bloginfo('template_url'); ?>/images/ga.png" alt="公安机关备案号"><a href="<?php echo get_option('lzy_theme_gaurl'); ?>" target="_blank"> <?php echo get_option('lzy_theme_ga'); ?></a>
		<?php endif; ?>
    </small>
</footer>
<?php wp_footer(); ?>
</body>
</html>
