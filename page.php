<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php include ("header.php");?>
<div class="am-container">
	<div class="am-g">
		<div class="am-u-sm-12 blog-border blog-background">
			<article class="blog-main">
			      <h3 class="am-article-title blog-title blog-center">
			        <p><?php $this->title() ?></p>
			      </h3>
			      <h4 class="am-article-meta blog-meta blog-center">
			      	<span class="am-icon-user"><a href="<?php $this->author->permalink(); ?> "> <?php $this->author(); ?></a></span>
			      	<span class="am-icon-calendar-times-o"> <?php $this->date('Y-m-d H:i:s'); ?> </span>
			      	<span class="am-icon-archive"> <?php $this->category(','); ?> </span>
			      	<span class="am-icon-comments"> <?php $this->commentsNum('%d 条评论'); ?> </span>
			      </h4>			      
			      <div class="am-g blog-content">
			        <div class="am-u-lg-12">
					<?php $this->content(); ?> 
			        </div>
			      </div>
			</article>
			<hr class="am-article-divider blog-hr">
            <ul class="am-pagination blog-article-margin">
                <li class="am-pagination-prev"><span>&laquo;<?php $this->thePrev('%s',''); ?></span></li>
                <li class="am-pagination-next"><span><?php $this->theNext('%s',''); ?>&raquo;</span></li>
            </ul>					
			<div>	
				<div class="am-u-sm-6">
					<div data-am-widget="titlebar" class="am-titlebar am-titlebar-default">
						<h2 class="am-titlebar-title ">标签</h2>
						<nav class="am-titlebar-nav"></nav>
					</div>
					<div class="blog-center">
		    			<p itemprop="keywords" class="tags"><?php $this->tags(', ', true, 'none'); ?></p>
					</div>
				</div>
				<div class="am-u-sm-6">
					<div data-am-widget="titlebar" class="am-titlebar am-titlebar-default">
						<h2 class="am-titlebar-title ">版权说明</h2>
						<nav class="am-titlebar-nav"></nav>
					</div>
					<div class="blog-center">
						<small>本站使用<a href="https://creativecommons.org/licenses/by/4.0/deed.zh">「署名 4.0 国际」创作共享协议</a>，可自由转载、引用。但请署名作者且注明文章出处，谢谢。</small>
					</div>
				</div>	
			</div>
			<?php $this->need('comments.php'); ?>			
		</div>
	</div>
</div>
<?php $this->need('footer.php'); ?>