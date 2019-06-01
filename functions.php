<?php
/**
 * Created by PhpStorm.
 * User: shado
 * Date: 1/14/2019
 * Time: 22:14
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;

//获取顶级分类
function gettopcategory($category)
{
	$db = Typecho_Db::get();
	$prefix = $db->getPrefix();
	$rs = $db->fetchRow($db->select()->from($prefix . 'metas')->where('slug = ?', $category)->limit(1));

	if ($rs['parent'] == 0) {
		return $rs['slug'];
	} else {
		$rs2 = $db->fetchRow($db->select()->from($prefix . 'metas')->where('mid = ?', $rs['parent'])->limit(1));
		return $rs2['slug'];
	}
}

function themeConfig($form) {
	$title = new Typecho_Widget_Helper_Form_Element_Text('clover_title', NULL,  NULL, _t('站点标题'), _t('在这里填入想显示的站点标题，要求必须为英文'));
	$form->addInput($title);

	$subtitle = new Typecho_Widget_Helper_Form_Element_Text('clover_subtitle', NULL,  NULL, _t('站点副标题'), _t('在这里填入想显示的站点副标题，要求必须为英文'));
	$form->addInput($subtitle);

	$contents = new Typecho_Widget_Helper_Form_Element_Textarea('clover_contents', NULL,  "<a href=\"category/blog/\">Blog</a> | <a href=\"category/thinking/\">Thinking</a> | <a href=\"category/life/\">Life</a> | <a href=\"resume.html\">Resume</a> | <a href=\"about.html\">About</a> ", _t('站点主页内容HTML'), _t('在这里填入站点主页内容的HTML'));
	$form->addInput($contents);

	$description = new Typecho_Widget_Helper_Form_Element_Textarea('clover_description', NULL,  NULL, _t('侧边栏介绍'), _t('在这里填入侧边栏的介绍'));
	$form->addInput($description);

	$aboug_blog = new Typecho_Widget_Helper_Form_Element_Textarea('clover_about_blog', NULL,  NULL, _t('关于博客介绍'), _t('在这里填入关于博客的介绍'));
	$form->addInput($aboug_blog);

	$sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock',
		array('ShowQQ' => _t('显示 QQ'),
		      'ShowTelegram' => _t('显示 Telegram'),
		      'ShowMail' => _t('显示 Email'),
		      'ShowTwitter' => _t('显示 Twitter'),
		      'ShowWeibo' => _t('显示微博')),
		array('ShowQQ', 'ShowTelegram', 'ShowMail', 'ShowTwitter', 'ShowWeibo'), _t('社交图标设置'));

	$form->addInput($sidebarBlock->multiMode());

	$qq = new Typecho_Widget_Helper_Form_Element_Text('clover_QQ', NULL,  NULL, _t('QQ 号'), _t('如果需要显示 QQ，请填入您的QQ号'));
	$form->addInput($qq);

	$telegram = new Typecho_Widget_Helper_Form_Element_Text('clover_telegram', NULL,  NULL, _t('Telegram id'), _t('如果需要显示 Telegram，请填入您的 Telegram id'));
	$form->addInput($telegram);

	$email = new Typecho_Widget_Helper_Form_Element_Text('clover_email', NULL,  NULL, _t('Email'), _t('如果需要显示 Email，请填入您的 Email'));
	$form->addInput($email);

	$twitter = new Typecho_Widget_Helper_Form_Element_Text('clover_twitter', NULL,  NULL, _t('Twitter'), _t('如果需要显示 Twitter，请填入您的 Twitter id'));
	$form->addInput($twitter);

	$weibo = new Typecho_Widget_Helper_Form_Element_Text('clover_weibo', NULL,  NULL, _t('微博 id'), _t('如果需要显示微博，请填入您的微博 id'));
	$form->addInput($weibo);

	$start_time = new Typecho_Widget_Helper_Form_Element_Text('clover_start_time', NULL,  '2017/5/20 13:14:15', _t('博客运行时间'), _t('格式务必为 YY/MM/DD HH:MM:SS'));
	$form->addInput($start_time);

	$leave = new Typecho_Widget_Helper_Form_Element_Text('clover_leave', NULL,  '|ω･) 哎呦~页面不见了~', _t('离开时标题'), _t('用户离开该网站时的网站暂时标题'));
	$form->addInput($leave);

	$return = new Typecho_Widget_Helper_Form_Element_Text('clover_return', NULL,  '(/≧▽≦)/ 呦吼~肥来啦！', _t('返回时标题'), _t('用户返回该网站时的网站暂时标题'));
	$form->addInput($return);

	$css = new Typecho_Widget_Helper_Form_Element_Textarea('clover_css', NULL,  NULL, _t('头部 CSS'), _t('在这里插入需要的其他头部 CSS 代码'));
	$form->addInput($css);

	$js = new Typecho_Widget_Helper_Form_Element_Textarea('clover_js', NULL,  NULL, _t('尾部 js'), _t('在这里插入需要的其他尾部 JS 代码'));
	$form->addInput($js);

}