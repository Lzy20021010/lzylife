<?php
/**
 * Lzy Life主题
 * 
 * @package Lzy Life 
 * @author Lzy20021010
 * @version 1.0.0
 * @link https://www.lzy20021010.xyz
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
?>
<div class="am-container">
	<div class="am-g">
		<div class="am-u-sm-8 blog-border blog-background">
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
	        <ul class="am-pagination">
	            <?php $this->pageLink('&laquo; 上一页','prev');?>
	            <?php $this->pageLink('下一页 &raquo;','next');?>
	        </ul>			
		</div>
		<div class="am-u-sm-4"><?php $this->need('sidebar.php'); ?></div>
	</div>
</div>
<?php $this->need('footer.php'); ?>