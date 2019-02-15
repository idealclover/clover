<?php if ( ! defined( '__TYPECHO_ROOT_DIR__' ) ) {
	exit;
} ?>
<?php $this->need( 'components/header.php' ); ?>

<div class="container col-lg-8 col-10" id="main" role="main">
    <div class="row">
        <div class="col-12 col-lg-8">
            <article class="post">
                <h1 class="post-title">
                    <a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                </h1>
                <p id="post-meta">
                    <i class="fa fa-clock-o"></i> <?php $this->date( 'Y.m.d' ); ?> |
                    <i class="fa fa-tags"></i> <?php $this->category( 'Y.m.d' ); ?> |
                    <i class="fa fa-comments-o"></i> <?php $this->commentsNum( ' 0 条评论', ' 1 条评论', ' %d 条评论' ); ?>
                    <!-- TODO: 输出点赞&浏览数-->
	                <?php if($this->authorId == $this->user->uid): ?>
                        <a class="edit-link" href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid;?>" target="_blank">编辑</a>
	                <?php endif; ?>
                    <!-- TODO: 预计阅读时间-->
                    <!-- 预计阅读时间：--><?php //mb_strlen($this->text(),'UTF-8'); ?>
                </p>
                <hr />
                <div class="post-content" itemprop="articleBody">
					<?php $this->content(); ?>
                </div>
                <p itemprop="keywords"
                   class="tags"><?php _e( '标签: ' ); ?><?php $this->tags( ', ', true, 'none' ); ?></p>
            </article>

            <ul class="post-near">
                <li>上一篇: <?php $this->thePrev( '%s', '没有了' ); ?></li>
                <li>下一篇: <?php $this->theNext( '%s', '没有了' ); ?></li>
            </ul>
	        <?php AnotherLike_Plugin::theLike(); ?>
	        <?php $this->need( 'components/comments.php' ); ?>
        </div><!-- end #main-->
	    <?php $this->need('components/sidebar.php'); ?>
    </div>
</div>
<!---->
<?php $this->need( 'components/footer.php' ); ?>
