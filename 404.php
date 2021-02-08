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
        margin-top: 3rem !important;
        padding-bottom: 4rem;
        text-align: center;
        font-family: COURIER, arial, sans-serif;
    }

    #title {
        margin-top: 3rem;
    }

    #head {
        margin-top: 2rem;
    }

    #items {
        color: #737386;
        font-size: 1rem;
        display: block;
        margin-top: 3.5rem;
    }

    #items a {
        padding-top: 0.5rem;
        display: inline-block;
    }

    a.small {
        margin-top: 3rem;
        display: block;
        color: #8C2727;
        font-size: 0.9rem;
        font-family: arial, sans-serif;
        text-decoration: underline;
    }
</style>
<div id="main">
    <div id="titles">
        <h1 id="title"> 404 NOT FOUND. </h1>
        <h3 id="head"> The Page You're Looking For Does Not Exist. </h3>
    </div>
    <div id="items">
        <a href="/" class="btn btn-outline-dark btn-lg"><i class="fa fa-home" aria-hidden="true"></i> 回到首页</a>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/gh/idealclover/clover/libs/canvas-nest/canvas-nest.min.js"></script>
<?php $this->need('components/footer.php'); ?>