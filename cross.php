<?php
/**
 * Cross
 *
 * @package custom
 */
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
} ?>
<?php $this->need('components/header.php'); ?>

<?php

$GLOBALS['isLogin'] = $this->user->hasLogin();

function threadedComments($comments, $options)
{
    // echo(substr($comments->content, 10,3));
    if (strpos($comments->content, "<p>[secret]") !== false) {
        if (!$GLOBALS['isLogin']) {
            return;
        } else {
            $comments->content = preg_replace("/\[secret\](<br>)?/", '', $comments->content);
        }
    }

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
    <li class="moment" id="<?php $comments->theId(); ?>">
        <?php $comments->gravatar('45', $default = Helper::options()->themeUrl . '/assets/default.jpg'); ?>
        <div class="moment-meta">
            <span class="moment-author"><?php $comments->author(); ?></span>
            <time class="moment-time"><?php $comments->date('m月d日'); ?></time>
            <?php $comments->content(); ?>
        </div>

        <div class="moment-content">
        </div>
        <?php if ($comments->children) : ?>
            <div class="comment-children">
                <?php $comments->threadedComments($options); ?>
            </div>
        <?php endif; ?>
    </li>
<?php } ?>
<div class="container col-10" id="main" role="main">
    <div class="row">
        <div class="col-12 col-lg-8">
            <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
                <section>
                    <h1 class="page-title" itemprop="name headline">
                        <a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                    </h1>
                    <?php if ($this->authorId == $this->user->uid) : ?>
                        <a class="edit-link" href="<?php $this->options->adminUrl(); ?>write-page.php?cid=<?php echo $this->cid; ?>" target="_blank"><?php _e("编辑") ?></a>
                    <?php endif; ?>
                </section>
                <hr />
                <div class="post-content" itemprop="articleBody">
                    <?php $this->content(); ?>
                </div>
            </article>
            <section id="comments" class="post-comments">
                <hr />
                <?php $this->comments()->to($comments); ?>
                <?php if ($this->user->hasLogin()) : ?>
                    <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
                        <div class="row">
                            <p class="form-group col-12">
                                <?php _e('已登录: '); ?>
                                <a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>.
                                <a href="<?php $this->options->logoutUrl(); ?>" title="登出"><?php _e('登出'); ?>&raquo;
                                </a>
                            </p>
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
                <?php endif; ?>

                <?php if ($comments->have()) : ?>
                    <?php $comments->listComments(); ?>
                    <?php $comments->pageNav(_t('&laquo; 前一页'), _t('后一页 &raquo;')); ?>
                <?php endif; ?>
            </section>
        </div>
        <?php $this->need('components/sidebar.php'); ?>
    </div>
</div><!-- end #main-->
<?php $this->need('components/footer.php'); ?>