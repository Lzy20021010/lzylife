<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
?>
<div class="am-container">
	<div class="am-g">
		<div class="am-u-sm-8 blog-border blog-background">
        	<h2 class="am-margin-top-lg"><?php $this->archiveTitle(array(
                'category'  =>  _t('分类 %s 下的文章'),
                'search'    =>  _t('包含关键字 %s 的文章'),
                'tag'       =>  _t('标签 %s 下的文章'),
                'author'    =>  _t('%s 发布的文章')
            ), '', ''); ?></h2>
            <hr class="am-article-divider blog-hr">			
			<?php if ($this->have()): ?>
			<?php while($this->next()): ?>
			<article class="blog-main">
			      <h3 class="am-article-title blog-title">
			        <a href="<?php $this->permalink() ?> "><?php $this->title() ?> </a>
			      </h3>
			      <h4 class="am-article-meta blog-meta">
			      	<span class="am-icon-user"><a href="<?php $this->author->permalink(); ?> "> <?php $this->author(); ?></a></span>
			      	<span class="am-icon-calendar-times-o"> <?php $this->date('Y-m-d H:i:s'); ?> </span>
			      	<span class="am-icon-archive"> <?php $this->category(','); ?> </span>
			      	<span class="am-icon-comments"> <?php $this->commentsNum('%d 条评论'); ?> </span>
			      </h4>
			      <div class="am-g blog-content">
			        <div class="am-u-lg-12">
						<p><?php $this->excerpt(120);?></p>
                		<p><a href="<?php $this->permalink() ?>" class="am-btn am-btn-primary am-btn-xs">继续阅读 »</a></p>
			        </div>
			      </div>
			</article>
			<hr class="am-article-divider blog-hr">
			<?php endwhile; ?>
			<?php else: ?>
            <article class="am-g blog-entry-article am-text-center">
                <?php _e('没有找到内容'); ?>
            </article>
       		<?php endif; ?>
	        <ul class="am-pagination">
	            <?php $this->pageLink('&laquo; 上一页','prev');?>
	            <?php $this->pageLink('下一页 &raquo;','next');?>
	        </ul>			
		</div>
		<div class="am-u-sm-4"><?php $this->need('sidebar.php'); ?></div>
	</div>
</div>
<?php $this->need('footer.php'); ?>