<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
} ?>

<?php $this->need('components/header.php'); ?>
<?php $db = Typecho_Db::get(); ?>

<div class="container col-10 col-lg-9" id="main">

    <!-- <div class="col-12" id="title">
        <h1 class="archive-title">
            <?php // $this->archiveTitle(array(
            // 'category' => _t('%s'),
            // 'search'   => _t('包含关键字 %s 的文章'),
            // 'tag'      => _t('标签 %s 下的文章'),
            // 'author'   => _t('%s 发布的文章')
            // ));
            ?>
        </h1>
        <hr>
    </div> -->

    <div class="row">
        <div class="col-12 col-lg-8">
            <?php if ($this->have()) : ?>
                <?php while ($this->next()) : ?>
                    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
                        <h1 class="post-title" itemprop="name headline">
                            <a itemprop="url" class="text-body" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                        </h1>
                        <p id="post-meta">
                            <i class="fa fa-clock-o"></i> <?php $this->date('Y.m.d'); ?> |
                            <i class="fa fa-tags"></i> <?php $this->category(','); ?> |
                            <i class="fa fa-eye"></i> <?php echo ($db->fetchAll($db->select('views')->from('table.contents')->where('table.contents.cid = ?', $this->cid))[0]['views']);
                                                        _e(" 浏览") ?> |
                            <i class="fa fa-thumbs-o-up"></i> <?php AnotherLike_Plugin::theLike($this->cid, false); ?> <?php _e("赞") ?> |
                            <i class="fa fa-comments-o"></i> <?php $this->commentsNum(_t(' 0 条评论'), _t(' 1 条评论'), _t(' %d 条评论')); ?>
                            <!-- TODO: 输出点赞&浏览数-->
                        </p>
                        <div class="post-content" itemprop="articleBody">
                            <?php
                            $c = $this->excerpt;
                            $c = preg_replace("/<[img|IMG].*?src=[\'\"](.*?(?:[\.gif|\.jpg|\.jpeg|\.png|\.tiff|\.bmp]))[\'|\"].*?[\/]?>/", "", $c);
                            if (preg_match('/<pre>/', $c)) {
                                echo $c, '</code></pre>';
                            } else {
                                echo $c;
                            }
                            echo '<p class="more"><a href="', $this->permalink(), '" title="', $this->title(), '">查看更多 -></a></p>';
                            ?>
                        </div>
                    </article>
                    <hr />
                <?php endwhile; ?>
            <?php else : ?>
                <article class="post">
                    <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
                </article>
            <?php endif; ?>
            <?php $this->pageNav(_t('&laquo; 前一页'), _t('后一页 &raquo;')); ?>
        </div><!-- end #main -->
        <?php $this->need('components/sidebar.php'); ?>
    </div><!-- end #row -->
</div><!-- end #container -->

<?php $this->need('components/footer.php'); ?>