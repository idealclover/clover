<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
} ?>

<footer class="footer bottom" role="contentinfo">
    <!--置顶按钮-->
    <a class="turn-up" href="#"><i class="fa fa-rocket"></i></a>
    Theme <a href="https://github.com/idealclover/Clover">Clover</a> made with ❤ by <a href="https://idealclover.top">idealclover</a>
    <br />
    &copy; <?php echo date('Y'); ?>
    <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('Powered by <a href="http://www.typecho.org">Typecho</a>'); ?>.
    <br />
    <div id="span_dt_dt"></div>
    <script data-no-instant>
        function show_date_time() {
            window.setTimeout("show_date_time()", 1e3);
            var BirthDay = new Date("<?php $this->options->clover_start_time(); ?>"),
                today = new Date,
                timeold = today.getTime() - BirthDay.getTime(),
                msPerDay = 864e5,
                e_daysold = timeold / msPerDay,
                daysold = Math.floor(e_daysold),
                e_hrsold = 24 * (e_daysold - daysold),
                hrsold = Math.floor(e_hrsold),
                e_minsold = 60 * (e_hrsold - hrsold),
                minsold = Math.floor(60 * (e_hrsold - hrsold)),
                seconds = Math.floor(60 * (e_minsold - minsold));
            span_dt_dt.innerHTML = "博客已悄悄运行" + daysold + "天" + hrsold + "小时" + minsold + "分" + seconds + "秒";
        }
        show_date_time();
    </script>
</footer>

<?php $this->footer(); ?>

<?php $this->options->clover_js(); ?>

<script type="text/javascript">
    function is_weixin() {
        var ua = navigator.userAgent.toLowerCase();
        if (ua.match(/MicroMessenger/i) == "micromessenger") {
            return true;
        } else {
            return false;
        }
    }
    var isWeixin = is_weixin();
    var winHeight = typeof window.innerHeight != 'undefined' ? window.innerHeight : document.documentElement.clientHeight;

    function loadHtml() {
        var div = document.createElement('div');
        div.id = 'weixin-tip';
        div.innerHTML = '<p><img src="<?php $this->options->themeUrl('assets/fuckweixin.png'); ?>" alt="微信打开"/></p>';
        document.body.appendChild(div);
    }

    function loadStyleText(cssText) {
        var style = document.createElement('style');
        style.rel = 'stylesheet';
        style.type = 'text/css';
        try {
            style.appendChild(document.createTextNode(cssText));
        } catch (e) {
            style.styleSheet.cssText = cssText; //ie9以下
        }
        var head = document.getElementsByTagName("head")[0]; //head标签之间加上style样式
        head.appendChild(style);
    }

    var cssText = "img{max-width: 100%; height: auto;} #weixin-tip{position: fixed; left:0; top:0; background: rgba(0,0,0,0.8); filter:alpha(opacity=80); width: 100%; height:100%; z-index: 100;} #weixin-tip p{text-align: center; margin-top: 10%; padding:0 5%;}";
    if (isWeixin) {
        loadHtml();
        loadStyleText(cssText);
    }
</script>
<script>
    var titleTime;
    var OriginTitile = document.title;
    document.addEventListener('visibilitychange', function() {
        if (document.hidden) {
            var link = document.querySelector("link[rel*='icon']") || document.createElement('link');
            link.type = 'image/x-icon';
            link.rel = 'shortcut icon';
            link.href = '/favicon2.ico';
            document.getElementsByTagName('head')[0].appendChild(link);
            // document.title = '|ω･) 哎呦~页面不见了~';
            document.title = '<?php $this->options->clover_leave(); ?>';
            clearTimeout(titleTime);
        } else {
            var link = document.querySelector("link[rel*='icon']") || document.createElement('link');
            link.type = 'image/x-icon';
            link.rel = 'shortcut icon';
            link.href = '/favicon.ico';
            document.getElementsByTagName('head')[0].appendChild(link);
            // document.title = '(/≧▽≦)/ 呦吼~肥来啦！';
            document.title = '<?php $this->options->clover_return(); ?>';
            titleTime = setTimeout(function() {
                document.title = OriginTitile;
            }, 1000);
        }
    });
</script>
<script src="<?php $this->options->themeUrl('assets/clover.js'); ?>"></script>
<script src="https://cdn.jsdelivr.net/gh/idealclover/clover@v0.0.1/libs/canvas-nest/canvas-nest.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.15.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/smooth-scroll@16.0.3/dist/smooth-scroll.polyfills.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/highlight.js@9.15.7/lib/highlight.min.js"></script>
<script>
    $(function() {
        $('[data-toggle="popover"]').popover()
    })
</script>
<script>
    var scroll = new SmoothScroll('a.turn-up, .article-list a', {
        offset: 100
    });
</script>
<script>
    hljs.initHighlightingOnLoad();
</script>
<script>
    var scroll = new SmoothScroll('a.turn-up, .article-list a', {
        offset: 100
    });
</script>
</body>

</html>