<?php if ( ! defined( '__TYPECHO_ROOT_DIR__' ) ) {
	exit;
} ?>

<footer class="footer bottom" role="contentinfo">
    <!--TODO: 置顶-->
    <a class="turn-up" href="#"><i class="fa fa-rocket"></i></a>
    &copy; <?php echo date( 'Y' ); ?> <a
            href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
	<?php _e( '由 <a href="http://www.typecho.org">Typecho</a> 强力驱动' ); ?>.
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
