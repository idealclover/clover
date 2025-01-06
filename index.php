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
    #body {
        font-family: COURIER, arial, sans-serif;
        margin-top: 3.5rem;
    }

    #title {
        font-weight: 500;
        /* margin-top: 3rem; */
    }

    #head {
        margin-top: 2rem;
        font-weight: 500;
        max-width: 100%;
        word-wrap: normal;
        overflow: hidden;
        height: 3.2rem;
    }

    #items {
        color: #737386;
        font-size: 1.1rem;
        display: block;
        margin-top: 1.5rem;
    }

    #items a {
        /* text-decoration: underline; */
        padding-top: 0.5rem;
        display: inline-block;
    }
    a.small {
        margin-top: 2rem;
        margin-bottom: 3rem;
        display: block;
        color: #737386;
        /* color: #8C2727; */
        font-size: 0.9rem;
        font-family: arial, sans-serif;
        text-decoration: underline;
    }
</style>
<div class="container d-flex" style="height:100vh;">
    <div class="row justify-content-center align-self-center m-auto" style="max-width: 100%">
        <div class="col p-0">
            <div id="body" class="text-center">
                <div id="titles">
                    <h1 id="title"> ... </h1>
                    <h2 id="head"> ... </h3>
                </div>
                <div id="items">
                    <a class="text-body" href="category/blog/">🔨技术</a> |
                    <a class="text-body" href="category/testing/">🖥️测评</a> |
                    <a class="text-body" href="category/thinking/">🤔随想</a> |
                    <a class="text-body" href="category/life/">😋生活</a> |
                    <a class="text-body" href="about.html">📖关于</a>
                </div>
                <a class="small" rel="noreferrer" target="_blank" href="https://github.com/idealclover/Random-Homepage">How this page works.</a>
            </div>
            <footer class="footer bottom" role="contentinfo">
                <!--置顶按钮-->
                <a class="turn-up" href="#"><i class="fa fa-rocket" style="height: 30px; width: 30px;"></i></a>
                <!-- <a class="turn-up" href="#"><i class="fa-moon-o" style="height: 30px; width: 30px;"></i></a> -->

                <div class="dark-mode custom-control custom-switch" style="height: 48px; width: 48px;">
                    <label class="dark-mode-label custom-control-label" style="margin: -9px;" for="darkSwitch"><i class="fa fa-moon-o" style="height: 30px; width: 30px;"></i> <input type="checkbox" class="custom-control-input" id="darkSwitch" />
                    </label>
                </div>
                📝博客主题 <a target="_blank" rel="noreferrer" href="https://github.com/idealclover/Clover">clover</a> 由 <a target="_blank" href="https://idealclover.top">idealclover</a> 用❤制作
                <br />
                &copy; <?php echo date('Y'); ?>
                <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
                Powered by <a target="_blank" rel="noreferrer" href="http://www.typecho.org">Typecho</a><br />
                <div id="span_dt_dt"></div>
                <!-- <div id="span_dt_dt" style="display:none;"></div> -->
            </footer>
        </div>
    </div>
</div>



<?php $this->footer(); ?>

<script src="<?php $this->options->themeUrl('assets/scripts/fuckweixin.js'); ?>"></script>
<script src="https://cdn.jsdelivr.net/gh/idealclover/clover/libs/canvas-nest/canvas-nest.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.1/dist/lazyload.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.15.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dark-mode-switch@1.0.0/dark-mode-switch.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/smooth-scroll@16.0.3/dist/smooth-scroll.polyfills.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.1/dist/jquery.fancybox.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.0.0/build/highlight.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.cookie@1.4.1/jquery.cookie.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/pangu@4.0.7/dist/browser/pangu.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"></script>
<script src="<?php $this->options->themeUrl('assets/scripts/main.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('libs/mouse-click/mouse-click.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('libs/random-homepage/head.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('libs/random-homepage/title.js'); ?>"></script>
</body>

</html>