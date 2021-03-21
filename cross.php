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
    // $comments->content = crossPost($comments);
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
        <?php $comments->gravatar('45', $default = Helper::options()->themeUrl . '/assets/imgs/default.jpg'); ?>
        <div class="moment-meta">
            <span class="moment-author"><?php $comments->author(); ?></span>
            <time class="moment-time"><?php $comments->date('y.m.d H:m'); ?></time>
        </div>

        <div class="moment-content">
            <?php $comments->content(); ?>
            <span class="comment-reply"><?php $comments->reply('悄悄留言'); ?></span>
        </div>
    </li>
<?php } ?>
<div class="container col-9" id="main" role="main">
    <div class="row">
        <div class="col-12 col-lg-8">
            <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
                <section>
                    <h1 class="page-title" itemprop="name headline">
                        <a itemprop="url" class="text-body" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
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
            <?php $this->comments()->to($comments); ?>

            <section id="comments" class="post-comments">
                <div <?php if (!$this->user->hasLogin()) : ?>style="display:none;" <?php endif; ?>>
                    <div id="<?php $this->respondId(); ?>" class="respond">
                        <hr />

                        <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
                            <div class="reply row">
                                <?php if ($this->user->hasLogin()) : ?>
                                    <div class="form-group col-12">
                                        <?php _e('已登录: '); ?>
                                        <a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>.
                                        <a href="<?php $this->options->logoutUrl(); ?>" title="登出"><?php _e('登出'); ?>&raquo;
                                        </a>
                                    </div>
                                <?php else : ?>
                                    <div class="reply-info col-sm col-lg-4">
                                        <input class="form-control" type="text" name="author" id="author" placeholder="<?php _e('昵称 *：'); ?>" value="<?php $this->remember('author'); ?>" required="">
                                    </div>
                                    <div class="reply-info col-sm col-lg-4">
                                        <input class="form-control" type="email" name="mail" id="mail" placeholder="<?php _e('电邮 *：'); ?>" value="<?php $this->remember('mail'); ?>" <?php if ($this->options->commentsRequireMail) : ?> required<?php endif; ?>>
                                    </div>
                                    <div class="reply-info col-sm col-lg-4">
                                        <input class="form-control" type="url" name="url" id="url" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>" <?php if ($this->options->commentsRequireURL) : ?> required<?php endif; ?>>
                                    </div>
                                <?php endif; ?>
                                <div class="col-12">
                                    <textarea rows="3" id="comment-area" name="text" class="form-control OwO-textarea" id="textarea" placeholder="<?php if ($this->user->hasLogin()) _e('嘿ww开心点好吗~>v<');
                                                                                                                                                    else _e('您的留言将会悄悄发送给翠翠，而不会在本页面展示'); ?>" required=""><?php $this->remember('text'); ?></textarea>
                                    <div class="OwO"></div>
                                    <button type="submit" class="btn btn-dark"><?php _e('写好了~'); ?></button>
                                    <span class="cancel-comment-reply col-12">
                                        <?php $comments->cancelReply("取消留言"); ?>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <hr />
                <ul class="nav nav-tabs nav-dark" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-moment-tab" data-toggle="pill" href="#pills-moment" role="tab" aria-controls="pills-moment" aria-selected="true"><?php _e("我的动态") ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-share-tab" data-toggle="pill" href="#pills-share" role="tab" aria-controls="pills-share" aria-selected="false"><?php _e("我的分享") ?></a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-moment" role="tabpanel" aria-labelledby="pills-moment-tab">
                        <?php if ($comments->have()) : ?>
                            <?php $comments->listComments(); ?>
                            <?php $comments->pageNav(_t('&laquo; 前一页'), _t('后一页 &raquo;')); ?>
                        <?php endif; ?>
                    </div>
                    <div class="tab-pane fade" id="pills-share" role="tabpanel" aria-labelledby="pills-share-tab">
                        <?php
                        $rss = new DOMDocument();
                        $rss->load('https://wallabag.idealclover.cn/feed/idealclover/k2FPz43Z4V4hw1/starred');
                        $feeds = array();
                        foreach ($rss->getElementsByTagName('entry') as $node) {
                            $item = array(
                                'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                                // 'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
                                'link' => $node->getElementsByTagName('link')->item(1)->nodeValue,
                                'date' => $node->getElementsByTagName('published')->item(0)->nodeValue,
                            );
                            array_push($feeds, $item);
                        }
                        ?>
                        <ol class="comment-list">
                            <?php foreach ($feeds as $feed) : ?>
                                <li class="moment" id="<?php $comments->theId(); ?>">
                                    <img class="avatar" src="https://gravatar.loli.net/avatar/a95161b3602abef9f540e7fc6c8cb53a?s=45&amp;r=G&amp;d=https://127.0.0.1/blog/usr/themes/Clover/assets/imgs/default.jpg" alt="clover" width="45" height="45">
                                    <div class="moment-meta">
                                        <span class="moment-author">idealclover</span>
                                        <time class="moment-time"><?php echo (date('y.m.d h:m', strtotime($feed['date']))); ?></time>
                                        <p><strong><a href="<?php echo ($feed['link']) ?>" style="text-decoration: underline" target="_blank" title="<?php echo ($feed['title']) ?>"><i class="fa fa-link" aria-hidden="true"></i> <?php echo ($feed['title']) ?></a></strong><br />
                                </li>
                            <?php endforeach; ?>
                        </ol>
                    </div>
                </div>
            </section>
        </div>
        <?php $this->need('components/sidebar.php'); ?>
    </div>
</div><!-- end #main-->
<script src="https://cdn.jsdelivr.net/npm/owo@1.0.2/dist/OwO.min.js"></script>
<script>
    var OwO_demo = new OwO({
        logo: 'OωO表情',
        container: document.getElementsByClassName('OwO')[0],
        target: document.getElementsByClassName('OwO-textarea')[0],
        // api: 'https://image.idealclover.cn/blog/assets/OwO/OwO.json',
        api: '<?php $this->options->themeUrl('libs/OwO/OwO.json'); ?>',
        position: 'down',
        width: '100%',
        maxHeight: '250px'
    });
</script>
<?php $this->need('components/footer.php'); ?>