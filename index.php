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
    html, body {
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
        padding-top: 10px;
        color: #8C2727;
        font-size: 12px;
        font-family: arial, sans-serif;
    }
</style>
<div id="main">
    <h1 id="title"> ... </h1> <br/>
    <h3 id="head"> ... </h3> <br/>
    <a href="https://www.idealclover.top">Blog</a> |
    <a href="https://blog.idealclover.top">Zone</a> |
    <a href="https://t.me/idealclover">Telegram</a> |
    <a href="https://github.com/idealclover">Github</a> |
    <a href="https://idealclover.top/resume/resume.html">Resume</a> |
    <a href="mailto:shadowspacex@163.com">Email</a> <br/>
    <a class="small" href="https://github.com/idealclover/Random-Homepage">How this page works</a>
</div>

<script src="<?php $this->options->themeUrl( 'libs/random-homepage/head.js' ); ?>"></script>
<script src="<?php $this->options->themeUrl( 'libs/random-homepage/title.js' ); ?>"></script>
<?php $this->need( 'components/footer.php' ); ?>


