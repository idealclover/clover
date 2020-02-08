<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
} ?>
<div class="modal fade" id="copyright" tabindex="-1" role="dialog" aria-labelledby="failTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successTitle">版权声明</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                📝除非特别注明，本站所有文章在 CC BY-NC-SA 4.0 协议下授权<br />
                这意味着您可以自由地转载，修改本文，但<b>必须</b>遵守以下规定：<br />
                1. 您<b>必须</b>给出适当的署名（idealclover），提供指向本许可协议的链接，同时标明是否（对原始作品）作了修改<b>（包括标题）</b>。<br />
                2. 您<b>不得</b>将本作品用于商业目的。<br />
                3. 如果您再混合、转换或者基于本作品进行创作，您必须<br />同样基于该许可协议（即 CC BY-NC-SA 4.0 协议）分发您贡献的作品。
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary" onclick="copy()" data-dismiss="modal">我遵守版权协议</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="copyright-true" tabindex="-1" role="dialog" aria-labelledby="failTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">请重新复制</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"" data-dismiss="modal">确定</button>
            </div>
        </div>
    </div>
</div>
<footer class="footer bottom" role="contentinfo">
    <!--置顶按钮-->
    <a class="turn-up" href="#"><i class="fa fa-rocket"></i></a>
    <div class="row justify-content-center" style="margin: 0">
        <div>
        📝除非特别注明，
        </div><div>
        本站所有文章在 CC BY-NC-SA 4.0 协议下授权
        </div>
    </div>
    博客主题 <a href="https://github.com/idealclover/Clover">clover</a> 由 <a href="https://idealclover.top">idealclover</a> 本人用❤制作
    <br />
    &copy; <?php echo date('Y'); ?>
    <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('Powered by <a href="http://www.typecho.org">Typecho</a>'); ?>.
    <br />
    <div id="span_dt_dt"></div>
    <script data-no-instant>
        function show_date_time() {
            window.setTimeout("show_date_time()", 1e3);
            var BirthDay = new Date("2017/5/20 13:14:15"),
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
<?php if (!$this->user->hasLogin()) : ?>
<script>
    function copy() {
        if (window.ActiveXObject) {
            document.body.oncopy = function() {
                event.returnValue = false;
                var t = document.selection.createRange().text;
                var s = "原文链接：" + location.href;
                clipboardData.setData('Text', t + '\r\n' + s);
            };
        } else {
            function addLink() {
                var body_element = document.getElementsByTagName('body')[0];
                var selection;
                selection = window.getSelection();
                var pagelink = "\n原文链接：" + location.href;
                var copytext = selection + pagelink;
                var newdiv = document.createElement('div');
                newdiv.style.position = 'absolute';
                newdiv.style.left = '-99999px';
                body_element.appendChild(newdiv);
                newdiv.innerHTML = copytext;
                selection.selectAllChildren(newdiv);
                window.setTimeout(function() {
                    body_element.removeChild(newdiv);
                }, 0);
            }
            document.oncopy = addLink;
            $('#copyright-true').modal({
                show: true
            });
        }
    }
    document.oncopy = function() {
        $('#copyright').modal({
            show: true
        });
        return false;
    };
    document.oncut = function() {
        return false;
    }
</script>
<?php endif; ?>
<script type="text/javascript">
    // function is_weixin() {
    //     var ua = navigator.userAgent.toLowerCase();
    //     if (ua.match(/MicroMessenger/i) == "micromessenger") {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
    // var isWeixin = is_weixin();
    // // var isWeixin = false;
    // var winHeight = typeof window.innerHeight != 'undefined' ? window.innerHeight : document.documentElement.clientHeight;

    // function loadHtml() {
    //     var div = document.createElement('div');
    //     div.id = 'weixin-tip';
    //     // div.innerHTML = '<img src="<?php $this->options->themeUrl('assets/fuckweixin.png'); ?>" alt="微信打开"/>';
    //     div.innerHTML = '<img src="https://i.loli.net/2019/06/25/5d11d9c19065848452.png" alt="微信打开"/>';
    //     document.body.appendChild(div);
    // }

    // function loadStyleText(cssText) {
    //     var style = document.createElement('style');
    //     style.rel = 'stylesheet';
    //     style.type = 'text/css';
    //     try {
    //         style.appendChild(document.createTextNode(cssText));
    //     } catch (e) {
    //         style.styleSheet.cssText = cssText; //ie9以下
    //     }
    //     var head = document.getElementsByTagName("head")[0]; //head标签之间加上style样式
    //     head.appendChild(style);
    // }

    // var cssText = "img{max-width: 100%; height: auto;} #weixin-tip{position: fixed; left:0; top:0; background: rgba(0,0,0,0.8); filter:alpha(opacity=80); width: 100%; height:100%; z-index: 1050;} #weixin-tip p{text-align: center; margin-top: 10%; padding:0 5%;}";
    // if (isWeixin) {
    //     loadHtml();
    //     loadStyleText(cssText);
    // }
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
            document.title = '|ω･) 哎呦~页面不见了~';
            clearTimeout(titleTime);
        } else {
            var link = document.querySelector("link[rel*='icon']") || document.createElement('link');
            link.type = 'image/x-icon';
            link.rel = 'shortcut icon';
            link.href = '/favicon.ico';
            document.getElementsByTagName('head')[0].appendChild(link);
            document.title = '(/≧▽≦)/ 呦吼~肥来啦！';
            titleTime = setTimeout(function() {
                document.title = OriginTitile;
            }, 1000);
        }
    });
</script>
<script src="<?php $this->options->themeUrl('assets/clover.js'); ?>"></script>
<!-- TODO -->
<?php if ($this->is('index') || $this->is('page', 'more')) : ?>
<script src="https://cdn.jsdelivr.net/gh/idealclover/clover/libs/canvas-nest/canvas-nest.min.js"></script>
<?php endif ?>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.15.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/smooth-scroll@16.0.3/dist/smooth-scroll.polyfills.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/highlight.js@9.15.7/lib/highlight.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.1/dist/jquery.fancybox.min.js"></script>
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
    $("p img").each(function(i) {
        if (!this.parentNode.href && $(this).attr("type")!=="memo") {
            $(this).wrap("<a href='" + this.src + "' data-fancybox='fancybox' data-caption='" + this.alt + "'></a>")
        }
    });
    $(document).ready(function() {
        $("[data-fancybox]").fancybox()
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/jquery.cookie@1.4.1/jquery.cookie.min.js"></script>
<script>
    $('.close').click(function( e ){
        e.preventDefault();
        $.cookie('alert-box', 'closed', { path: '/' });
        $('#main').css("margin-top","4.5rem");
    });
    if( $.cookie('alert-box') !== 'closed' ) {
        $('#main').css("margin-top","6.5rem");
        $('.alert').css("display","block");
    }
</script>
<script type="text/javascript">
    var _paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u = "//analytics.idealclover.cn/";
        _paq.push(['setTrackerUrl', u + 'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d = document,
            g = d.createElement('script'),
            s = d.getElementsByTagName('script')[0];
        g.type = 'text/javascript';
        g.async = true;
        g.defer = true;
        g.src = u + 'matomo.js';
        s.parentNode.insertBefore(g, s);
    })();
</script>
</body>

</html>