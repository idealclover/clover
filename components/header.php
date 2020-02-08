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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php $this->archiveTitle(array(
                'category' => _t('%s'),
                'search'   => _t('包含关键字 %s 的文章'),
                'tag'      => _t('标签 %s 下的文章'),
                'author'   => _t('%s 发布的文章')
            ), '', ' - '); ?><?php $this->options->title(); ?>
    </title>
    <meta name="apple-mobile-web-app-capable" content="no">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="idealclover">
    <link rel="apple-touch-icon" href="/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/highlight.js@9.15.7/styles/atom-one-light.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.1/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/clover.css?version=20020101'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('libs/OwO/OwO.min.css'); ?>">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>

<body>
    <div class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php $this->options->siteUrl(); ?>">idealclover</a>
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
                    <li class="nav-item">
                        <a class="nav-link <?php if ($this->is('page', 'about')) : ?>active<?php endif; ?>" href="<?php $this->options->siteUrl(); ?>index.php/about.html"><?php _e("关于") ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($this->is('page', 'more')) : ?>active<?php endif; ?>" href="<?php $this->options->siteUrl(); ?>index.php/more.html"><?php _e("更多") ?></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="banner" class="alert alert-secondary alert-dismissible text-center fade show" role="alert" style="display:none;">
            <div style="padding-left: 34px; ">
                <a href="https://mailchi.mp/7f28311041bc/idealclover" target="_blank" onclick="$.cookie('alert-box', 'closed', { path: '/' });$('.alert').hide();" style="text-decoration: underline;">
                    用邮箱订阅翠翠的博客吧！ </a>
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="display: inline-block;">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <?php
    if ($this->is('single')) {
        $cid = $this->cid;
        $db = Typecho_Db::get();
        $row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
        $db->query($db->update('table.contents')->rows(array('views' => (int) $row['views'] + 1))->where('cid = ?', $cid));
    }
    ?>