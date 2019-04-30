<?php
/**
 * 愿未来能让人有所期待。
 *
 * @package clover
 * @author idealclover
 * @version 0.0.1
 * @link https://idealclover.top
 */

if ( ! defined( '__TYPECHO_ROOT_DIR__' ) ) {
	exit;
} ?>

<?php $this->need( 'components/header.php' ); ?>
<style type="text/css">
    * {
        margin: 0;
        padding: 0;
    }
    html{
        height:100%
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
    <h1 id="title"> ... </h1> <br/>
    <h3 id="head"> ... </h3> <br/>
	<!-- <a class="btn btn-outline-secondary" href="category/blog/" role="button">Blog</a>
	<a class="btn btn-outline-secondary" href="category/thinking/" role="button">Thinking</a>
	<a class="btn btn-outline-secondary" href="category/life/" role="button">Life</a>
	<a class="btn btn-outline-secondary" href="resume.html" role="button">Resume</a>
	<a class="btn btn-outline-secondary" href="about.html" role="button">About</a> -->
	<!-- <a class="btn btn-outline-dark" href="category/blog/" role="button">Blog</a>
	<a class="btn btn-outline-dark" href="category/thinking/" role="button">Thinking</a>
	<a class="btn btn-outline-dark" href="category/life/" role="button">Life</a>
	<a class="btn btn-outline-dark" href="resume.html" role="button">Resume</a>
	<a class="btn btn-outline-dark" href="about.html" role="button">About</a>
	<br /> -->
    <a href="category/blog/">🚣Blog</a> |
    <a href="category/thinking/">🤔Thinking</a> |
    <a href="category/life/">😋Life</a> |
	<a href="resume.html">📇Resume</a> |
	<a href="about.html">📖About</a> <br/>
	<!-- <a href="http://wpa.qq.com/msgrd?v=3&uin=1455169173&site=qq&menu=yes" target="_blank">QQ</a> |
	<a href="http://t.me/idealclover" target="_blank">Telegram</a> |
    <a href="https://github.com/idealclover target="_blank"">Github</a> |
    <a href="mailto:shadowspacex@163.com" target="_blank">Email</a> <br/> -->
	<a class="small" href="https://github.com/idealclover/Random-Homepage">How this page works</a>
</div>

<script src="<?php $this->options->themeUrl( 'libs/random-homepage/head.js' ); ?>"></script>
<script src="<?php $this->options->themeUrl( 'libs/random-homepage/title.js' ); ?>"></script>
<?php $this->need( 'components/footer.php' ); ?>
