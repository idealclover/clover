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
