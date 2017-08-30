<?php get_header(); ?>
<div class="am-container">
	<div class="am-g">
		<div class="am-u-sm-8 blog-border blog-background">
			<h2>分类:<?php the_category(', ') ?></h2>
			<hr class="am-article-divider blog-hr">	
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="blog-main">
			      <h3 class="am-article-title blog-title">
			        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			      </h3>
			      <h4 class="am-article-meta blog-meta">
			      	<span class="am-icon-user"> <?php the_author_posts_link(); ?></span>
			      	<span class="am-icon-calendar-times-o"> <?php the_time('Y-m-d H:i:s') ?> </span>
			      	<span class="am-icon-archive"> <?php the_category(', ') ?></span>
			      	<span class="am-icon-comments"> <?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?> </span>
			      </h4>
			      <div class="am-g blog-content">
			        <div class="am-u-lg-12">
						<p><?php the_excerpt(); ?></p>
						<p><a href="<?php the_permalink(); ?>" class="am-btn am-btn-primary am-btn-xs">继续阅读 »</a></p>
			        </div>
			      </div>
			</article>
			<hr class="am-article-divider blog-hr">
			<?php endwhile; ?>
			<?php else : ?>
				<h3 class="title"><a href="#" rel="bookmark">未找到</a></h3>
				<p>没有找到任何文章！</p>
			<?php endif; ?>
	        <ul class="am-pagination">
	            <?php previous_posts_link('&laquo; 上一页', 0); ?>
	            <?php next_posts_link('下一页 &raquo;', 0); ?>
	        </ul>	
		</div>
		<div class="am-u-sm-4"><?php get_sidebar(); ?></div>
	</div>
</div>
<?php get_footer(); ?>