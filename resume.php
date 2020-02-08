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
    .project_value {
        font-weight: bold;
    }
    .project_time {
        text-align: right;
    }
    .project_position {
        text-align: right;
    }
    .project_list {
        margin-top: 0.5rem;
        margin-bottom: 1rem;
    }
    hr {
        margin: 0.2rem 0;
    }
</style>
<div class="container col-10" id="main" role="main">
    <section class="contact">
        <h2 class="name">翠翠 idealclover</h1>
            江苏省南京市栖霞区 仙林大道163号 南京大学商学院<br />
            (+86) 1********** | idealclover@live.com<br />
            https://idealclover.top
    </section>
    <section class="category">
        <h3 class="category_name">教育背景</h2>
            <hr />
            <section class="project">
                <div class="row">
                    <div class="project_value col-6">南京大学商学院</div>
                    <div class="project_time col-6">2016.8-2020.6</div>
                </div>
                <div class="row">
                    <div class="project_role col-6">&nbsp;</div>
                    <div class="project_position col-6">&nbsp;江苏南京</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">专业课程：会计学 (97) ，微观经济学 (94) ，管理学 (94)</li>
                    <li class="project_listitem">辅修课程：计算机相关课程 (高级程序设计，计算机网络，数据库概论等) ，逻辑学</li>
                    <li class="project_listitem">所获荣誉：校级优秀学生 (5%) (2017) ， 人民奖学金 (2017) ，优秀共青团员 (5%)(2017, 2018) </li>
                    <li class="project_listitem">技能证书：MS Office Specialist (MOS) Master，江苏省计算机等级三级，大学英语六级</li>
                    <li class="project_listitem">竞赛奖项：华为财务精英挑战赛江苏赛区第四名(2018)，银星杯学术论文竞赛新人奖(2018)</li>
                </ul>
                <div class="row">
                    <div class="project_value col-6">哥伦比亚大学 (交换) </div>
                    <div class="project_time col-6">2018.7-2018.8</div>
                </div>
                <div class="row">
                    <div class="project_role col-6">&nbsp;</div>
                    <div class="project_position col-6">&nbsp;美国纽约</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">交换课程：数据分析，商业模式，逻辑与辩论</li>
                </ul>
            </section>
    </section>
    <section class="category">
        <h3 class="category_name">实习与项目经历</h2>
            <hr />
            <section class="project">
                <div class="row">
                    <div class="project_value col-6">Amazon</div>
                    <div class="project_time col-6">2018.10-2019.2</div>
                </div>
                <div class="row">
                    <div class="project_role col-6">PM Intern&nbsp;</div>
                    <div class="project_position col-6">&nbsp;上海</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">编写亚马逊小程序“镇店之宝”页面，独立编写Python脚本抓取商品信息并自动生成促销页面；</li>
                    <li class="project_listitem">负责亚马逊小程序的内部迁移工作，并利用AWS Elastic Beanstalk, API GateWay, DynamoDB等工具进行小程序资源与数据管理；</li>
                    <li class="project_listitem">参与Amazon-Udacity步行日挑战小程序，Amazon十年挑战小程序等5个活动小程序的策划，跟进与迭代工作，其中Amazon十年挑战小程序在发布5日内获得12000+次点击，共计拉新1500+用户。</li>
                </ul>
                <div class="row">
                    <div class="project_value col-6">南哪课表</div>
                    <div class="project_time col-6">2018.9-至今</div>
                </div>
                <div class="row">
                    <div class="project_role col-6">个人开发者&nbsp;</div>
                    <div class="project_position col-6">&nbsp;</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">作为个人开发者负责从项目需求制定，代码编写测试以及后期宣传推广等一系列工作；</li>
                    <li class="project_listitem">已正式上线并迭代3个正式版本，宣传推文浏览量2000+，月活跃用户数800+，上架酷安应用商店，捐赠用户数30+；</li>
                    <li class="project_listitem">代码公开于GitHub(idealclover/NJU-Class-Shedule-Android)，获得20+ stars。</li>
                </ul>
                <div class="row">
                    <div class="project_value col-6">idealclover.top</div>
                    <div class="project_time col-6">2017.10-至今</div>
                </div>
                <div class="row">
                    <div class="project_role col-6">个人开发者&nbsp;</div>
                    <div class="project_position col-6">&nbsp;</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">持续运行一年以上，网址 https://idealclover.top，累计文章60+篇，评论120+条；</li>
                    <li class="project_listitem">使用Typecho博客框架，并在此基础上基于bootstrap自己设计并开发了前端主题，自行开发了Typecho-PWA， Typecho-AnotherLike(GitHub: idealclover/Another-Typecho-Like-Plugin)等多款Typecho插件；</li>
                    <li class="project_listitem">使用WeTypecho创建了博客的微信小程序“翠翠酱的个人博客”，并参与了该框架 WeTypecho (200+ stars) 的开发工作。</li>
                </ul>
                <div class="row">
                    <div class="project_value col-6">Easy-to-RSS</div>
                    <div class="project_time col-6">2018.8-至今</div>
                </div>
                <div class="row">
                    <div class="project_role col-6">个人开发者&nbsp;</div>
                    <div class="project_position col-6">&nbsp;</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">上架Google Chrome商店并迭代3版，用户评分4.67，活跃用户数2000+，被小众软件，电脑爱好者等网站杂志报道与推荐；</li>
                    <li class="project_listitem">遵循MIT开源协议，代码全部公开于GitHub，已获得240+ stars；</li>
                    <li class="project_listitem">使用NPM进行JS包管理，使用eslint进行代码规范。</li>
                </ul>
                <div class="row">
                    <div class="project_value col-6">GitHub @idealclover</div>
                    <div class="project_time col-6">2016.8-至今</div>
                </div>
                <div class="row">
                    <div class="project_role col-6">&nbsp;</div>
                    <div class="project_position col-6">&nbsp;</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">发起南京大学开源项目集合项目 idealclover/awesome-nju</li>
                    <li class="project_listitem">个人主页项目 idealclover/Random-Homepage</li>
                    <li class="project_listitem">简历生成器 idealclover/Resume-Builder</li>
                    <li class="project_listitem">课程评估自动化脚本 idealclover/Fxxk-NJU-Class-Evaluator</li>
                </ul>
                <div class="row">
                    <div class="project_value col-6">中国不平等指数研究</div>
                    <div class="project_time col-6">2018.4-至今</div>
                </div>
                <div class="row">
                    <div class="project_role col-6">技术组组员&nbsp;</div>
                    <div class="project_position col-6">&nbsp;南京</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">使用vuepress框架，负责该研究对外项目网站的搭建与维护。</li>
                    <li class="project_listitem">编写Python脚本获取人民日报等报纸的相关新闻数据并进行分析整理。</li>
                </ul>
            </section>
    </section>
    <section class="category">
        <h3 class="category_name">实践与比赛经历</h2>
            <hr />
            <section class="project">
                <div class="row">
                    <div class="project_value col-6">华为财务精英挑战赛</div>
                    <div class="project_time col-6">2018.4</div>
                </div>
                <div class="row">
                    <div class="project_role col-6">队员&nbsp;</div>
                    <div class="project_position col-6">&nbsp;南京</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">对某安防监控行业上市公司材料进行收集与整理工作，分析该行业的现状，解答相应问题并给出发展建议。进入南京赛区复赛并取得南京赛区三等奖。</li>
                    <li class="project_listitem">使用Thinkcell进行PPT的绘制与上台的展示，负责对案例中公司现金流量状况进行分析。</li>
                </ul>
                <div class="row">
                    <div class="project_value col-6">暑期社会实践</div>
                    <div class="project_time col-6">2017.8-2017.9</div>
                </div>
                <div class="row">
                    <div class="project_role col-6">校级团队负责人&nbsp;</div>
                    <div class="project_position col-6">&nbsp;江苏南京</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">带领团队前往江苏盐城进行为期10天的社会实践活动，调查农副产品的品牌化发展现状及展望，整理访谈资料等8000+字。最终完成3000+字的社会实践报告，获得社会实践三等奖。</li>
                    <li class="project_listitem">负责团队立项报告的撰写，团队人员任务的分配，任务的处理与实时跟进。</li>
                </ul>
                <div class="row">
                    <div class="project_value col-6">寒假回校宣讲活动</div>
                    <div class="project_time col-6">2017.2</div>
                </div>
                <div class="row">
                    <div class="project_role col-6">活动负责人&nbsp;</div>
                    <div class="project_position col-6">&nbsp;吉林四平</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">负责四平一中19校联合宣讲活动的组织与开展工作，到场同学家长100+人；负责南京大学的宣讲工作，会后与10+意向同学保持长期联系，获得南京大学优秀学生团队称号。</li>
                    <li class="project_listitem">负责宣讲会的沟通工作与宣传工作。</li>
                </ul>
            </section>
    </section>
    <section class="category">
        <h3 class="category_name">社团经历</h2>
            <hr />
            <section class="project">
                <div class="row">
                    <div class="project_value col-6">南京大学商学院学生会</div>
                    <div class="project_time col-6">2016.8-2018.7</div>
                </div>
                <div class="row">
                    <div class="project_role col-6">学术部 副部长&nbsp;</div>
                    <div class="project_position col-6">&nbsp;南京</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">协助策划和组织5次大型活动。其中“21天养成好习惯”活动吸引200+名同学参加，毕马威管理案例分析大赛，吸引各院系77支队伍300+人参赛。</li>
                    <li class="project_listitem">参与策划“21天养成好习惯”活动：负责策划案中活动开展与时间轴的制定；负责各项目的监督与跟进工作；负责奖品的发放工作。</li>
                    <li class="project_listitem">协助承办毕马威管理案例分析大赛：编写Python脚本实现77支报名队伍的信息整理工作；负责评委老师的邀请工作；负责决赛现场的物料准备，仪器设备准备工作。</li>
                </ul>
                <div class="row">
                    <div class="project_value col-6">南京大学商学院辩论队</div>
                    <div class="project_time col-6">2016.8-至今</div>
                </div>
                <div class="row">
                    <div class="project_role col-6">辩手&nbsp;</div>
                    <div class="project_position col-6">&nbsp;南京</div>
                </div>
                <ul class="project_list">
                    <li class="project_listitem">参与上场3场辩论赛，参与讨论10+场辩论赛的立论等准备工作。</li>
                    <li class="project_listitem">与队友共同取得2017年南京大学院系杯季军成绩。</li>
                </ul>
            </section>
    </section>
    <?php $this->need('components/comments.php'); ?>
</div>
<?php $this->need('components/footer.php'); ?>