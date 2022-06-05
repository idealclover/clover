> 🍀 与一切眼中看见无所有；于无所希望中得救。 ——鲁迅《墓谒文》

傻翠自己的 typecho 主题 clover，基于 bootstrap4 编写

> ⚠️ 暂时处于自用阶段，有很多硬编码与个性化修改，直接使用请小心

## Why clover?

作为一名半文不理还学了计算机二专的商科生，在折腾个人博客的时候遇到了这样的问题：

> 自己有一些技术上的经历与体验需要分享，又有一些自己生活中的各种随想，但两者的受众是不同的，喜欢看我没事瞎说的也许对技术文章一点都不感兴趣；需要从我博客中得到技术收获的又往往对我的生活没有兴趣。

自己之前的解决方案是将技术博客与个人博客做成两个独立的 typecho 博客，但这样又使得自己的网站之间的关联不强，在这个网站浏览过的人难以跳转到另一个网站，于是就有了这样的一个博客主题。

这个主题通过设置一个独立的主页，并将不同分类的文章进行分开展示，使得不同的文章得以在不同的分类中呈现，避免了所有文章都放在一处的问题。

如果你也有这样的困扰，希望这个主题可以帮助到你。

功能特性：

- 多语言支持，可以通过一个服务器搭建多站点 [示例中文](https://idealclover.top/) [示例英文](https://en.idealclover.top/)
- 通过分类切换文章类别，通过子分类表示具体分类

## How to use clover?

### 安装主题

> ⚠️ 暂时处于自用阶段，有很多硬编码与个性化修改，直接使用请小心

将主题下载解压重命名为 clover，放在`usr/themes`目录下

### 安装相关插件

clover 主题使用到的相关插件，需要手动下载安装：

- (必需)点赞插件[AnotherLike](https://github.com/idealclover/Another-Typecho-Like-Plugin)
- (必需)搜索插件[ExSearch](https://github.com/AlanDecode/Typecho-Plugin-ExSearch)
- (必需)友情链接插件[Links](http://www.imhan.com/archives/typecho_links_20141214/)
- (可选)播放器插件[Meting](https://github.com/MoePlayer/APlayer-Typecho)
- (可选)PWA 插件[PWA](https://github.com/idealclover/Typecho-PWA)

## 使用到的开源库

- 首页使用项目 [Random-Homepage](https://github.com/idealclover/Random-Homepage)
- 背景参考项目 [canvas-nest.js](https://github.com/hustcc/canvas-nest.js)
- 平滑滚动组件 [smooth-scroll](https://github.com/cferdinandi/smooth-scroll)
