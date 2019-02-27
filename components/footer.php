<?php if ( ! defined( '__TYPECHO_ROOT_DIR__' ) ) {
	exit;
} ?>

<footer class="footer bottom" role="contentinfo">
	<!--置顶按钮-->
    <a class="turn-up" href="#"><i class="fa fa-rocket"></i></a>
	<?php _e("📝除非特别注明，本站所有文章在BY CC-SA 4.0协议下授权") ?>
	<br />
	Theme <a href="https://github.com/idealclover/Clover">Clover</a> made with ❤ by <a href="https://idealclover.top">idealclover</a>
	<br />
    &copy; <?php echo date( 'Y' ); ?>
	<a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
	<?php _e( 'Powered by <a href="http://www.typecho.org">Typecho</a>' ); ?>.
</footer>

<?php $this->footer(); ?>
<!--<script type="text/javascript" color="0,0,255" opacity='0.7' zIndex="-2" count="99" src="../libs/canvas-nest.js"></script>-->
<!--<script type="text/javascript" src="../libs/canvas-nest.js"></script>-->
<script src="<?php $this->options->themeUrl( 'assets/clover.js' ); ?>"></script>
<script src="<?php $this->options->themeUrl( 'libs/canvas-nest/canvas-nest.min.js' ); ?>"></script>
<!--<script src="https://cdn.bootcss.com/canvas-nest.js/2.0.4/canvas-nest.js"></script>-->
<script src="https://cdn.bootcss.com/smooth-scroll/12.1.3/js/smooth-scroll.min.js"></script>
<script src="https://cdn.bootcss.com/highlight.js/9.14.2/highlight.min.js"></script>
<script>var scroll = new SmoothScroll('a.turn-up, .article-list a', {offset: 100});</script>
<script>
    hljs.initHighlightingOnLoad();
</script>
<script src="https://cdn.bootcss.com/smooth-scroll/12.1.3/js/smooth-scroll.min.js"></script>
<script>var scroll = new SmoothScroll('a.turn-up, .article-list a', {offset: 100});</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112910356-3"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-112910356-3');
    gtag('set', {'user_id': 'USER_ID'});
</script>
<script>
    //function is_weixin() {
    //    var ua = navigator.userAgent.toLowerCase();
    //    if (ua.match(/MicroMessenger/i) == "micromessenger") {
    //        return true;
    //    } else {
    //        return false;
    //    }
    //}
    //var isWeixin = is_weixin();
    //var winHeight = typeof window.innerHeight != 'undefined' ? window.innerHeight : document.documentElement.clientHeight;
    //function loadHtml(){
    //    var div = document.createElement('div');
    //    div.id = 'weixin-tip';
    //    div.innerHTML = '<p><img src="<?php //$this->options->themeUrl( 'assets/fuckweixin' ); ?>//" alt="微信打开"/></p>';
    //     document.body.appendChild(div);
    // }
    //
    // function loadStyleText(cssText) {
    //     var style = document.createElement('style');
    //     style.rel = 'stylesheet';
    //     style.type = 'text/css';
    //     try {
    //         style.appendChild(document.createTextNode(cssText));
    //     } catch (e) {
    //         style.styleSheet.cssText = cssText; //ie9以下
    //     }
    //     var head=document.getElementsByTagName("head")[0]; //head标签之间加上style样式
    //     head.appendChild(style);
    // }
    // var cssText = "#weixin-tip{position: fixed; left:0; top:0; background: rgba(0,0,0,0.8); filter:alpha(opacity=80); width: 100%; height:100%; z-index: 100;} #weixin-tip p{text-align: center; margin-top: 10%; padding:0 5%;}";
    // if(isWeixin){
    //     loadHtml();
    //     loadStyleText(cssText);
    // }
</script>
</body>
</html>
