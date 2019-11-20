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
        margin-top: 3rem;
        padding-bottom: 4rem;
        text-align: center;
        font-family: COURIER, arial, sans-serif;
    }

    #title{
        margin-top: 3rem;
    }

    #head{
        margin-top: 2rem;
    }

    #items{
        color: #737386;
        font-size: 1rem;
        display: block;
        margin-top: 3.5rem;
    }

    #items a{
        padding-top: 0.5rem;
        display: inline-block;
    }

    a.small {
        margin-top: 3rem;
        display: block;
        color: #8C2727;
        font-size: 0.8rem;
        font-family: arial, sans-serif;
    }
</style>
<div id="main">
    <div id="titles">
        <h1 id="title"> ... </h1>
        <h3 id="head"> ... </h3>
    </div>
    <div id="items">
        <a href="category/blog/">🚣博客</a> |
        <a href="category/thinking/">🤔随想</a> |
        <a href="category/life/">😋生活</a> |
        <a href="resume.html">📇简历</a> |
        <a href="about.html">📖关于</a>
    </div>
    <a class="small" href="https://github.com/idealclover/Random-Homepage">How this page works</a>
</div>

<script src="<?php $this->options->themeUrl('libs/random-homepage/head.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('libs/random-homepage/title.js'); ?>"></script>
<?php $this->need('components/footer.php'); ?>