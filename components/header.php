<?php
/**
 * Created by PhpStorm.
 * User: shado
 * Date: 1/14/2019
 * Time: 0:31
 */

if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
} ?>
<!DOCTYPE HTML>
<html class="no-js" lang="zh-CN">

<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="referrer" content="never">
    <title><?php $this->archiveTitle(array(
                'category' => _t('%s'),
                'search'   => _t('包含关键字 %s 的文章'),
                'tag'      => _t('标签 %s 下的文章'),
                'author'   => _t('%s 发布的文章')
            ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/highlight.js@9.15.7/styles/atom-one-light.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/clover.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('libs/OwO/OwO.min.css'); ?>">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
	<?php $this->options->clover_css(); ?>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php if ($this->is('index')) : ?>active<?php endif; ?>" href="<?php $this->options->siteUrl(); ?>"><?php _e("主页") ?></a>
                </li>
                <?php $category = $this->widget('Widget_Metas_Category_List');
                if ($category->have()) :
                    while ($category->next()) :
                        if ($category->levels === 0) : ?>
                            <li class="nav-item">
                                <a class="nav-link <?php if ($this->is('category', $category->slug)) : ?>active<?php endif; ?>" href="<?php $category->permalink() ?>"><?php $category->name() ?></a></li>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
	            <?php $pages = $this->widget('Widget_Contents_Page_List');
	            if ($pages->have()) :
		            while ($pages->next()) : ?>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($this->is('page', $pages->slug)) : ?>active<?php endif; ?>" href="<?php $pages->permalink() ?>"><?php $pages->title() ?></a></li>
		            <?php endwhile; ?>
	            <?php endif; ?>
            </ul>
        </div>
    </nav>
    <?php
    if ($this->is('single')) {
        $cid = $this->cid;
        $db = Typecho_Db::get();
        $row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
        $db->query($db->update('table.contents')->rows(array('views' => (int)$row['views'] + 1))->where('cid = ?', $cid));
    }
    ?>