<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="am-u-sm-12">
    <div data-am-widget="titlebar" class="am-titlebar am-titlebar-default" >
        <h2 class="am-titlebar-title ">评论</h2>
        <nav class="am-titlebar-nav"></nav>
    </div>
    <h3 class="blog-center"><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
    <ul id="comment_list">
        <?php $this->comments()->to($comments); ?>
            <?php while($comments->next()): ?>
        <li class="blog-border" id="<?php $comments->theId(); ?>" style="list-style:none;">
            <div class="comment_data">
                    <?php echo $comments->sequence(); ?>. 
                    <strong><?php $comments->author(); ?></strong>
                    发表于 <?php $comments->date('Y-m-d'); ?> <?php $comments->date('H:i:s'); ?> <?php $comments->sequence(); ?>#
                    <a type="button" class="am-btn am-btn-primary am-btn-xs" href=" <?php $comments->responseUrl(); ?> ">回复楼主</a>
                </div>
            <div class="comment_body"><?php $comments->content(); ?></div>
        </li>
        <?php endwhile; ?>
        <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    </ul>     
    <form class="am-form am-g" method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
        <h3 class="blog-comment blog-center">评论</h3>
        <?php if($this->user->hasLogin()): ?>
            <p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
        <?php else: ?>        
        <fieldset>
            <div class="am-form-group am-u-sm-4 blog-clear-left">
                <input type="text" class="" name="author" id="author" placeholder="名字" value="<?php $this->remember('author'); ?>" required>
            </div>
            <div class="am-form-group am-u-sm-4">
                <input type="email" class="" name="mail" id="mail" laceholder="邮箱" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> >
            </div>
            <div class="am-form-group am-u-sm-4 blog-clear-right">
                <input type="password" class="" name="url" id="url" placeholder="网站" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> >
            </div>
            <div class="am-form-group">
                <textarea class="" rows="5" name="text" id="textarea" placeholder="一字千金，回复请@用户名。" required><?php $this->remember('text'); ?></textarea>
            </div>
            <p><button type="submit" class="am-btn am-btn-default">发表评论</button></p>
        </fieldset>
    </form>
    <?php endif; ?>
</div>