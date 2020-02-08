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
        <div class="col-lg-3 col-6 h-100">
            <a href="/resume.html">
                <div class="card card-block bg-light d-flex" style="height: 10rem;">
                    <div class="card-body align-items-center d-flex justify-content-center h3">
                        <h5 class="card-title">我的简历</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-6 h-100">
            <a href="/projects.html">
                <div class="card card-block bg-light d-flex" style="height: 10rem;">
                    <div class="card-body align-items-center d-flex justify-content-center h3">
                        <h5 class="card-title">我的项目</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-6 h-100">
            <a href="/notes.html">
                <div class="card card-block bg-light d-flex" style="height: 10rem;">
                    <div class="card-body align-items-center d-flex justify-content-center h3">
                        <h5 class="card-title">我的笔记</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-6 h-100">
            <a href="https://idealclover.cn.quickconnect.cn/mo/sharing/k4mgc7dG8">
                <div class="card card-block bg-light d-flex" style="height: 10rem;">
                    <div class="card-body align-items-center d-flex justify-content-center h3">
                        <h5 class="card-title">我的相册</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-6 h-100">
            <a href="/books.html">
                <div class="card card-block bg-light d-flex" style="height: 10rem;">
                    <div class="card-body align-items-center d-flex justify-content-center h3">
                        <h5 class="card-title">我的阅读</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-6 h-100">
            <a href="/movies.html">
                <div class="card card-block bg-light d-flex" style="height: 10rem;">
                    <div class="card-body align-items-center d-flex justify-content-center h3">
                        <h5 class="card-title">我的观影</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-6 h-100">
            <a href="/anime.html">
                <div class="card card-block bg-light d-flex" style="height: 10rem;">
                    <div class="card-body align-items-center d-flex justify-content-center h3">
                        <h5 class="card-title">我的追番</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-6 h-100">
            <a href="/cross.html">
                <div class="card card-block bg-light d-flex" style="height: 10rem;">
                    <div class="card-body align-items-center d-flex justify-content-center h3">
                        <h5 class="card-title">我的情绪</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div><!-- end #main-->
<?php $this->need('components/footer.php'); ?>