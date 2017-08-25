<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="am-panel am-panel-default">
  <div class="am-panel-hd blog-center">关于我</div>
  <div class="am-panel-bd">
    <img src="<?php $this->options->themeUrl('images/avatar.jpg');?>" alt="avatar" class="am-img-thumbnail am-img-responsive blog-center" />
    <h6 class="blog-center" style="margin-top:5px;"><?php $this->options->authorName(); ?></h6>
    <p class="blog-center"><?php $this->options->authorInfo(); ?></p>
  </div>
</div>
<div class="am-panel am-panel-default blog-center">
	<div class="am-panel-bd">
    <?php if ($this->options->socialQQ): ?>
      <a type="button" class="am-btn am-btn-secondary am-round" href="tencent://message/?uin=<?php $this->options->socialQQ(); ?>&Site=junichi&Menu=yes""><span class="am-icon-qq"></span></a>
    <?php endif; ?>
    <?php if ($this->options->socialWeixin): ?>
		  <a type="button" class="am-btn am-btn-success am-round" href="<?php $this->options->socialWeixin(); ?>"><span class="am-icon-weixin"></span></a>
    <?php endif; ?>
    <?php if ($this->options->socialWeibo): ?>
		  <a type="button" class="am-btn am-btn-warning am-round" href="<?php $this->options->socialWeibo(); ?>"><span class="am-icon-weibo"></span></a>
    <?php endif; ?>
    <?php if ($this->options->socialGithub): ?>
		  <a type="button" class="am-btn am-btn-default am-round" href="<?php $this->options->socialGithub(); ?>"><span class="am-icon-github"></span></a>
    <?php endif; ?>
		<a type="button" class="am-btn am-btn-primary am-round" href="<?php $this->options->feedUrl(); ?>"><span class="am-icon-rss"></span></a>
	</div>
</div>
<div class="am-panel am-panel-default">
  <div class="am-panel-hd blog-center">标签</div>
  <div class="am-panel-bd">
    <?php $this->widget('Widget_Metas_Tag_Cloud')->to($taglist); ?><?php while($taglist->next()): ?>
    <a class="am-btn am-btn-default am-btn-xs" href="<?php $taglist->permalink(); ?>" title="<?php $taglist->name(); ?>"><?php $taglist->name(); ?></a>
    <?php endwhile; ?>
  </div>
</div>
<div class="am-panel am-panel-default">
  <div class="am-panel-hd blog-center">近期文章</div>
  <div class="am-panel-bd">
    <ul class="am-list blog-list">
      <?php $this->widget('Widget_Contents_Post_Recent')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
    </ul>
  </div>
</div>