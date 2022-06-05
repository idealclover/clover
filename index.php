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
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullpage.js@2.9.7/dist/jquery.fullpage.min.css"> -->
<style type="text/css">
    .font-hei {
        font-family: -apple-system, "Noto Sans", "Helvetica Neue", Helvetica, "Nimbus Sans L", Arial, "Liberation Sans", "PingFang SC", "Hiragino Sans GB", "Noto Sans CJK SC", "Source Han Sans SC", "Source Han Sans CN", "Microsoft YaHei", "Wenquanyi Micro Hei", "WenQuanYi Zen Hei", "ST Heiti", SimHei, "WenQuanYi Zen Hei Sharp", sans-serif;
    }

    #body {
        /* font-family: COURIER, arial, sans-serif; */
        font-family: Consolas, "Courier New", Courier, FreeMono, 'Lucida Console', Monaco, monospace;
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

    /* .arrowDown {
        position: fixed;
        z-index: 99;
        cursor: pointer;
        bottom: 30px;
        border-style: solid;
        border-color: #ccc;
        border-width: 0 8px 8px 0;
        margin-left: -18px;
        left: 50%;
        padding: 18px;
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
    } */
    @keyframes go_down_animation {
        0% {
            transform: scale(1, 1) translateY(0px);
        }

        10% {
            transform: scale(1.1, 0.9) translateY(0px);
        }

        30% {
            transform: scale(0.9, 1.1) translateY(-30px);
        }

        50% {
            transform: scale(1.05, 0.95) translateY(0px);
        }

        57% {
            transform: scale(1, 1) translateY(-7px);
        }

        64% {
            transform: scale(1, 1) translateY(0px);
        }

        100% {
            transform: scale(1, 1) translateY(0px);
        }
    }

    .home_arrow {
        opacity: 1;
        cursor: pointer;
        margin-top: 1.5rem;
        /* bottom: 30px; */
        /* position: fixed; */
        position: absolute;
        left: 50%;
        width: 40px;
        height: 40px;
        margin-left: -20px;
    }

    .home_arrow_div>.home_arrow {
        transform: translateX(-50%);
        transition-delay: 5s;
    }

    .bou {
        /* position: absolute;
        bottom: 0px;
        left: 10px; */
        animation-duration: 4s;
        animation-iteration-count: infinite;
        transform-origin: center bottom;

        animation-name: go_down_animation;
        animation-timing-function: cubic-bezier(0.28, 0.84, 0.42, 1);
    }

    ul {
        padding-left: 1.2rem;
    }
</style>
<div id="fullpage">
    <div class="section">
        <div class="container d-flex" style="height: calc(var(--vh, 1vh) * 100);">
            <div class="row justify-content-center align-self-center m-auto" style="max-width: 100%">
                <div class="col p-0">
                    <div id="body" class="text-center">
                        <div id="titles">
                            <h1 id="title"> ... </h1>
                            <h2 id="head"> ... </h3>
                        </div>
                        <div id="items" class="font-hei">
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
                    <!-- <div class="justify-content-center ">
                        <div class="arrow"></div>
                    </div> -->
                    <!-- <div class="arrowDown"></div> -->
                    <div class="home_arrow home_arrow_div">
                        <!-- <img  src="arrow.svg"> -->
                        <svg class="home_arrow bou" width="39" height="16" viewBox="0 0 39 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 2L19.5 14L37 2" stroke="#A0A0A0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <div class="section fp-auto-height" id="section-container">
        <div class="container col-10 col-lg-9" id="main">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <?php
                    $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
                    $year = 0;
                    $mon = 0;
                    $i = 0;
                    $j = 0;
                    $output = '<section class="timeline" id="archives">';
                    while ($archives->next()) :
                        $year_tmp = date('Y', $archives->created);
                        $mon_tmp = date('m', $archives->created);
                        $y = $year;
                        $m = $mon;
                        // if ($mon != $mon_tmp && $mon > 0) $output .= '</ul></li>';
                        // if ($year != $year_tmp && $year > 0) $output .= '</ul>';
                        if ($year != $year_tmp) {
                            $year = $year_tmp;
                            $output .= '<time class="timeline-item timeline-item--year">' . $year . ' 年</time>';
                        }
                        // if ($mon != $mon_tmp) {
                        //     $mon = $mon_tmp;
                        //     $output .= '<li><span class="al_mon">' . $mon . ' 月</span><ul class="al_post_list">';
                        // }
                        $output .= '<article class="timeline-item"><time class="timeline-item__time">' . date('m-d ', $archives->created) . '</time><h2 class="timeline-item__title"><a class="timeline-item__link" href="' . $archives->permalink . '">' . $archives->title . '</a></h2></article>';
                    // $output .= '<li>' . date('m.d: ', $archives->created) . '<a href="' . $archives->permalink . '">' . $archives->title . '</a> (' . AnotherLike_Plugin::theLike($archives->cid, false, false) . ' <i class="fa fa-thumbs-o-up"></i> , ' . $archives->commentsNum . ' <i class="fa fa-comments-o"></i>' . ')</li>';
                    endwhile;
                    $output .= '</section>';
                    echo $output;
                    ?>
                </div><!-- end #main -->
                <?php $this->need('components/sidebar.php'); ?>
            </div><!-- end #row -->
        </div><!-- end #container -->
        <footer class="footer bottom" role="contentinfo">
            <!--置顶按钮-->
            <a class="turn-up" href="#"><i class="fa fa-rocket" style="height: 30px; width: 30px;"></i></a>
            <!-- <a class="turn-up" href="#"><i class="fa-moon-o" style="height: 30px; width: 30px;"></i></a> -->

            <div class="dark-mode custom-control custom-switch" style="height: 48px; width: 48px;">
                <label class="dark-mode-label custom-control-label" style="margin: -9px;" for="darkSwitch"><i class="fa fa-moon-o" style="height: 30px; width: 30px;"></i> <input type="checkbox" class="custom-control-input" id="darkSwitch" />
                </label>
            </div>
            <div class="row justify-content-center" style="margin: 0">
                <div>📝除非特别注明，</div>
                <div>本站所有文章在 <a target="_blank" rel="noreferrer" href="https://creativecommons.org/licenses/by-nc-sa/4.0/deed.zh">CC BY-NC-SA 4.0</a> 协议下授权</div>
            </div>
            📝博客主题 <a target="_blank" rel="noreferrer" href="https://github.com/idealclover/Clover">clover</a> 由 <a target="_blank" href="https://idealclover.top">idealclover</a> 用❤制作
            <br />
            &copy; <?php echo date('Y'); ?>
            <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
            Powered by <a target="_blank" rel="noreferrer" href="http://www.typecho.org">Typecho</a><br />
        </footer>
    </div>
