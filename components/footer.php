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
    <div class="dark-mode custom-control custom-switch">
        <label class="dark-mode-label custom-control-label" for="darkSwitch"><i class="fa fa-moon-o" style="height: 30px; width: 30px;"></i></label>
        <input type="checkbox" class="custom-control-input" id="darkSwitch" />
    </div>
    <div class="row justify-content-center" style="margin: 0">
        <div>📝除非特别注明，</div>
        <div>本站所有文章在 <a target="_blank" href="https://creativecommons.org/licenses/by-nc-sa/4.0/deed.zh">CC BY-NC-SA 4.0</a> 协议下授权</div>
    </div>
    博客主题 <a target="_blank" href="https://github.com/idealclover/Clover">clover</a> 由 <a target="_blank" href="https://idealclover.top">idealclover</a> 本人用❤制作
    <br />
    &copy; <?php echo date('Y'); ?>
    <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    Powered by <a target="_blank" href="http://www.typecho.org">Typecho</a><br />
    <div id="span_dt_dt"></div>
    <?php if (!$this->is('index')) : ?>
        <div>
            <a href="https://t.me/idealcloverchannel" style="text-decoration: none" target="_blank">
                <img src="https://img.shields.io/badge/dynamic/json?label=Telegram&suffix=%20Subscribers&query=%24.data.totalSubs&url=https%3a%2f%2fapi.spencerwoo.com%2fsubstats%2f%3fsource%3dtelegram%26queryKey%3didealcloverchannel&color=2ca5e0&logo=telegram&longCache=true">
            </a>
        </div>
        <div>
            <a href="https://idealclover.top/feed" style="text-decoration: none" target="_blank">
                <img src="https://img.shields.io/badge/dynamic/json?color=ffa500&label=RSS%20Feed&suffix=%20Subscribers&query=%24.data.totalSubs&url=https%3A%2F%2Fapi.spencerwoo.com%2Fsubstats%2F%3Fsource%3Dinoreader%257Cfeedly%26queryKey%3Dhttps%3A%2F%2Fidealclover.top%2Ffeed&logo=rss&longCache=true">
            </a>
        </div>
        <div class="shield">
            <a href="https://mailchi.mp/7f28311041bc/idealclover" style="text-decoration: none" target="_blank">
                <img src="https://img.shields.io/badge/dynamic/json?label=Email&suffix=%20Subscribers&query=%24.totalSubs&url=https%3a%2f%2fmailchimp.idealclover.workers.dev&color=168de2&logo=mail.ru&longCache=true">
            </a>
        </div>
    <?php endif ?>
</footer>

<?php $this->footer(); ?>

<!-- copyright -->
<?php if (!$this->user->hasLogin()) : ?>
    <script src="<?php $this->options->themeUrl('assets/scripts/copyright.js'); ?>"></script>
<?php endif; ?>
<!-- fuckweixin -->
<script src="<?php $this->options->themeUrl('assets/scripts/fuckweixin.js'); ?>"></script>
<?php if ($this->is('index') || $this->is('page', 'more')) : ?>
    <script src="https://cdn.jsdelivr.net/gh/idealclover/clover/libs/canvas-nest/canvas-nest.min.js"></script>
<?php endif ?>
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
</body>

</html>