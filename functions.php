<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function themeConfig($form) {
    echo "<b>Lzy Life主题设置</b><br/>";
    echo "主题作者：Lzy20021010 https://www.lzy20021010.xyz";

    $socialICP = new Typecho_Widget_Helper_Form_Element_Text('socialICP', NULL, NULL, _t('ICP'), _t('请输入工业和信息化部ICP备案号'));
    $form->addInput($socialICP);

    $socialGA = new Typecho_Widget_Helper_Form_Element_Text('socialGA', NULL, NULL, _t('GA'), _t('请输入公安网安部门备案号'));
    $form->addInput($socialGA);

    $socialGAURL = new Typecho_Widget_Helper_Form_Element_Text('socialGAURL', NULL, NULL, _t('GAURL'), _t('请输入公安网安部门备案查询结果链接'));
    $form->addInput($socialGAURL);

    $authorName = new Typecho_Widget_Helper_Form_Element_Text('authorName', NULL, NULL, _t('头像下方姓名/网名'), _t('用于头像下方显示的姓名/网名'));
    $form->addInput($authorName);

    $authorInfo = new Typecho_Widget_Helper_Form_Element_Text('authorInfo', NULL, NULL, _t('头像下方简介'), _t('用于头像下方显示的一段文字'));
    $form->addInput($authorInfo);

    $socialQQ = new Typecho_Widget_Helper_Form_Element_Text('socialQQ', NULL, NULL, _t('QQ'), _t('请输入QQ号码'));
    $form->addInput($socialQQ);

    $socialWeixin = new Typecho_Widget_Helper_Form_Element_Text('socialWeixin', NULL, NULL, _t('Weixin'), _t('请输入 微信/微信公众号 地址'));
    $form->addInput($socialWeixin);

    $socialWeibo = new Typecho_Widget_Helper_Form_Element_Text('socialWeibo', NULL, NULL, _t('Weibo'), _t('请输入 新浪微博 地址'));
    $form->addInput($socialWeibo);

    $socialGithub = new Typecho_Widget_Helper_Form_Element_Text('socialGithub', NULL, NULL, _t('Github'), _t('请输入 Github 地址'));
    $form->addInput($socialGithub);

}
?>