</div>


<?php $this->footer(); ?>
<script src="<?php $this->options->themeUrl('assets/scripts/fuckweixin.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('libs/canvas-nest/canvas-nest.min.js'); ?>"></script>

<script crossorigin="anonymous" integrity="sha512-lVcnjCLGjJTaZU55wD7H3f8SJVi6VV5cQRcmGuYcyIY607N/rzZGEl90lNgsiEhKygATryG/i6e5u2moDFs5kQ==" src="https://lib.baomitu.com/vanilla-lazyload/17.3.1/lazyload.min.js"></script>
<script crossorigin="anonymous" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" src="https://lib.baomitu.com/popper.js/1.16.1/umd/popper.min.js"></script>
<script crossorigin="anonymous" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" src="https://lib.baomitu.com/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script crossorigin="anonymous" integrity="sha384-1Jq1gXc0sLyvpP1iLt5QoryVCyJkBLyfNkaeECRYRX4u1Nx7gT547w5/5YZ1b5DG" src="https://lib.baomitu.com/smooth-scroll/16.1.3/smooth-scroll.polyfills.min.js"></script>
<script crossorigin="anonymous" integrity="sha384-Zm+UU4tdcfAm29vg+MTbfu//q5B/lInMbMCr4T8c9rQFyOv6PlfQYpB5wItcXWe7" src="https://lib.baomitu.com/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script crossorigin="anonymous" integrity="sha512-tL84mD+FR70jI7X8vYj5AfRqe0EifOaFUapjt1KvDaPLHgTlUZ2gQL/Tzvvn8HXuQm9oHYShJpNFdyJmH2yHrw==" src="https://lib.baomitu.com/highlight.js/10.7.3/highlight.min.js"></script>
<script crossorigin="anonymous" integrity="sha384-HeUHqi0nVsPUm/E0ss7OfnIV/yD96JWB8ehZvUuoVax9DpNHL17jj9pdfXHzqDxm" src="https://lib.baomitu.com/pangu/4.0.7/pangu.min.js"></script>
<script crossorigin="anonymous" integrity="sha512-PIisRT8mFfdxx99gMs7WAY5Gp+CtjYYxKvF93w8yWAvX548UBNADHu7Qkavgr6yRG+asocqfuk5crjNd5z9s6Q==" src="https://lib.baomitu.com/clipboard.js/2.0.10/clipboard.min.js"></script>

<script src="<?php $this->options->themeUrl('assets/scripts/main.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('libs/mouse-click/mouse-click.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('libs/random-homepage/head.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('libs/random-homepage/title.js'); ?>"></script>
<script>
    document.documentElement.style.setProperty('--vh', `${window.innerHeight/100}px`);
    $('.home_arrow').click(function() {
        window.scrollTo({
            top: window.innerHeight,
            behavior: 'smooth'
        });
    });
</script>
</body>

</html>