<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
} ?>
<?php function threadedComments($comments, $options)
{
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }

    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
    ?>

    <li id="<?php $comments->theId(); ?>">
        <?php $comments->gravatar('45', $default = Helper::options()->themeUrl . '/assets/default.jpg'); ?>
        <div class="moment-meta">
            <span class="comment-author"><?php $comments->author(); ?></span>
            <time class="comment-time"><?php $comments->date('y.m.d'); ?></time>
            <span class="comment-reply"><?php $comments->reply(); ?></span>
        </div>
        <div class="comment-content">
            <?php $comments->content(); ?>
        </div>
        <?php if ($comments->children) : ?>
            <div class="comment-children">
                <?php $comments->threadedComments($options); ?>
            </div>
        <?php endif; ?>
    </li>
<?php } ?>
<section id="comments" class="post-comments">
    <h3><?php $this->commentsNum(_t('没有评论 T^T'), _t('只有一条评论 QAQ'), _t('已有 %d 条评论')); ?></h3>
    <?php $this->comments()->to($comments); ?>
    <?php if ($this->allow('comment')) : ?>
        <div id="<?php $this->respondId(); ?>" class="respond">
            <span class="cancel-comment-reply">
                <?php $comments->cancelReply(); ?>
            </span>
            <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
                <div class="row">
                    <?php if ($this->user->hasLogin()) : ?>
                        <p class="form-group col-12">
                            <?php _e('已登录: '); ?>
                            <a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>.
                            <a href="<?php $this->options->logoutUrl(); ?>" title="登出"><?php _e('登出'); ?>&raquo;
                            </a>
                        </p>
                    <?php else : ?>
                        <p class="col-sm col-lg-4">
                            <input class="form-control" type="text" name="author" id="author" placeholder="<?php _e('昵称 *：'); ?>" value="<?php $this->remember('author'); ?>" required="">
                        </p>
                        <p class="col-sm col-lg-4">
                            <input class="form-control" type="email" name="mail" id="mail" placeholder="<?php _e('电邮 *：'); ?>" value="<?php $this->remember('mail'); ?>" <?php if ($this->options->commentsRequireMail) : ?> required<?php endif; ?>>
                        </p>
                        <p class="col-sm col-lg-4">
                            <input class="form-control" type="url" name="url" id="url" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>" <?php if ($this->options->commentsRequireURL) : ?> required<?php endif; ?>>
                        </p>
                    <?php endif; ?>
                    <div class="col-12">
                        <p>
                            <textarea rows="3" id="comment-area" name="text" class="form-control OwO-textarea" id="textarea" placeholder="<?php _e('快来评论吧 (*≧ω≦)ﾉ'); ?>" required=""><?php $this->remember('text'); ?></textarea>
                            <div class="OwO"></div>
                        </p>
                        <p>
                            <button type="submit" class="btn btn-dark"><?php _e('写好了~'); ?></button>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    <?php endif; ?>
    <?php if ($comments->have()) : ?>
        <?php $comments->listComments(); ?>
        <?php $comments->pageNav(_t('&laquo; 前一页'), _t('后一页 &raquo;')); ?>
    <?php endif; ?>
</section>
<script src="<?php $this->options->themeUrl('libs/OwO/OwO.min.js'); ?>"></script>
<script>
    var OwO_demo = new OwO({
        logo: 'OωO表情',
        container: document.getElementsByClassName('OwO')[0],
        target: document.getElementsByClassName('OwO-textarea')[0],
        api: '<?php $this->options->themeUrl('libs/OwO/OwO.json'); ?>',
        position: 'down',
        width: '100%',
        maxHeight: '250px'
    });
</script>