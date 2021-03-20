<?php

/**
 * 愿未来能让人有所期待。
 *
 * @package clover
 * @author idealclover
 * @version 0.0.1
 * @link https://idealclover.top
 */

if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
} ?>

<?php $this->need('components/header.php'); ?>
<style type="text/css">
    #main {
        /* margin-top: 3rem !important; */
        padding-bottom: 2rem;
        text-align: center;
        font-family: COURIER, arial, sans-serif;
    }

    #title {
        font-weight: 500;
        margin-top: 3rem;
    }

    #head {
        margin-top: 2rem;
        font-weight: 500;
    }

    #items {
        color: #737386;
        font-size: 1rem;
        display: block;
        margin-top: 2rem;
    }

    #items a {
        padding-top: 0.5rem;
        display: inline-block;
    }

    a.small {
        margin-top: 2rem;
        display: block;
        color: #8C2727;
        font-size: 0.9rem;
        font-family: arial, sans-serif;
        text-decoration: underline;
    }
</style>
<div id="main">
    <div id="titles">
        <h1 id="title"> ... </h1>
        <h3 id="head"> ... </h3>
    </div>
    <div id="items">
        <a class="text-body" href="category/blog/">🔨技术</a> |
        <a class="text-body" href="category/testing/">🖥️测评</a> |
        <a class="text-body" href="category/thinking/">🤔随想</a> |
        <a class="text-body" href="category/life/">😋生活</a> |
        <a class="text-body" href="about.html">📖关于</a>
    </div>
    <a class="small" rel="noreferrer" target="_blank" href="https://github.com/idealclover/Random-Homepage">How this page works.</a>
    <!-- <a  target="_blank" href="https://github.com/idealclover"><img src="https://img.shields.io/badge/dynamic/json.svg?label=Followers&query=%24.followers&url=https%3A%2F%2Fapi.github.com%2Fusers%2Fidealclover&style=social&logo=github" /></a> -->
    <!-- <a  target="_blank" href="https://github.com/idealclover/Random-Homepage"><img src="https://img.shields.io/github/stars/idealclover/Random-Homepage?style=social" /></a> -->
</div>

<script src="<?php $this->options->themeUrl('libs/random-homepage/head.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('libs/random-homepage/title.js'); ?>"></script>
<?php $this->need('components/footer.php'); ?>