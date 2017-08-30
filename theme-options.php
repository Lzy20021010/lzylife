<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
    <h2>Lzy Life主题设置</h2>
    <p>主题作者：Lzy20021010 https://www.lzy20021010.xyz</p>
    <form method="post" name="lzy_theme" id="lzy_theme" action="options.php">    
        <div>
            <label for="lzy_theme_keywords">网站关键词:</label>  
            <input name="lzy_theme_keywords" id="lzy_theme_keywords" size="40" value="<?php echo get_option('lzy_theme_keywords'); ?>"/>   
            <?php wp_nonce_field('update-options'); ?>   
            <input type="hidden" name="action" value="update" />   
            <input type="hidden" name="page_options" value="lzy_theme_keywords" />   
        </div>
        <div>
            <label for="lzy_theme_icp">工业和信息化部ICP备案号:</label>  
            <input name="lzy_theme_icp" id="lzy_theme_icp" size="40" value="<?php echo get_option('lzy_theme_icp'); ?>"/>   
            <?php wp_nonce_field('update-options'); ?>   
            <input type="hidden" name="action" value="update" />   
            <input type="hidden" name="page_options" value="lzy_theme_icp" />   
        </div>
        <div>
            <label for="lzy_theme_ga">公安机关网站备案号:</label>  
            <input name="lzy_theme_ga" id="lzy_theme_ga" size="40" value="<?php echo get_option('lzy_theme_ga'); ?>"/>   
            <?php wp_nonce_field('update-options'); ?>   
            <input type="hidden" name="action" value="update" />   
            <input type="hidden" name="page_options" value="lzy_theme_ga" />   
        </div>
        <div>
            <label for="lzy_theme_gaurl">公安机关网站备案查询链接:</label>  
            <input name="lzy_theme_gaurl" id="lzy_theme_gaurl" size="40" value="<?php echo get_option('lzy_theme_gaurl'); ?>"/>   
            <?php wp_nonce_field('update-options'); ?>   
            <input type="hidden" name="action" value="update" />   
            <input type="hidden" name="page_options" value="lzy_theme_gaurl" />   
        </div>
        <div>
            <label for="lzy_theme_author">头像下方姓名/网名:</label>  
            <input name="lzy_theme_author" id="lzy_theme_author" size="40" value="<?php echo get_option('lzy_theme_author'); ?>"/>   
            <?php wp_nonce_field('update-options'); ?>   
            <input type="hidden" name="action" value="update" />   
            <input type="hidden" name="page_options" value="lzy_theme_author" />   
        </div>
        <div>
            <label for="lzy_theme_authorinfo">头像下方简介:</label>  
            <input name="lzy_theme_authorinfo" id="lzy_theme_authorinfo" size="40" value="<?php echo get_option('lzy_theme_authorinfo'); ?>"/>   
            <?php wp_nonce_field('update-options'); ?>   
            <input type="hidden" name="action" value="update" />   
            <input type="hidden" name="page_options" value="lzy_theme_authorinfo" />   
        </div>
        <div>
            <label for="lzy_theme_qq">QQ号:</label>  
            <input name="lzy_theme_qq" id="lzy_theme_qq" size="40" value="<?php echo get_option('lzy_theme_qq'); ?>"/>   
            <?php wp_nonce_field('update-options'); ?>   
            <input type="hidden" name="action" value="update" />   
            <input type="hidden" name="page_options" value="lzy_theme_qq" />   
        </div>
        <div>
            <label for="lzy_theme_weixin">微信/微信公众号链接:</label>  
            <input name="lzy_theme_weixin" id="lzy_theme_weixin" size="40" value="<?php echo get_option('lzy_theme_weixin'); ?>"/>   
            <?php wp_nonce_field('update-options'); ?>   
            <input type="hidden" name="action" value="update" />   
            <input type="hidden" name="page_options" value="lzy_theme_weixin" />   
        </div>
        <div>
            <label for="lzy_theme_weibo">新浪微博链接:</label>  
            <input name="lzy_theme_weibo" id="lzy_theme_weibo" size="40" value="<?php echo get_option('lzy_theme_weibo'); ?>"/>   
            <?php wp_nonce_field('update-options'); ?>   
            <input type="hidden" name="action" value="update" />   
            <input type="hidden" name="page_options" value="lzy_theme_weibo" />   
        </div>
        <div>
            <label for="lzy_theme_github">Github链接:</label>  
            <input name="lzy_theme_github" id="lzy_theme_github" size="40" value="<?php echo get_option('lzy_theme_github'); ?>"/>   
            <?php wp_nonce_field('update-options'); ?>   
            <input type="hidden" name="action" value="update" />   
            <input type="hidden" name="page_options" value="lzy_theme_github" />   
        </div>
        <p class="submit">   
            <input type="submit" name="option_save" value="<?php _e('保存设置'); ?>" />   
        </p>    
    </form>
</body>
</html>
