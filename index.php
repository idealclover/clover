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
    * {
        margin: 0;
        padding: 0;
    }

    html {
        height: 100%
    }

    h3 {
        width: 100%;
        overflow: hidden;
        height: 60px;
    }

    #main {
        padding: 3.0em 0;
        text-align: center;
        font-family: COURIER, arial, sans-serif;
    }

    a {
        color: #737386;
        display: inline-block;
    }

    a.small {
        padding-top: 3.0em;
        color: #8C2727;
        font-size: 12px;
        font-family: arial, sans-serif;
    }
</style>
<div id="main">
    <h1 id="title"> ... </h1> <br />
    <h3 id="head"> ... </h3> <br />
    <a href="category/blog/">🚣Blog</a> |
    <a href="category/thinking/">🤔Thinking</a> |
    <a href="category/life/">😋Life</a> |
    <a href="resume.html">📇Resume</a> |
    <a href="about.html">📖About</a> <br />
    <a class="small" href="https://github.com/idealclover/Random-Homepage">How this page works</a>
</div>

<script src="<?php $this->options->themeUrl('libs/random-homepage/head.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('libs/random-homepage/title.js'); ?>"></script>
<?php $this->need('components/footer.php'); ?>