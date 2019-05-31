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

	$sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock',
		array('ShowRecentPosts' => _t('显示最新文章'),
		      'ShowRecentComments' => _t('显示最近回复'),
		      'ShowCategory' => _t('显示分类'),
		      'ShowArchive' => _t('显示归档'),
		      'ShowOther' => _t('显示其它杂项')),
		array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));

	$form->addInput($sidebarBlock->multiMode());
}