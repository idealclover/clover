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
<link crossorigin="anonymous" integrity="sha384-8xoxfVJMiUy7v9D7CfGGBtdtvdcrmhTy7Ug2EQyhw6rzbwKm8jWmnr3f/zEyauDS" href="https://lib.baomitu.com/fullPage.js/2.9.7/jquery.fullpage.min.css" rel="stylesheet">

<style>
    .page {
        margin-top: 7rem;
        margin-bottom: 5rem;
    }

    .project-link {
        color: black;
    }

    .project-link:hover {
        color: black;
        text-decoration: none;
    }

    [data-theme="dark"] .project-link {
        color: white;
    }

    [data-theme="dark"] .project-link:hover {
        color: white;
        text-decoration: none;
    }

    .project-card {
        width: 16rem;
        margin: 1rem;
        border-radius: 8px;
    }

    .project-card-img {
        height: 9rem;
    }

    .project-card-body {
        padding: 10px 20px;
    }

    .project-card-title {
        font-size: 1rem;
        font-weight: 700;
    }

    .project-card-content {
        font-size: 0.9rem;
    }

    .project-card-category {
        font-size: 0.8rem;
        color: grey;
    }

    .project-card-btn {
        margin: 0.5rem, 0.2rem;
    }
</style>
<div id="fullpage">
    <div class="section" id="projects">
        <div class="container col-11 page text-center">
            <h1>我的项目</h1>
            <h2>南哪宇宙</h2>
            <div class="row justify-content-center">
                <a class="project-link" href="https://nju.app" target="_blank">
                    <div class="card project-card">
                        <img class="card-img-top project-card-img" src="https://image.idealclover.cn/blog/assets/projects/1.jpg" alt="Card image cap">
                        <div class="card-body project-card-body">
                            <div class="project-card-title">南哪课表</div>
                            <div class="card-text project-card-content">简洁无广告的南大专属课表</div>
                            <div class="card-text project-card-content">累计服务 3w+ 南大同学</div>
                            <div class="card-text project-card-category">安卓/iOS应用</div>
                            <!-- <a href="#" class="btn btn-primary project-card-btn">官网</a> -->
                        </div>
                    </div>
                </a>
                <a class="project-link" href="https://nju.app" target="_blank">
                    <div class="card project-card">
                        <img class="card-img-top project-card-img" src="https://image.idealclover.cn/blog/assets/projects/2.jpg" alt="Card image cap">
                        <div class="card-body project-card-body">
                            <div class="project-card-title">南哪官网</div>
                            <div class="card-text project-card-content">可轻松配置的 APP 下载页</div>
                            <div class="card-text project-card-content">访问 PV 累计 3k+</div>
                            <div class="card-text project-card-category">全平台 线上网页</div>
                            <!-- <a href="#" class="btn btn-primary project-card-btn">官网</a> -->
                        </div>
                    </div>
                </a>
                <a class="project-link" href="https://nju.today" target="_blank">
                    <div class="card project-card">
                        <img class="card-img-top project-card-img" src="https://image.idealclover.cn/blog/assets/projects/3.jpg" alt="Card image cap">
                        <div class="card-body project-card-body">
                            <div class="project-card-title">南哪指南</div>
                            <div class="card-text project-card-content">南京大学常用网址导航</div>
                            <div class="card-text project-card-content">PV 2w+，镜像站 10+</div>
                            <div class="card-text project-card-category">全平台 线上网页</div>
                            <!-- <a href="#" class="btn btn-primary project-card-btn">官网</a> -->
                        </div>
                    </div>
                </a>
                <a class="project-link" href="https://github.com/idealclover/NJU-Review-Materials" target="_blank">
                    <div class="card project-card">
                        <img class="card-img-top project-card-img" src="https://image.idealclover.cn/blog/assets/projects/6.jpg" alt="Card image cap">
                        <div class="card-body project-card-body">
                            <div class="project-card-title">南哪复习资料</div>
                            <div class="card-text project-card-content">南京大学课程资料汇总</div>
                            <div class="card-text project-card-content">stars 500+</div>
                            <div class="card-text project-card-category">全平台 线上仓库</div>
                            <!-- <a href="#" class="btn btn-primary project-card-btn">官网</a> -->
                        </div>
                    </div>
                </a>
            </div>
            <h2>头像小程序</h2>
            <div class="row justify-content-center">
                <a class="project-link" href="https://github.com/idealclover/Wear-A-Mask" target="_blank">
                    <div class="card project-card">
                        <img class="card-img-top project-card-img" src="https://image.idealclover.cn/blog/assets/projects/4.jpg" alt="Card image cap">
                        <div class="card-body project-card-body">
                            <div class="project-card-title">我要戴口罩</div>
                            <div class="card-text project-card-content">为头像添加口罩</div>
                            <div class="card-text project-card-content">疫情期间服务用户 100w+</div>
                            <div class="card-text project-card-category">微信小程序</div>
                            <!-- <a href="#" class="btn btn-primary project-card-btn">官网</a> -->
                        </div>
                    </div>
                </a>
                <a class="project-link" href="https://github.com/idealclover/Wear-Bachelor-Cap" target="_blank">
                    <div class="card project-card">
                        <img class="card-img-top project-card-img" src="https://image.idealclover.cn/blog/assets/projects/5.jpg" alt="Card image cap">
                        <div class="card-body project-card-body">
                            <div class="project-card-title">毕业帽头像生成</div>
                            <div class="card-text project-card-content">为头像添加毕业帽</div>
                            <div class="card-text project-card-content">毕业季服务校友 1k+</div>
                            <div class="card-text project-card-category">微信小程序</div>
                            <!-- <a href="#" class="btn btn-primary project-card-btn">官网</a> -->
                        </div>
                    </div>
                </a>
            </div>
            <h2>博客相关/Typecho</h2>
            <div class="row justify-content-center">
                <a class="project-link" href="https://github.com/idealclover/UniTypecho" target="_blank">
                    <div class="card project-card">
                        <img class="card-img-top project-card-img" src="https://image.idealclover.cn/blog/assets/projects/15.jpg" alt="Card image cap">
                        <div class="card-body project-card-body">
                            <div class="project-card-title">UniTypecho</div>
                            <div class="card-text project-card-content">多平台 Typecho 解决方案</div>
                            <div class="card-text project-card-content"></div>
                            <div class="card-text project-card-category">微信小程序/UniAPP</div>
                            <!-- <a href="#" class="btn btn-primary project-card-btn">官网</a> -->
                        </div>
                    </div>
                </a>
                <a class="project-link" href="https://github.com/idealclover/GitHub-Star-Counter" target="_blank">
                    <div class="card project-card">
                        <img class="card-img-top project-card-img" src="https://image.idealclover.cn/blog/assets/projects/9.jpg" alt="Card image cap">
                        <div class="card-body project-card-body">
                            <div class="project-card-title">GitHub Star Counter</div>
                            <div class="card-text project-card-content">统计 GitHub 用户的总 stars</div>
                            <div class="card-text project-card-content"></div>
                            <div class="card-text project-card-category">Serverless API</div>
                            <!-- <a href="#" class="btn btn-primary project-card-btn">官网</a> -->
                        </div>
                    </div>
                </a>
                <a class="project-link" href="https://blogroll.icl.moe/" target="_blank">
                    <div class="card project-card">
                        <img class="card-img-top project-card-img" src="https://image.idealclover.cn/blog/assets/projects/10.jpg" alt="Card image cap">
                        <div class="card-body project-card-body">
                            <div class="project-card-title">友链屋</div>
                            <div class="card-text project-card-content">聚合友链文章统一展示</div>
                            <div class="card-text project-card-content"></div>
                            <div class="card-text project-card-category">全平台 线上网页</div>
                            <!-- <a href="#" class="btn btn-primary project-card-btn">官网</a> -->
                        </div>
                    </div>
                </a>
                <a class="project-link" href="https://donate.idealclover.cn/#" target="_blank">
                    <div class="card project-card">
                        <img class="card-img-top project-card-img" src="https://image.idealclover.cn/blog/assets/projects/11.jpg" alt="Card image cap">
                        <div class="card-body project-card-body">
                            <div class="project-card-title">Merger-Plus</div>
                            <div class="card-text project-card-content">轻松配置的个人打赏页</div>
                            <div class="card-text project-card-content"></div>
                            <div class="card-text project-card-category">全平台 线上网页</div>
                            <!-- <a href="#" class="btn btn-primary project-card-btn">官网</a> -->
                        </div>
                    </div>
                </a>
            </div>
            <h2>RSS</h2>
            <div class="row justify-content-center">
                <a class="project-link" href="https://github.com/idealclover/Easy-to-RSS" target="_blank">
                    <div class="card project-card">
                        <img class="card-img-top project-card-img" src="https://image.idealclover.cn/blog/assets/projects/7.jpg" alt="Card image cap">
                        <div class="card-body project-card-body">
                            <div class="project-card-title">Easy to RSS</div>
                            <div class="card-text project-card-content">获取网页 RSS 的浏览器扩展</div>
                            <div class="card-text project-card-content">用户数 2k+/stars 400+</div>
                            <div class="card-text project-card-category">微信小程序</div>
                            <!-- <a href="#" class="btn btn-primary project-card-btn">官网</a> -->
                        </div>
                    </div>
                </a>
                <a class="project-link" href="https://github.com/idealclover/Wear-A-Mask" target="_blank">
                    <div class="card project-card">
                        <img class="card-img-top project-card-img" src="https://image.idealclover.cn/blog/assets/projects/8.jpg" alt="Card image cap">
                        <div class="card-body project-card-body">
                            <div class="project-card-title">RSSHub</div>
                            <div class="card-text project-card-content">最知名的 RSS 生成器</div>
                            <div class="card-text project-card-content">stars 20k+</div>
                            <div class="card-text project-card-category">全平台 线上网页</div>
                            <!-- <a href="#" class="btn btn-primary project-card-btn">官网</a> -->
                        </div>
                    </div>
                </a>
            </div>
            <h2>明日方舟</h2>
            <div class="row justify-content-center">
                <a class="project-link" href="https://space.bilibili.com/573959614" target="_blank">
                    <div class="card project-card">
                        <img class="card-img-top project-card-img" src="https://image.idealclover.cn/blog/assets/projects/14.jpg" alt="Card image cap">
                        <div class="card-body project-card-body">
                            <div class="project-card-title">瓦莱塔学会</div>
                            <div class="card-text project-card-content">主导使用vika、机器人内部管理</div>
                            <div class="card-text project-card-content">技术组成员</div>
                            <div class="card-text project-card-category">内部管理工具</div>
                            <!-- <a href="#" class="btn btn-primary project-card-btn">官网</a> -->
                        </div>
                    </div>
                </a>
                <a class="project-link" href="https://www.ceobecanteen.top/" target="_blank">
                    <div class="card project-card">
                        <img class="card-img-top project-card-img" src="https://image.idealclover.cn/blog/assets/projects/12.jpg" alt="Card image cap">
                        <div class="card-body project-card-body">
                            <div class="project-card-title">小刻食堂</div>
                            <div class="card-text project-card-content">明日方舟通知速递</div>
                            <div class="card-text project-card-content">产品/iOS开发</div>
                            <div class="card-text project-card-category">全平台 插件&APP</div>
                            <!-- <a href="#" class="btn btn-primary project-card-btn">官网</a> -->
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container col-11 page text-center">

            <h1>我的音乐</h1>
            <h2>Vocaloid/SynthesizerV 翻调</h2>
            <div class="row justify-content-center">
                <a class="project-link" href="https://www.bilibili.com/video/BV1XA4y1Z74C" target="_blank">
                    <div class="card project-card">
                        <img class="card-img-top project-card-img" src="https://image.idealclover.cn/blog/assets/projects/50.jpg" alt="Card image cap">
                        <div class="card-body project-card-body">
                            <div class="project-card-title">【沨漪】我没有歌能给你听</div>
                            <div class="card-text project-card-content"></div>
                            <div class="card-text project-card-content"></div>
                            <div class="card-text project-card-category">原作：@ilem</div>
                            <a href="https://www.bilibili.com/video/BV1XA4y1Z74C" class="btn btn-primary project-card-btn">哔哩哔哩</a>
                        </div>
                    </div>
                </a>
                <a class="project-link" href="https://www.bilibili.com/video/BV1P94y1S7oX" target="_blank">
                    <div class="card project-card">
                        <img class="card-img-top project-card-img" src="https://image.idealclover.cn/blog/assets/projects/51.jpg" alt="Card image cap">
                        <div class="card-body project-card-body">
                            <div class="project-card-title">【沨漪】时光盲盒</div>
                            <div class="card-text project-card-content"></div>
                            <div class="card-text project-card-content"></div>
                            <div class="card-text project-card-category">原作：@雨狸</div>
                            <a href="https://www.bilibili.com/video/BV1P94y1S7oX" class="btn btn-primary project-card-btn">哔哩哔哩</a>
                            <a href="https://music.163.com/#/song?id=1951285160" class="btn btn-primary project-card-btn">网易云</a>
                        </div>
                    </div>
                </a>
                <a class="project-link" href="https://www.bilibili.com/video/BV1BF411L7AH" target="_blank">
                    <div class="card project-card">
                        <img class="card-img-top project-card-img" src="https://image.idealclover.cn/blog/assets/projects/52.jpg" alt="Card image cap">
                        <div class="card-body project-card-body">
                            <div class="project-card-title">【青溯】我从人间走过</div>
                            <div class="card-text project-card-content"></div>
                            <div class="card-text project-card-content"></div>
                            <div class="card-text project-card-category">原作：@瞳荧荧</div>
                            <a href="https://www.bilibili.com/video/BV1BF411L7AH" class="btn btn-primary project-card-btn">哔哩哔哩</a>
                            <a href="https://music.163.com/#/song?id=1948229247" class="btn btn-primary project-card-btn">网易云</a>
                        </div>
                    </div>
                </a>
                <a class="project-link" href="https://www.bilibili.com/video/BV1DS4y1A7a4" target="_blank">
                    <div class="card project-card">
                        <img class="card-img-top project-card-img" src="https://image.idealclover.cn/blog/assets/projects/53.jpg" alt="Card image cap">
                        <div class="card-body project-card-body">
                            <div class="project-card-title">【星尘inf&青溯】寻遍星空</div>
                            <div class="card-text project-card-content"></div>
                            <div class="card-text project-card-content"></div>
                            <div class="card-text project-card-category">原作：@鸽稀拉</div>
                            <a href="https://www.bilibili.com/video/BV1DS4y1A7a4" class="btn btn-primary project-card-btn">哔哩哔哩</a>
                            <a href="https://music.163.com/#/song?id=1940734113" class="btn btn-primary project-card-btn">网易云</a>
                        </div>
                    </div>
                </a>
                <a class="project-link" href="https://www.bilibili.com/video/BV1dY4y1p7EB" target="_blank">
                    <div class="card project-card">
                        <img class="card-img-top project-card-img" src="https://image.idealclover.cn/blog/assets/projects/54.jpg" alt="Card image cap">
                        <div class="card-body project-card-body">
                            <div class="project-card-title">【青溯&星尘Inf】社畜烧酒</div>
                            <div class="card-text project-card-content"></div>
                            <div class="card-text project-card-content"></div>
                            <div class="card-text project-card-category">原作：@ChiliChill</div>
                            <a href="https://www.bilibili.com/video/BV1dY4y1p7EB" class="btn btn-primary project-card-btn">哔哩哔哩</a>
                            <a href="https://music.163.com/#/song?id=1938650770" class="btn btn-primary project-card-btn">网易云</a>
                        </div>
                    </div>
                </a>
                <a class="project-link" href="https://www.bilibili.com/video/BV1U4411J7Vh" target="_blank">
                    <div class="card project-card">
                        <img class="card-img-top project-card-img" src="https://image.idealclover.cn/blog/assets/projects/55.jpg" alt="Card image cap">
                        <div class="card-body project-card-body">
                            <div class="project-card-title">【乐正绫】致十年后的我</div>
                            <div class="card-text project-card-content"></div>
                            <div class="card-text project-card-content"></div>
                            <div class="card-text project-card-category">原作：@doriko @wis</div>
                            <a href="https://www.bilibili.com/video/BV1U4411J7Vh" class="btn btn-primary project-card-btn">哔哩哔哩</a>
                        </div>
                    </div>
                </a>
            </div>
            <h2>钢琴瞎弹</h2>
            <div class="row justify-content-center">
                <a class="project-link" href="https://www.bilibili.com/video/BV1M4411S7HF" target="_blank">
                    <div class="card project-card">
                        <img class="card-img-top project-card-img" src="https://image.idealclover.cn/blog/assets/projects/60.jpg" alt="Card image cap">
                        <div class="card-body project-card-body">
                            <div class="project-card-title">City of Stars</div>
                            <div class="card-text project-card-content"></div>
                            <div class="card-text project-card-content"></div>
                            <div class="card-text project-card-category">2019-08</div>
                        </div>
                    </div>
                </a>
                <a class="project-link" href="https://www.bilibili.com/video/BV1Bt411V7SM" target="_blank">
                    <div class="card project-card">
                        <img class="card-img-top project-card-img" src="https://image.idealclover.cn/blog/assets/projects/61.jpg" alt="Card image cap">
                        <div class="card-body project-card-body">
                            <div class="project-card-title">The Truth That You Leave</div>
                            <div class="card-text project-card-content"></div>
                            <div class="card-text project-card-content"></div>
                            <div class="card-text project-card-category">2019-07</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!--<div class="section">
        <div class="container col-11 page text-center">
            <h1>我的博客</h1>
            <h2>技术杂谈</h2>
            <h2>思考随想</h2>
            <h2>产品测评</h2>
            <h2>生活记录</h2>
        </div>
    </div> -->
    <div class="section">
        <div class="container col-11 page text-center">
            <h1>TODO</h1>
            <h2>持续完善中</h2>
        </div>
    </div>
</div>
<script crossorigin="anonymous" integrity="sha384-pP6wFQE7rEHgFAmB1ihkqZ1tBSU1jmhoR3Nl48A2KuTT4HW4HJzE/wTsj9j0zWgD" src="https://lib.baomitu.com/fullPage.js/2.9.7/jquery.fullpage.min.js"></script>
<script crossorigin="anonymous" integrity="sha384-krqJkPFlNyMkqQDqA32hfnv/LIvEAizr7oyg2uormat8WGM12CMiaxhHKMArgPiI" src="https://lib.baomitu.com/fullPage.js/2.9.7/vendors/scrolloverflow.min.js"></script>
<script>
    $(document).ready(function() {
        $('#fullpage').fullpage({
            scrollOverflow: true
        });
    });
</script>
<?php $this->need('components/footer.php'); ?>