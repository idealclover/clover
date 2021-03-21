<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
} ?>
<?php $this->need('components/header.php'); ?>

<div class="container col-9" id="main" role="main">
    <div class="row">
        <div class="col-12 col-lg-8">
            <article class="post">
                <h1 class="post-title">
                    <a itemprop="url" class="text-body" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                </h1>
                <p id="post-meta">
                    <i class="fa fa-clock-o"></i> <?php $this->date('Y.m.d'); ?> |
                    <i class="fa fa-tags"></i> <?php $this->category(' '); ?> |
                    <i class="fa fa-thumbs-o-up"></i> <?php AnotherLike_Plugin::theLike($this->cid, false);
                                                        _e(" 赞") ?> |
                    <i class="fa fa-comments-o"></i> <?php $this->commentsNum(_t(' 0 条评论'), _t(' 1 条评论'), _t(' %d 条评论')); ?>
                    <!-- TODO: 输出点赞&浏览数-->
                    <?php if ($this->authorId == $this->user->uid) : ?>
                        <a class="edit-link" href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid; ?>" target="_blank"><?php _e("编辑") ?></a>
                    <?php endif; ?>
                    <!-- TODO: 预计阅读时间-->
                </p>
                <?php if ($this->fields->ENG) : ?>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Language
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="<?php $this->permalink(); ?>">中文</a>
                            <a class="dropdown-item" href="<?php $temp = str_replace($this->cid, $this->fields->ENG, $this->permalink);
                                                            echo str_replace($this->options->siteUrl, "https://en.idealclover.top/", $temp);
                                                            ?>">English</a>
                        </div>
                    </div>
                <?php elseif ($this->fields->CHN) : ?>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Language
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="<?php $this->permalink(); ?>">English</a>
                            <a class="dropdown-item" href="<?php $temp = str_replace($this->cid, $this->fields->CHN, $this->permalink);
                                                            echo str_replace($this->options->siteUrl, "https://idealclover.top/", $temp);
                                                            ?>">简体中文</a>
                        </div>
                    </div>
                <?php endif; ?>
                <hr />
                <?php
                date_default_timezone_set("Asia/Shanghai");
                $created = round((time() - $this->created) / 3600 / 24);
                $updated = round((time() - $this->modified) / 3600 / 24);
                if ($updated >= 60 && $created > 180) {
                    echo '<blockquote>' . sprintf(_("请注意，本文编写于 %d 天前，最后修改于 %d 天前，其中某些信息可能已经过时。"), $created, $updated) . '</blockquote>';
                }
                ?>
                <div class="post-content" itemprop="articleBody">
                    <?php $this->content(); ?>
                </div>
                <blockquote>
                    <p><?php _e('本文链接：'); ?><a style="text-decoration: underline" href="<?php $this->permalink(); ?>"><?php $this->permalink(); ?></a></p>
                    <p><?php _e('本作品由'); ?> <a style="text-decoration: underline" href="https://idealclover.top"><?php _e('idealclover'); ?> </a><?php _e('采用'); ?> <a style="text-decoration: underline" href="https://creativecommons.org/licenses/by-nc-sa/4.0/"><?php _e('知识共享署名-非商业性使用-相同方式共享 4.0 国际许可协议'); ?></a> <?php _e('进行许可,转载请注明出处。'); ?></p>
                </blockquote>
                <p itemprop="keywords" class="tags"><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p>
            </article>

            <ul class="post-near">
                <li><?php _e('上一篇:');
                    $this->thePrev('%s', _t('没有了')); ?></li>
                <li><?php _e('下一篇:');
                    $this->theNext('%s', _t('没有了')); ?></li>
            </ul>
            <?php AnotherLike_Plugin::theLike($this->cid); ?>
            <?php $this->need('components/comments.php'); ?>
        </div><!-- end #main-->
        <?php $this->need('components/sidebar.php'); ?>
    </div>
</div>
<?php $this->need('components/footer.php'); ?>