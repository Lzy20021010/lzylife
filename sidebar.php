<div class="am-panel am-panel-default">
  <div class="am-panel-hd blog-center">关于我</div>
  <div class="am-panel-bd">
    <img src="<?php bloginfo('template_url'); ?>/images/avatar.jpg" alt="avatar" class="am-img-thumbnail am-img-responsive blog-center" />
    <h6 class="blog-center" style="margin-top:5px;"><?php echo get_option('lzy_theme_author'); ?></h6>
    <p class="blog-center"><?php echo get_option('lzy_theme_authorinfo'); ?></p>
  </div>
</div>
<div class="am-panel am-panel-default blog-center">
	<div class="am-panel-bd">
    <?php if (get_option('lzy_theme_qq')): ?>
		  <a type="button" class="am-btn am-btn-secondary am-round" href="tencent://message/?uin=<?php echo get_option('lzy_theme_qq'); ?>&Site=junichi&Menu=yes">
        <span class="am-icon-qq"></span>
      </a>
    <?php endif;?>
    <?php if (get_option('lzy_theme_weixin')): ?>
		<a type="button" class="am-btn am-btn-success am-round" href="<?php echo get_option('lzy_theme_weixin'); ?>">
      <span class="am-icon-weixin"></span>
    </a>
    <?php endif;?>
    <?php if (get_option('lzy_theme_weibo')): ?>
		<a type="button" class="am-btn am-btn-warning am-round" href="<?php echo get_option('lzy_theme_weibo'); ?>">
      <span class="am-icon-weibo"></span>
    </a>
    <?php endif;?>
    <?php if (get_option('lzy_theme_github')): ?>
		<a type="button" class="am-btn am-btn-default am-round" href="<?php echo get_option('lzy_theme_github'); ?>">
      <span class="am-icon-github"></span>
    </a>
    <?php endif;?>
		<a type="button" class="am-btn am-btn-primary am-round" href="<?php echo get_bloginfo('rss2_url'); ?>"><span class="am-icon-rss"></span></a>
	</div>
</div>
<div class="am-panel am-panel-default">
  <div class="am-panel-hd blog-center">标签</div>
  <div class="am-panel-bd">
<!--     <a class="am-btn am-btn-default am-btn-xs" href="">标签1</a>
    <a class="am-btn am-btn-default am-btn-xs" href="">标签2</a>
    <a class="am-btn am-btn-default am-btn-xs" href="">标签3</a>
    <a class="am-btn am-btn-default am-btn-xs" href="">标签4</a> -->
    <p><?php wp_tag_cloud('smallest=8&largest=22'); ?></p>
  </div>
</div>
<div class="am-panel am-panel-default">
  <div class="am-panel-hd blog-center">近期文章</div>
  <div class="am-panel-bd">
    <ul class="am-list blog-list">
    <?php
     //获取最新文章
     $recent_posts = wp_get_recent_posts();
     //遍历出每一篇文章。
     foreach( $recent_posts as $recent ){
     echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .  $recent["post_title"].'</a> </li> ';
     }
    ?>
    </ul>
  </div>
</div>