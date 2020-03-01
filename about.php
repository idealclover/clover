<?php

/**
 * 关于
 *
 * @package custom
 */
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
} ?>
<?php $this->need('components/header.php'); ?>

<style>
    .linklist {
        padding-top: 1rem;
        padding-bottom: 1rem;
        margin: 0 auto;
    }

    .linkcard {
        box-shadow: 0 0 4px rgba(0, 0, 0, 0.3);
        transition: ease all 0.3s;
        overflow: hidden;
        background: #f7fbf7;
        margin: 7.5px 7.5px 7.5px 7.5px;
        width: 15vh;
    }

    .linkimg {
        object-fit: cover;
        height: 15vh !important;
        width: 15vh !important;
    }

    .linktitle {
        margin: 8px 0 !important;
        overflow: hidden !important;
        text-overflow: ellipsis !important;
        white-space: nowrap !important;
        text-align: center !important;
        font-weight: 600 !important;
        border: none !important;
    }
</style>

<div class="container col-10" id="main" role="main">
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
                <?php if ($this->options->siteUrl == "https://idealclover.top/") : ?>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Language
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="<?php $this->permalink(); ?>">中文</a>
                            <a class="dropdown-item" href="<?php echo str_replace($this->options->siteUrl, "https://en.idealclover.top/", $this->permalink); ?>">English</a>
                        </div>
                    </div>
                <?php elseif ($this->options->siteUrl == "https://en.idealclover.top/") : ?>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Language
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="<?php $this->permalink(); ?>">English</a>
                            <a class="dropdown-item" href="<?php echo str_replace($this->options->siteUrl, "https://idealclover.top/", $this->permalink); ?>">简体中文</a>
                        </div>
                    </div>
                <?php endif; ?>
                <hr />
                <div class="post-content" itemprop="articleBody">
                    <?php $this->content(); ?>
                </div>
            </article>
            <?php AnotherLike_Plugin::theLike(); ?>
            <?php $this->need('components/comments.php'); ?>
        </div>
        <?php $this->need('components/sidebar.php'); ?>
    </div>
</div><!-- end #main-->
<?php $this->need('components/footer.php'); ?>