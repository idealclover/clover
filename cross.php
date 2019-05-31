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
    <li class="moment" id="<?php $comments->theId(); ?>">
        <?php $comments->gravatar('45', $default = Helper::options()->themeUrl . '/assets/default.jpg'); ?>
        <div class="moment-meta">
            <span class="moment-author"><?php $comments->author(); ?></span>
            <time class="moment-time"><?php $comments->date('m月d日'); ?></time>
            <!--	        --><?php
                                ?>
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