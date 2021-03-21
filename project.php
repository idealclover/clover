<?php

/**
 * 项目列表
 *
 * @package custom
 */
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
} ?>
<?php $this->need('components/header.php'); ?>

<style>
    .github-badge,
    .github-btn {
        margin-bottom: 0.5rem
    }
</style>

<div class="container col-9" id="main" role="main">
    <div class="row">
        <div class="col-12 col-lg-8">
            <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
                <section>
                    <h1 class="page-title" itemprop="name headline">
                        <a class="text-body" itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                    </h1>
                    <?php if ($this->authorId == $this->user->uid) : ?>
                        <a class="edit-link" href="<?php $this->options->adminUrl(); ?>write-page.php?cid=<?php echo $this->cid; ?>" target="_blank" role="button"><?php _e("编辑") ?></a>
                    <?php endif; ?>
                </section>
                <hr />
                <div class="post-content" itemprop="articleBody">
                    <?php $this->content(); ?>
                </div>
            </article>
            <div class="row">
                <div class="col-12">
                    <div class="jumbotron">
                        <h1>idealclover</h1>
                        <p>
                            <img class="github-badge" src="https://img.shields.io/badge/dynamic/json?label=Stars&query=%24.stars&url=https%3A%2F%2Fgithub-star-counter.herokuapp.com%2Fuser%2Fidealclover&logo=github&style=for-the-badge" />
                            <img class="github-badge" src="https://img.shields.io/badge/dynamic/json?label=Forks&query=%24.forks&url=https%3A%2F%2Fgithub-star-counter.herokuapp.com%2Fuser%2Fidealclover&logo=github&style=for-the-badge" />
                            <img class="github-badge" src="https://img.shields.io/badge/dynamic/json?label=Followers&query=%24.followers&url=https%3A%2F%2Fapi.github.com%2Fusers%2Fidealclover&style=for-the-badge&logo=github" />
                        </p>
                        <p class="lead">
                            时不时搞一点乱七八糟的小项目<br />
                            并没有什么技术力的产品经理
                        </p>
                        <hr class="my-4">
                        <a class="btn btn-secondary github-btn" href="https://github.com/idealclover" target="_blank" role="button">我的 GitHub 地址 <i class="fa fa-external-link" aria-hidden="true"></i></a>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">我要戴口罩</h5>
                            <p class="card-text">
                                <img class="github-badge" src="https://img.shields.io/github/stars/idealclover/Wear-A-Mask.svg?logo=github&style=for-the-badge" />
                                <img class="github-badge" src="https://img.shields.io/github/forks/idealclover/Wear-A-Mask.svg?logo=github&style=for-the-badge" /><br />
                                为你的头像加上口罩 微信搜索“我要戴口罩”<br />
                                2020 COVID 疫情期间累计服务 80w+ 用户
                            </p>
                            <a class="btn btn-outline-dark btn-sm github-btn" href="https://github.com/idealclover/Wear-A-Mask" target="_blank" role="button">GitHub 地址 <i class="fa fa-external-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">南哪课表</h5>
                            <p class="card-text">
                                <img class="github-badge" src="https://img.shields.io/github/stars/idealclover/NJU-Class-Shedule-Android.svg?logo=github&style=for-the-badge" />
                                <img class="github-badge" src="https://img.shields.io/github/stars/idealclover/NJU-Class-Shedule-Flutter.svg?logo=github&style=for-the-badge" /><br />
                                为南京大学同学定制的课程表（Android & iOS）<br />
                                可以自动导入南京大学教务处的课程<br />
                                提供简洁的页面与 UI，替代臃肿的某课程表与某格子<br />
                                since 2018，累计服务 2w+ 南大伙伴
                            </p>
                            <a class="btn btn-outline-dark btn-sm github-btn" href="https://github.com/idealclover/NJU-Class-Shedule-Flutter" target="_blank" role="button">GitHub 地址 <i class="fa fa-external-link" aria-hidden="true"></i></a>
                            <a class="btn btn-outline-dark btn-sm github-btn" href="https://m3w.cn/nnkbgkd" target="_blank" role="button">直接使用 <i class="fa fa-external-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Easy-to-RSS</h5>
                            <p class="card-text">
                                <img class="github-badge" src="https://img.shields.io/github/stars/idealclover/Easy-to-RSS.svg?logo=github&style=for-the-badge" />
                                <img class="github-badge" src="https://img.shields.io/chrome-web-store/stars/hbcmpkcpbnecinpngdnfbnknfkdpdfli.svg?logo=google%20chrome&style=for-the-badge" />
                                <img class="github-badge" src="https://img.shields.io/chrome-web-store/users/hbcmpkcpbnecinpngdnfbnknfkdpdfli.svg?logo=google%20chrome&style=for-the-badge" /><br />
                                一键式发现当前网页RSS的 chrome/firefox extension<br />
                                与RSSHub联动并支持更多网页<br />
                            </p>
                            <a class="btn btn-outline-dark btn-sm github-btn" href="https://github.com/idealclover/easy-to-rss" target="_blank" role="button">GitHub 地址 <i class="fa fa-external-link" aria-hidden="true"></i></a>
                            <a class="btn btn-outline-dark btn-sm github-btn" href="https://chrome.google.com/webstore/detail/easy-to-rss/hbcmpkcpbnecinpngdnfbnknfkdpdfli" target="_blank" role="button">Chrome 商店地址 <i class="fa fa-external-link" aria-hidden="true"></i></a>
                            <a class="btn btn-outline-dark btn-sm github-btn" href="https://github.com/diygod/rsshub" target="_blank" role="button">RSSHub <i class="fa fa-external-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">南哪指南</h5>
                            <p class="card-text">
                                <img class="github-badge" src="https://img.shields.io/github/stars/idealclover/awesome-nju.svg?logo=github&style=for-the-badge" />
                                <img class="github-badge" src="https://img.shields.io/github/forks/idealclover/awesome-nju.svg?logo=github&style=for-the-badge" /><br />
                                南哪大学网址导航<br />
                                适配手机端与电脑端的南大人浏览器主页
                            </p>
                            <a class="btn btn-outline-dark btn-sm github-btn" href="https://nju.today" target="_blank" role="button">在线访问 <i class="fa fa-external-link" aria-hidden="true"></i></a>
                            <a class="btn btn-outline-dark btn-sm github-btn" href="https://github.com/idealclover/awesome-nju" target="_blank" role="button">GitHub 地址 <i class="fa fa-external-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">UniTypecho</h5>
                            <p class="card-text">
                                <img class="github-badge" src="https://img.shields.io/github/stars/idealclover/UniTypecho.svg?logo=github&style=for-the-badge" />
                                <img class="github-badge" src="https://img.shields.io/github/forks/idealclover/UniTypecho.svg?logo=github&style=for-the-badge" /><br />
                                多平台 Typecho 移动应用解决方案<br />
                                将 Typecho 博客打包为小程序/APP
                            </p>
                            <a class="btn btn-outline-dark btn-sm github-btn" href="https://github.com/idealclover/UniTypecho" target="_blank" role="button">GitHub 地址 <i class="fa fa-external-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Love Gift</h5>
                            <p class="card-text">
                                <img class="github-badge" src="https://img.shields.io/github/stars/idealclover/love-gift.svg?logo=github&style=for-the-badge" />
                                <img class="github-badge" src="https://img.shields.io/github/forks/idealclover/love-gift.svg?logo=github&style=for-the-badge" /><br />
                                2019 年情人节给前女友的情人节礼物<br /></p>
                            <a class="btn btn-outline-dark btn-sm github-btn" href="http://love.idealclover.top" target="_blank" role="button">在线地址 <i class="fa fa-external-link" aria-hidden="true"></i></a>
                            <a class="btn btn-outline-dark btn-sm github-btn" href="https://github.com/idealclover/Love-Gift" target="_blank" role="button">GitHub 地址 <i class="fa fa-external-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">GitHub-Star-Counter</h5>
                            <p class="card-text">
                                <img class="github-badge" src="https://img.shields.io/github/stars/idealclover/GitHub-Star-Counter.svg?logo=github&style=for-the-badge" /><br />
                                一个实时计算 GitHub 用户仓库总 star 数的 API<br />
                                配合 shields.io 可输出总 stars 徽章<br />
                            </p>
                            <a class="btn btn-outline-dark btn-sm github-btn" href="https://github.com/idealclover/GitHub-Star-Counter" target="_blank" role="button">GitHub 地址 <i class="fa fa-external-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">南哪课程复习资料</h5>
                            <p class="card-text">
                                <img class="github-badge" src="https://img.shields.io/github/stars/idealclover/NJU-Review-Materials.svg?logo=github&style=for-the-badge" />
                                <img class="github-badge" src="https://img.shields.io/github/forks/idealclover/NJU-Review-Materials.svg?logo=github&style=for-the-badge" /><br />
                                南京大学课程复习资料<br />
                            </p>
                            <a class="btn btn-outline-dark btn-sm github-btn" href="https://github.com/idealclover/NJU-Review-Materials" target="_blank" role="button">GitHub 地址 <i class="fa fa-external-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Random Homepage</h5>
                            <p class="card-text">
                                <img class="github-badge" src="https://img.shields.io/github/stars/idealclover/Random-Homepage.svg?logo=github&style=for-the-badge" />
                                <img class="github-badge" src="https://img.shields.io/github/forks/idealclover/Random-Homepage.svg?logo=github&style=for-the-badge" /><br />
                                My home website based on Genetic Algorithms.<br />
                            </p>
                            <a class="btn btn-outline-dark btn-sm github-btn" href="https://idealclover.top" target="_blank" role="button">在线演示 <i class="fa fa-external-link" aria-hidden="true"></i></a>
                            <a class="btn btn-outline-dark btn-sm github-btn" href="https://github.com/idealclover/Random-Homepage" target="_blank" role="button">GitHub 地址 <i class="fa fa-external-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Clover Theme</h5>
                            <p class="card-text">
                                <img class="github-badge" src="https://img.shields.io/github/stars/idealclover/clover.svg?logo=github&style=for-the-badge" />
                                <img class="github-badge" src="https://img.shields.io/github/forks/idealclover/clover.svg?logo=github&style=for-the-badge" /><br />
                                My typecho blog theme based on bootstrap 4.<br />
                            </p>
                            <a class="btn btn-outline-dark btn-sm github-btn" href="https://idealclover.top" target="_blank" role="button">在线演示 <i class="fa fa-external-link" aria-hidden="true"></i></a>
                            <a class="btn btn-outline-dark btn-sm github-btn" href="https://github.com/idealclover/clover" target="_blank" role="button">GitHub 地址 <i class="fa fa-external-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">zhuye_kim_HTML</h5>
                            <p class="card-text">
                                <img class="github-badge" src="https://img.shields.io/github/stars/idealclover/zhuye_kim_HTML.svg?logo=github&style=for-the-badge" />
                                <img class="github-badge" src="https://img.shields.io/github/forks/idealclover/zhuye_kim_HTML.svg?logo=github&style=for-the-badge" /><br />
                                仿 zhuye.kim 的主页导航<br />
                                Written in Pure HTML.
                            </p>
                            <a class="btn btn-outline-dark btn-sm github-btn" href="https://index.idealclover.cn/" target="_blank" role="button">在线演示 <i class="fa fa-external-link" aria-hidden="true"></i></a>
                            <a class="btn btn-outline-dark btn-sm github-btn" href="https://github.com/idealclover/zhuye_kim_HTML" target="_blank" role="button">GitHub 地址 <i class="fa fa-external-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <?php AnotherLike_Plugin::theLike($this->cid); ?>
                </div>
            </div>
            <?php $this->need('components/comments.php'); ?>
        </div>
        <?php $this->need('components/sidebar.php'); ?>
    </div>
</div><!-- end #main-->
<?php $this->need('components/footer.php'); ?>