<?php

/**
 * Resume
 *
 * @package custom
 * User: idealclover
 * Date: 2/15/2019
 * Time: 23:38
 */
?>
<?php $this->need('components/header.php'); ?>
<style>
    .name {
        margin-bottom: 0.2rem
    }

    .contact {
        text-align: center;
    }

    .last-update {
        color:#7b8a8b;
        font-size: .8rem;
    }

    .project_value {
        font-weight: bold;
        padding-right: 0;
    }

    .project_time {
        text-align: right;
        padding-left: 0;
    }
    .project_role {
        padding-right: 0;
    }
    .project_position {
        text-align: right;
        padding-left: 0;
    }

    .project_list {
        margin-top: 0.5rem;
        margin-bottom: 1rem;
        padding-left:1.2rem;
    }

    hr {
        margin: 0.2rem 0;
    }
</style>
<div class="container col-10 col-lg-6" id="main" role="main">
    <section class="contact">
        <h2 class="name">翠翠 idealclover</h1>
            Blog: <a href="https://idealclover.top">https://idealclover.top</a><br />
            <a href="mailto:idealclover@163.com">idealclover@live.com</a><br />
        <div class="last-update">最后更新于：2021-01-01</div>
    </section>
    <section class="category">
        <h3 class="category_name">工作经历</h2>
            <hr />
            <section class="project">
                <div class="row">
                    <div class="project_value col-6">字节跳动</div>
                    <div class="project_time col-6">2020.07 - 至今</div>
                </div>
                <div class="row">
                    <div class="project_role col-6">商业产品经理</div>
                    <div class="project_position col-6">北京</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">负责巨量引擎广告投放平台广告创编主流程建设与迭代。</li>
                </ul>
                <div class="row">
                    <div class="project_value col-6">京东</div>
                    <div class="project_time col-6">2019.07 - 2019.08</div>
                </div>
                <div class="row">
                    <div class="project_role col-6">JD RUN 产品方向培训生</div>
                    <div class="project_position col-6">北京</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">作为商家知识学习产品组产品经理，对组内现有的面向商家的帮助中心等 5 款产品进行产品分析与建议改进，提出建议 30+条；并参与智能客服的需求设计与迭代工作；</li>
                    <li class="project_listitem">担任京东京锐计划京东超级眼镜项目组副组长，制定商业规划与落地方案，设计产品软硬件需求，编写落地 demo，推动京东超级眼镜项目落地，获得京东项目竞赛第 2 名。</li>
                </ul>
                <div class="row">
                    <div class="project_value col-6">Amazon</div>
                    <div class="project_time col-6">2018.10 - 2019.02</div>
                </div>
                <div class="row">
                    <div class="project_role col-6">PM Intern</div>
                    <div class="project_position col-6">上海</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">编写亚马逊小程序“镇店之宝”页面，独立编写 Python 脚本抓取商品信息并自动生成促销页面；</li>
                    <li class="project_listitem">负责亚马逊小程序的内部迁移工作，并利用 AWS Elastic Beanstalk, API GateWay, DynamoDB 等工具进行小程序资源与数据管理；</li>
                    <li class="project_listitem">参与 Amazon-Udacity 步行日挑战小程序，Amazon 十年挑战小程序等 5 个活动小程序的策划，跟进与迭代工作，其中 Amazon 十年挑战小程序在发布 5 日内获得 12000+次点击，共计拉新 1500+用户。</li>
                </ul>
            </section>
    </section>
    <section class="category">
        <h3 class="category_name">项目经历</h2>
            <hr />
            <section class="project">
                <div class="row">
                    <div class="project_value col-6">我要戴口罩</div>
                    <div class="project_time col-6">2020.02 - 至今</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">由个人独立进行产品调研、产品研发及后期产品推广运营活动，为用户头像戴上口罩，呼唤安全意识；</li>
                    <li class="project_listitem">疫情期间 30 天 PV 150w+，UV 70w+，成功生成头像 90w+ 次，评分 4.8+；</li>
                    <li class="project_listitem">代码公开于 <a href="https://github.com/idealclover/Wear-A-Mask" rel="noreferrer" target="_blank">GitHub</a>，获得 180+ stars。</li>
                </ul>
                <div class="row">
                    <div class="project_value col-6">南哪课表</div>
                    <div class="project_time col-6">2018.09 - 至今</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">作为个人开发者负责从项目需求制定，代码编写测试以及后期宣传推广等一系列工作；</li>
                    <li class="project_listitem">已正式上线并迭代 3 个大版本， 10 个正式版本，宣传推文总浏览量 1w+，月活跃用户数 3000+，上架酷安应用商店与 Apple Store，累计捐赠用户数 1000+；</li>
                    <li class="project_listitem">代码公开于 <a href="https://github.com/idealclover/NJU-Class-Shedule-Flutter" rel="noreferrer" target="_blank">GitHub</a>，获得共计 70+ stars。</li>
                </ul>
                <div class="row">
                    <div class="project_value col-6">idealclover.top</div>
                    <div class="project_time col-6">2017.10 - 至今</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">持续运行 3 年以上，网址 https://idealclover.top，累计文章 120+ 篇，评论 1200+ 条；</li>
                    <li class="project_listitem">使用 Typecho 博客框架，并在此基础上基于 bootstrap 自己设计并开发了前端主题，自行开发了 Typecho-PWA， Typecho-AnotherLike 等多款 Typecho 插件；</li>
                    <li class="project_listitem">独立编写小程序项目 UniTypecho 创建了博客的微信小程序“翠翠的个人博客”，并独立开发小程序框架 UniTypecho。代码公开于 <a href="https://github.com/idealclover/UniTypecho" rel="noreferrer" target="_blank">GitHub</a>，获得 80+ stars。</li>
                </ul>
                <div class="row">
                    <div class="project_value col-6">Easy-to-RSS</div>
                    <div class="project_time col-6">2018.08 - 至今</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">上架 Google Chrome 商店并迭代 3 版，用户评分 4.67，活跃用户数 2000+，被小众软件，电脑爱好者等网站杂志报道与推荐；</li>
                    <li class="project_listitem">遵循 MIT 开源协议，代码全部公开于 GitHub，已获得 380+ stars；</li>
                </ul>
                <div class="row">
                    <div class="project_value col-6">GitHub @idealclover <a href="/projects.html" rel="noreferrer" target="_blank">详细项目列表</a></div>
                    <div class="project_time col-6">2016.08 - 至今</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">南京大学开源项目集合项目 idealclover/awesome-nju</li>
                    <li class="project_listitem">个人主页项目 idealclover/Random-Homepage</li>
                    <li class="project_listitem">简历生成器 idealclover/Resume-Builder</li>
                    <li class="project_listitem">课程评估自动化脚本 idealclover/Fxxk-NJU-Class-Evaluator</li>
                </ul>
            </section>
    </section>
    <section class="category">
        <h3 class="category_name">教育背景</h2>
            <hr />
            <section class="project">
                <div class="row">
                    <div class="project_value col-6">南京大学商学院</div>
                    <div class="project_time col-6">2016.08 - 2020.06</div>
                </div>
                <div class="row">
                    <div class="project_role col-6">工商管理系</div>
                    <div class="project_position col-6">江苏南京</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">专业课程：会计学 (97) ，微观经济学 (94) ，管理学 (94)</li>
                    <li class="project_listitem">辅修课程：计算机相关课程 （高级程序设计，计算机网络，数据库概论等） ，逻辑学</li>
                    <li class="project_listitem">所获荣誉：校级优秀学生 (5%) (2017) ， 人民奖学金 (2017) ，优秀共青团员 (5%)(2017, 2018) </li>
                    <li class="project_listitem">技能证书：MS Office Specialist (MOS) Master，江苏省计算机等级三级，大学英语六级</li>
                    <li class="project_listitem">竞赛奖项：华为财务精英挑战赛江苏赛区第四名 (2018)，银星杯学术论文竞赛新人奖 (2018)</li>
                </ul>
                <div class="row">
                    <div class="project_value col-6">哥伦比亚大学 </div>
                    <div class="project_time col-6">2018.07 - 2018.08</div>
                </div>
                <div class="row">
                    <div class="project_role col-6">交换生</div>
                    <div class="project_position col-6">美国纽约</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">交换课程：数据分析，商业模式，逻辑与辩论</li>
                </ul>
            </section>
    </section>
    <section class="category">
        <h3 class="category_name">校园经历</h2>
            <hr />
            <section class="project">
                <div class="row">
                    <div class="project_value col-6">南京大学商学院学生会</div>
                    <div class="project_time col-6">2016.8 - 2018.7</div>
                </div>
                <div class="row">
                    <div class="project_role col-6">学术部 副部长</div>
                    <div class="project_position col-6">江苏南京</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">协助策划和组织 5 次大型活动。其中“21 天养成好习惯”活动吸引 200+ 名同学参加，毕马威管理案例分析大赛，吸引各院系 77 支队伍 300+ 人参赛。</li>
                    <li class="project_listitem">参与策划“21 天养成好习惯”活动：负责策划案中活动开展与时间轴的制定；负责各项目的监督与跟进工作；负责奖品的发放工作。</li>
                    <li class="project_listitem">协助承办毕马威管理案例分析大赛：编写 Python 脚本实现 77 支报名队伍的信息整理工作；负责评委老师的邀请工作；负责决赛现场的物料准备，仪器设备准备工作。</li>
                </ul>
                <div class="row">
                    <div class="project_value col-6">华为财务精英挑战赛</div>
                    <div class="project_time col-6">2018.04</div>
                </div>
                <div class="row">
                    <div class="project_role col-6">队员</div>
                    <div class="project_position col-6">江苏南京</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">对某安防监控行业上市公司材料进行收集与整理工作，分析该行业的现状，解答相应问题并给出发展建议。进入南京赛区复赛并取得南京赛区三等奖。</li>
                    <li class="project_listitem">使用 Thinkcell 进行 PPT 的绘制与上台的展示，负责对案例中公司现金流量状况进行分析。</li>
                </ul>
                <div class="row">
                    <div class="project_value col-6">南京大学商学院辩论队</div>
                    <div class="project_time col-6">2016.08 - 2018.06</div>
                </div>
                <div class="row">
                    <div class="project_role col-6">辩手</div>
                    <div class="project_position col-6">江苏南京</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">参与上场 3 场辩论赛，参与讨论 10+ 场辩论赛的立论等准备工作。</li>
                    <li class="project_listitem">与队友共同取得 2017 年南京大学院系杯季军成绩。</li>
                </ul>
                <div class="row">
                    <div class="project_value col-6">暑期社会实践</div>
                    <div class="project_time col-6">2017.08 - 2017.09</div>
                </div>
                <div class="row">
                    <div class="project_role col-6">校级团队负责人</div>
                    <div class="project_position col-6">江苏盐城</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">带领团队前往江苏盐城进行为期 10 天的社会实践活动，调查农副产品的品牌化发展现状及展望，整理访谈资料等 8000+ 字。最终完成 3000+ 字的社会实践报告，获得社会实践三等奖。</li>
                    <li class="project_listitem">负责团队立项报告的撰写，团队人员任务的分配，任务的处理与实时跟进。</li>
                </ul>
                <div class="row">
                    <div class="project_value col-6">寒假回校宣讲活动</div>
                    <div class="project_time col-6">2017.02</div>
                </div>
                <div class="row">
                    <div class="project_role col-6">活动负责人</div>
                    <div class="project_position col-6">吉林四平</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">负责四平一中 19 校联合宣讲活动的组织与开展工作，到场同学家长 100+ 人；</li>
                    <li class="project_listitem">负责南京大学的宣讲工作，会后与 10+ 意向同学保持长期联系，获得南京大学优秀学生团队称号。</li>
                    <li class="project_listitem">负责宣讲会的沟通工作与宣传工作。</li>
                </ul>
            </section>
    </section>
    <?php $this->need('components/comments.php'); ?>
</div>
<?php $this->need('components/footer.php'); ?>