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
                <h5 class="modal-title">提示</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                感谢同意！烦请重新复制 OωO
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">确定</button>
            </div>
        </div>
    </div>
</div>
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
    博客主题 <a target="_blank" rel="noreferrer" href="https://github.com/idealclover/Clover">clover</a> 由 <a target="_blank" href="https://idealclover.top">idealclover</a> 用❤制作
    <br />
    &copy; <?php echo date('Y'); ?>
    <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    Powered by <a target="_blank" rel="noreferrer" href="http://www.typecho.org">Typecho</a><br />
    <div id="span_dt_dt"></div>
</footer>

<?php $this->footer(); ?>

<!-- copyright -->
<?php if (!$this->user->hasLogin()) : ?>
    <script src="<?php $this->options->themeUrl('assets/scripts/copyright.js'); ?>"></script>
<?php endif; ?>
<!-- fuckweixin 计划有变，先不fuck了 -->
<!-- <script src="<?php $this->options->themeUrl('assets/scripts/fuckweixin.js'); ?>"></script> -->
<?php if ($this->is('page', 'more')) : ?>
    <script src="<?php $this->options->themeUrl('libs/canvas-nest/canvas-nest.min.js'); ?>"></script>
<?php endif ?>

<!-- <script src="<?php $this->options->themeUrl('assets/scripts/googletranslate.js'); ?>"></script> -->
<script crossorigin="anonymous" integrity="sha512-lVcnjCLGjJTaZU55wD7H3f8SJVi6VV5cQRcmGuYcyIY607N/rzZGEl90lNgsiEhKygATryG/i6e5u2moDFs5kQ==" src="https://lib.baomitu.com/vanilla-lazyload/17.3.1/lazyload.min.js"></script>
<script crossorigin="anonymous" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" src="https://lib.baomitu.com/popper.js/1.16.1/umd/popper.min.js"></script>
<script crossorigin="anonymous" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" src="https://lib.baomitu.com/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script crossorigin="anonymous" integrity="sha384-1Jq1gXc0sLyvpP1iLt5QoryVCyJkBLyfNkaeECRYRX4u1Nx7gT547w5/5YZ1b5DG" src="https://lib.baomitu.com/smooth-scroll/16.1.3/smooth-scroll.polyfills.min.js"></script>
<script crossorigin="anonymous" integrity="sha384-Zm+UU4tdcfAm29vg+MTbfu//q5B/lInMbMCr4T8c9rQFyOv6PlfQYpB5wItcXWe7" src="https://lib.baomitu.com/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script crossorigin="anonymous" integrity="sha512-tL84mD+FR70jI7X8vYj5AfRqe0EifOaFUapjt1KvDaPLHgTlUZ2gQL/Tzvvn8HXuQm9oHYShJpNFdyJmH2yHrw==" src="https://lib.baomitu.com/highlight.js/10.7.3/highlight.min.js"></script>
<script crossorigin="anonymous" integrity="sha384-HeUHqi0nVsPUm/E0ss7OfnIV/yD96JWB8ehZvUuoVax9DpNHL17jj9pdfXHzqDxm" src="https://lib.baomitu.com/pangu/4.0.7/pangu.min.js"></script>
<script crossorigin="anonymous" integrity="sha512-PIisRT8mFfdxx99gMs7WAY5Gp+CtjYYxKvF93w8yWAvX548UBNADHu7Qkavgr6yRG+asocqfuk5crjNd5z9s6Q==" src="https://lib.baomitu.com/clipboard.js/2.0.10/clipboard.min.js"></script>
<script crossorigin="anonymous" integrity="sha384-uQPAXWjjvZGmVjKnobPRQOCEJ0rkCNRXW1GBUsJkjw1w0K7TxLH6Z3zMX7wtx+Lf" src="https://lib.baomitu.com/jquery-migrate/1.4.1/jquery-migrate.min.js"></script>
<script crossorigin="anonymous" integrity="sha384-bc70Hu1TZ2OROJD7JbkXhiny4jZbnfn6L3lm0mCNi1KD8rRE4S0ixk5tH1yZKDJF" src="https://lib.baomitu.com/jquery-ui-bootstrap/0.5pre/assets/js/jquery-ui-1.10.0.custom.min.js"></script>

<script src="<?php $this->options->themeUrl('assets/scripts/main.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('libs/mouse-click/mouse-click.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('libs/tocify/jquery.tocify.min.js'); ?>"></script>

</body>

</html>