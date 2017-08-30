<?php get_header(); ?>
<div class="am-container">
	<div class="am-g">
		<div class="am-u-sm-12 blog-border blog-background">
			<article class="blog-main">
			      <h3 class="am-article-title blog-title blog-center">
			        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			      </h3>
			      <h4 class="am-article-meta blog-meta">
			      	<?php while (have_posts()) : the_post(); ?><span class="am-icon-user"> <?php the_author_posts_link(); ?></span><?php endwhile; ?>
			      	<span class="am-icon-calendar-times-o"> <?php the_time('Y-m-d H:i:s') ?> </span>
			      	<span class="am-icon-archive"> <?php the_category(', ') ?></span>
			      	<span class="am-icon-comments"> <?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?> </span>
			      </h4>
			      <div class="am-g blog-content">
			        <?php if (have_posts()) : the_post(); update_post_caches($posts); ?>			      
			        <div class="am-u-lg-12">
			        	<p><?php the_content(); ?></p>
			        </div>
					<?php else : ?>
						<div>没有文章！</div>
					<?php endif; ?>			        
			      </div>
			</article>
			<div>	
				<div class="am-u-sm-6">
					<div data-am-widget="titlebar" class="am-titlebar am-titlebar-default">
						<h2 class="am-titlebar-title ">标签</h2>
						<nav class="am-titlebar-nav"></nav>
					</div>
					<div class="blog-center">
						<?php the_tags('标签：', ', ', ''); ?>
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
			<div class="am-u-sm-12">
				<div data-am-widget="titlebar" class="am-titlebar am-titlebar-default" >
				    <h2 class="am-titlebar-title ">评论</h2>
				    <nav class="am-titlebar-nav"></nav>
				</div>
				<?php comments_template(); ?>
			</div>				
		</div>
	</div>
</div>
<?php get_footer(); ?>