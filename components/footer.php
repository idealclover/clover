<?php if ( ! defined( '__TYPECHO_ROOT_DIR__' ) ) {
	exit;
} ?>

<footer class="footer bottom" role="contentinfo">
	<!--置顶按钮-->
    <a class="turn-up" href="#"><i class="fa fa-rocket"></i></a>
	📝除非特别注明，本站所有文章在BY CC-SA 4.0协议下授权
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
<script>var scroll = new SmoothScroll('a.turn-up, .article-list a', {offset: 100});</script>

</body>
</html>
