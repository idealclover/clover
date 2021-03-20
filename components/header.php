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

    <!--twitter card begin-->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@idealclover" />
    <meta name="twitter:creator" content="@idealclover" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php $this->permalink() ?>" />
    <meta property="og:title" itemprop="name" content="<?php $this->archiveTitle('', ''); ?>" />
    <meta property="og:image" itemprop="image" content="<?php $this->options->themeUrl('assets/favicon/android-chrome-192x192.png'); ?>">
    <?php if ($this->is('post')) : ?>
        <!-- <meta itemprop="image" content="<?php // echo Content::returnHeaderImgSrc($this, 'post', 0, true); 
                                                ?>"> -->
        <meta name="description" itemprop="description" property="og:description" content="<?php $this->excerpt(); ?>">
    <?php else : ?>
        <meta name="description" property="og:description" itemprop="description" content="<?php $this->options->description(); ?>">
    <?php endif; ?>
    <!--twitter card end-->

    <meta name="apple-mobile-web-app-capable" content="no">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="idealclover">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php $this->options->themeUrl('assets/favicon/apple-touch-icon.png'); ?>">

    <link rel="icon" type="image/png" sizes="32x32" href="<?php $this->options->themeUrl('assets/favicon/favicon-32x32.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php $this->options->themeUrl('assets/favicon/favicon-16x16.png'); ?>">
    <link rel="mask-icon" href="<?php $this->options->themeUrl('assets/favicon/safari-pinned-tab.svg') ?>" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#343A40">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.6.0/dist/flatly/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.1/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.0.0/build/styles/dracula.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owo@1.0.2/dist/OwO.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/styles/main.css?version=20042202'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/styles/dark.min.css?version=20031801'); ?>">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112910356-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-112910356-3');
    </script>

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>

<body>
    <div class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
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
                    <li class="nav-item">
                        <a class="nav-link <?php if ($this->is('page', 'articles')) : ?>active<?php endif; ?>" href="<?php $this->options->siteUrl(); ?>index.php/articles.html"><?php _e("归档") ?></a>
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
        <div id="banner" class="alert alert-dark alert-dismissible text-center fade show" role="alert" style="display:none;">
            <div style="padding-left: 34px;">
                <a href="https://mailchi.mp/7f28311041bc/idealclover" rel="noreferrer" target="_blank" onclick="$.cookie('alert-box', 'closed', { path: '/' });$('.alert').hide();" style="text-decoration: underline;">
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