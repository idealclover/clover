<?php

/**
 * 更多
 *
 * @package custom
 */
?>

<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
} ?>
<?php $this->need('components/header.php'); ?>


<div class="container col-10" id="main" role="main">
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="jumbotron">
                <h1>我的简历 / My Resume</h1>
                <p class="lead">一份也许并不算出彩的个人履历。</p>
                <hr class="my-4">
                <a class="btn btn-secondary btn-lg" href="/resume.html" role="button">Learn more</a>
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="jumbotron">
                <h1>我的项目 / My Projects</h1>
                <p class="lead">一些挂在 GitHub 上的小项目。</p>
                <hr class="my-4">
                <a class="btn btn-secondary btn-lg" href="/projects.html" role="button">Learn more</a>
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="jumbotron">
                <h1>我的笔记 / My Notebooks</h1>
                <p class="lead">我的 Obsidian.md 笔记，上面是翠翠的所思所获。</p>
                <hr class="my-4">
                <a class="btn btn-secondary btn-lg" href="https://publish.obsidian.md/idealclover" role="button">Learn more</a>
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="jumbotron">
                <h1>我的相册 / My Album</h1>
                <p class="lead">会记录一些随手拍，不过一般不自拍。</p>
                <hr class="my-4">
                <a class="btn btn-secondary btn-lg" href="https://idealclover.cn.quickconnect.cn/mo/sharing/k4mgc7dG8" role="button">Learn more</a>
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="jumbotron">
                <h1>我的阅读 / My Readings</h1>
                <p class="lead">记录在豆瓣上我都标记了哪些书。</p>
                <hr class="my-4">
                <a class="btn btn-secondary btn-lg" href="/books.html" role="button">Learn more</a>
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="jumbotron">
                <h1>我的观影 / My Movies</h1>
                <p class="lead">记录在豆瓣上我都标记了哪些电影。</p>
                <hr class="my-4">
                <a class="btn btn-secondary btn-lg" href="/movies.html" role="button">Learn more</a>
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="jumbotron">
                <h1>我的追番 / My Animes</h1>
                <p class="lead">记录在 Bilibili 上我都追了哪些番剧。<br />不过最近没什么时间了。</p>
                <hr class="my-4">
                <a class="btn btn-secondary btn-lg" href="/anime.html" role="button">Learn more</a>
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="jumbotron">
                <h1>我的情绪 / Travel time</h1>
                <p class="lead">想必没人看到这里了。<br />这里记录了我的一点个人情绪。</p>
                <hr class="my-4">
                <a class="btn btn-secondary btn-lg" href="/cross.html" role="button">Learn more</a>
            </div>
        </div>
    </div>
    <blockquote class="blockquote text-center text-muted">
        ありがとうございます<br />
        Thanks for your company.<br />
        感谢你的陪伴
    </blockquote>
</div><!-- end #main-->
<?php $this->need('components/footer.php'); ?>