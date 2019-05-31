<?php
/**
 * 项目列表
 *
 * @package custom
 */
?>
<?php if ( ! defined( '__TYPECHO_ROOT_DIR__' ) ) {
	exit;
} ?>
<?php $this->need( 'components/header.php' ); ?>

<div class="container col-10" id="main" role="main">
    <div class="row">
        <div class="col-12 col-lg-8">
            <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
                <section >
                    <h1 class="page-title" itemprop="name headline">
                        <a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                    </h1>
                    <?php if($this->authorId == $this->user->uid): ?>
                        <a class="edit-link" href="<?php $this->options->adminUrl(); ?>write-page.php?cid=<?php echo $this->cid;?>" target="_blank"><?php _e("编辑") ?></a>
                    <?php endif; ?>
                </section>
                <hr />
                <div class="post-content" itemprop="articleBody">
					<?php $this->content(); ?>
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="heading-1">
                                <button class="btn btn-light btn-primary shadow-none" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                    <h5 class="mb-0 pull-left">
                                        南哪课表
                                    </h5>
                                </button>
                            </div>

                            <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion">
                            <div class="card-body">
                                <img src="https://img.shields.io/github/stars/idealclover/NJU-Class-Shedule-Android.svg?logo=github&style=for-the-badge" /><br />
                                为南京大学同学定制的课程表<br />
                                可以自动导入南京大学教务处的课程<br />
                                提供简洁的页面与 UI，替代臃肿的某课程表与某格子<br />
                                <a href="https://github.com/idealclover/NJU-Class-Shedule-Android" target="_blank">GitHub 地址</a>
                                <a href="https://www.pgyer.com/2hQ5" target="_blank">直接下载</a>
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading-2">
                                <button class="btn btn-light btn-primary shadow-none" data-toggle="collapse" data-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">
                                    <h5 class="mb-0 pull-left">
                                        Easy-to-RSS
                                    </h5>
                                </button>
                            </div>

                            <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion">
                            <div class="card-body">
                                <img src="https://img.shields.io/github/stars/idealclover/Easy-to-RSS.svg?logo=github&style=for-the-badge" />
                                <img src="https://img.shields.io/chrome-web-store/stars/hbcmpkcpbnecinpngdnfbnknfkdpdfli.svg?logo=google%20chrome&style=for-the-badge" />
                                <img src="https://img.shields.io/chrome-web-store/users/hbcmpkcpbnecinpngdnfbnknfkdpdfli.svg?logo=google%20chrome&style=for-the-badge" /><br />
                                一键式发现当前网页RSS的 chrome/firefox extension<br />
                                与RSSHub联动并支持更多网页<br />
                                <a href="https://github.com/idealclover/easy-to-rss" target="_blank">GitHub 地址</a>
                                <a href="https://chrome.google.com/webstore/detail/easy-to-rss/hbcmpkcpbnecinpngdnfbnknfkdpdfli" target="_blank">Chrome 商店地址</a>
                                <a href="https://github.com/diygod/rsshub" target="_blank">上游项目 RSSHub</a>
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading-3">
                                <button class="btn btn-light btn-primary shadow-none" data-toggle="collapse" data-target="#collapse-3" aria-expanded="true" aria-controls="collapse-3">
                                    <h5 class="mb-0 pull-left">
                                        南哪课程资料
                                    </h5>
                                </button>
                            </div>

                            <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion">
                            <div class="card-body">
                                <img src="https://img.shields.io/github/stars/idealclover/NJU-Review-Materials.svg?logo=github&style=for-the-badge" />
                                <img src="https://img.shields.io/github/forks/idealclover/NJU-Review-Materials.svg?logo=github&style=for-the-badge" /><br />
                                南京大学课程复习资料<br />
                                <a href="http://onedrive.idealclover.top" target="_blank">官网地址</a>
                                <a href="https://github.com/idealclover/NJU-Review-Materials" target="_blank">GitHub 地址</a>
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading-4">
                                <button class="btn btn-light btn-primary shadow-none" data-toggle="collapse" data-target="#collapse-4" aria-expanded="true" aria-controls="collapse-4">
                                    <h5 class="mb-0 pull-left">
                                        Love Gift
                                    </h5>
                                </button>
                            </div>

                            <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion">
                            <div class="card-body">
                                <img src="https://img.shields.io/github/stars/idealclover/love-gift.svg?logo=github&style=for-the-badge" />
                                <img src="https://img.shields.io/github/forks/idealclover/love-gift.svg?logo=github&style=for-the-badge" /><br />
                                送给女朋友的情人节礼物 ww<br />
                                <a href="http://love.idealclover.top" target="_blank">在线地址</a>
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading-5">
                                <button class="btn btn-light btn-primary shadow-none" data-toggle="collapse" data-target="#collapse-5" aria-expanded="true" aria-controls="collapse-5">
                                    <h5 class="mb-0 pull-left">
                                        南哪大学课程评估脚本
                                    </h5>
                                </button>
                            </div>

                            <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion">
                            <div class="card-body">
                                <img src="https://img.shields.io/github/stars/idealclover/Fxxk-NJU-Class-Evaluator.svg?logo=github&style=for-the-badge" />
                                <img src="https://img.shields.io/github/forks/idealclover/Fxxk-NJU-Class-Evaluator.svg?logo=github&style=for-the-badge" /><br />
                                南哪大学课程评估脚本<br />
                                <a href="https://fuck.idealclover.cn/" target="_blank">官网地址</a>
                                <a href="https://github.com/idealclover/Fxxk-NJU-Class-Evaluator" target="_blank">GitHub 地址</a>
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading-6">
                                <button class="btn btn-light btn-primary shadow-none" data-toggle="collapse" data-target="#collapse-6" aria-expanded="true" aria-controls="collapse-6">
                                    <h5 class="mb-0 pull-left">
                                        Awesome NJU
                                    </h5>
                                </button>
                            </div>

                            <div id="collapse-6" class="collapse" aria-labelledby="heading-6" data-parent="#accordion">
                            <div class="card-body">
                                <img src="https://img.shields.io/github/stars/idealclover/awesome-nju.svg?logo=github&style=for-the-badge" />
                                <img src="https://img.shields.io/github/forks/idealclover/awesome-nju.svg?logo=github&style=for-the-badge" /><br />
                                南哪大学开源项目与资源集合<br />
                                <a href="https://github.com/idealclover/awesome-nju" target="_blank">GitHub 地址</a>
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading-7">
                                <button class="btn btn-light btn-primary shadow-none" data-toggle="collapse" data-target="#collapse-7" aria-expanded="true" aria-controls="collapse-7">
                                    <h5 class="mb-0 pull-left">
                                        Random Homepage
                                    </h5>
                                </button>
                            </div>

                            <div id="collapse-7" class="collapse" aria-labelledby="heading-7" data-parent="#accordion">
                            <div class="card-body">
                                <img src="https://img.shields.io/github/stars/idealclover/Random-Homepage.svg?logo=github&style=for-the-badge" />
                                <img src="https://img.shields.io/github/forks/idealclover/Random-Homepage.svg?logo=github&style=for-the-badge" /><br />
                                My home website based on Genetic Algorithms.<br />
                                <a href="https://idealclover.top" target="_blank">在线演示</a>
                                <a href="https://github.com/idealclover/Random-Homepage" target="_blank">GitHub 地址</a>
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading-8">
                                <button class="btn btn-light btn-primary shadow-none" data-toggle="collapse" data-target="#collapse-8" aria-expanded="true" aria-controls="collapse-8">
                                    <h5 class="mb-0 pull-left">
                                        Clover Theme
                                    </h5>
                                </button>
                            </div>

                            <div id="collapse-8" class="collapse" aria-labelledby="heading-8" data-parent="#accordion">
                            <div class="card-body">
                                <img src="https://img.shields.io/github/stars/idealclover/clover.svg?logo=github&style=for-the-badge" />
                                <img src="https://img.shields.io/github/forks/idealclover/clover.svg?logo=github&style=for-the-badge" /><br />
                                My typecho blog theme based on bootstrap 4.<br />
                                <a href="https://idealclover.top" target="_blank">在线演示</a>
                                <a href="https://github.com/idealclover/clover" target="_blank">GitHub 地址</a>
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading-9">
                                <button class="btn btn-light btn-primary shadow-none" data-toggle="collapse" data-target="#collapse-9" aria-expanded="true" aria-controls="collapse-9">
                                    <h5 class="mb-0 pull-left">
                                        WeTypecho
                                    </h5>
                                </button>
                            </div>

                            <div id="collapse-9" class="collapse" aria-labelledby="heading-9" data-parent="#accordion">
                            <div class="card-body">
                                <img src="https://img.shields.io/github/stars/MingliangLu/WeTypecho.svg?logo=github&style=for-the-badge" />
                                <img src="https://img.shields.io/github/forks/MingliangLu/WeTypecho.svg?logo=github&style=for-the-badge" /><br />
                                微信小程序版 Typecho<br />
                                <a href="https://github.com/MingliangLu/WeTypecho" target="_blank">GitHub 地址</a>
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading-10">
                                <button class="btn btn-light btn-primary shadow-none" data-toggle="collapse" data-target="#collapse-10" aria-expanded="true" aria-controls="collapse-10">
                                    <h5 class="mb-0 pull-left">
                                        Moment Machine
                                    </h5>
                                </button>
                            </div>

                            <div id="collapse-10" class="collapse" aria-labelledby="heading-10" data-parent="#accordion">
                            <div class="card-body">
                                <img src="https://img.shields.io/github/stars/idealclover/MomentMachine.svg?logo=github&style=for-the-badge" />
                                <img src="https://img.shields.io/github/forks/idealclover/MomentMachine.svg?logo=github&style=for-the-badge" /><br />
                                A Flutter app for me to write twitter.<br />
                                <a href="https://github.com/idealclover/MomentMachine" target="_blank">GitHub 地址</a>
                            </div>
                            </div>
                        </div>
                </div>
            </article>
	        <?php AnotherLike_Plugin::theLike(); ?>
		<?php $this->need( 'components/comments.php' ); ?>
        </div>
	    <?php $this->need( 'components/sidebar.php' ); ?>
    </div>
</div><!-- end #main-->
<?php $this->need( 'components/footer.php' ); ?>
