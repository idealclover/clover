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
<?php $this->need( 'components/header.php' ); ?>
<style>
    .name {
        margin-bottom: 0.2rem
    }
    .contact {
        text-align: center;
    }
    .project_value{
        font-weight:bold;
    }
    .project_time{
        text-align: right;
    }
    .project_position{
        text-align: right;
    }
    .project_list{
        margin-top: 0.5rem;
        margin-bottom: 1rem;
    }
    hr{
        margin: 0.2rem 0;
    }
</style>
<div class="container col-10" id="main" role="main">
    <section class="contact">
        <h2 class="name">崔容皓</h2>
        江苏省南京市栖霞区 仙林大道163号 南京大学商学院<br/>
        idealclover@live.com | https://idealclover.top
    </section>
    <section class="category">
        <h3 class="category_name">教育背景</h3>
        <hr/>
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
                <li class="project_listitem">所获荣誉：校级优秀学生 (5%) (2017) ， 人民奖学金 (2017) ，优秀共青团员 (5%)(2017, 2018)</li>
                <li class="project_listitem">技能证书：MS Office Specialist (MOS) Master，江苏省计算机等级三级，大学英语六级</li>
            </ul>
            <div class="row">
                <div class="project_value col-6">哥伦比亚大学 (交换)</div>
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
        <h3 class="category_name">实习经历</h3>
        <hr/>
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
                <li class="project_listitem">编写亚马逊小程序“镇店之宝”页面，独立编写Python脚本抓取商品信息并自动生成促销页面</li>
                <li class="project_listitem">负责亚马逊小程序的内部迁移工作，并利用AWS Elastic Beanstalk, API GateWay,
                    DynamoDB等工具进行小程序资源与数据管理
                </li>
                <li class="project_listitem">
                    参与Amazon-Udacity步行日挑战小程序，Amazon十年挑战小程序等5个活动小程序的策划，跟进与迭代工作，其中Amazon十年挑战小程序在发布5日内获得12000+次点击，共计拉新1500+用户
                </li>
            </ul>
        </section>
    </section>
    <section class="category">
        <h3 class="category_name">项目经历</h3>
        <hr/>
        <section class="project">
            <div class="row">
                <div class="project_value col-6">GitHub @idealclover</div>
                <div class="project_time col-6">2016.8-至今</div>
            </div>
            <ul class="project_list">
                <li class="project_listitem">为项目 RSSHub (3700+ stars) 成功提交pull requests 3次</li>
                <li class="project_listitem">开发个人项目 Easy-to-RSS 并持续改进，被小众软件等网站与媒体报道与分享，该项目目前已有 80+ stars，插件安装量 600+ 。
                </li>
                <li class="project_listitem">开发个人项目课程表APP NJU-Schedule-Android ，帮助南京大学学生从教务系统导入课程表并进行展示。目前已有1000+次安装。
                </li>
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
        <h3 class="category_name">实践与比赛经历</h3>
        <hr/>
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
                <li class="project_listitem">
                    带领团队前往江苏盐城进行为期10天的社会实践活动，调查农副产品的品牌化发展现状及展望，整理访谈资料等8000+字。最终完成3000+字的社会实践报告，获得社会实践三等奖。
                </li>
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
                <li class="project_listitem">
                    负责四平一中19校联合宣讲活动的组织与开展工作，到场同学家长100+人；负责南京大学的宣讲工作，会后与10+意向同学保持长期联系，获得南京大学优秀学生团队称号。
                </li>
                <li class="project_listitem">负责宣讲会的沟通工作与宣传工作。</li>
            </ul>
        </section>
    </section>
    <section class="category">
        <h3 class="category_name">社团经历</h3>
        <hr/>
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
                <li class="project_listitem">
                    协助承办毕马威管理案例分析大赛：编写Python脚本实现77支报名队伍的信息整理工作；负责评委老师的邀请工作；负责决赛现场的物料准备，仪器设备准备工作。
                </li>
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
	<?php $this->need( 'components/comments.php' ); ?>
</div>
<?php $this->need( 'components/footer.php' ); ?>
