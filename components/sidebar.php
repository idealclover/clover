<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
} ?>
<div class="col-12 col-lg-4" id="secondary" role="complementary">
    <div class="card">
        <div class="card-header">
            <div class="widget-title"><?php _e("🤔关于我") ?></div>
        </div>
        <div class="card-body">
            <p style="margin-bottom:.5rem;">
	            <?php echo str_replace("\r\n", "<br />", $this->options->clover_description); ?>
            </p>
            <p style="margin-bottom:.5rem;">
	            <?php if (!empty($this->options->sidebarBlock) && in_array('ShowQQ', $this->options->sidebarBlock)): ?>
                <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php $this->options->clover_QQ(); ?>&site=qq&menu=yes" style="text-decoration: none" target="_blank" title="QQ: <?php $this->options->clover_QQ(); ?>">
                    <img width="28px" src="<?php $this->options->themeUrl('assets/icons/QQ.svg'); ?>">
                </a>
                <?php endif ?>
	            <?php if (!empty($this->options->sidebarBlock) && in_array('ShowTelegram', $this->options->sidebarBlock)): ?>
                <a href="http://t.me/<?php $this->options->clover_telegram(); ?>" style="text-decoration: none" target="_blank" title="Telegram: @<?php $this->options->clover_telegram(); ?>">
                    <img width="28px" src="<?php $this->options->themeUrl('assets/icons/telegram.svg'); ?>">
                </a>
	            <?php endif ?>
	            <?php if (!empty($this->options->sidebarBlock) && in_array('ShowMail', $this->options->sidebarBlock)): ?>
                <a href="mailto:<?php $this->options->clover_email(); ?>" style="text-decoration: none" target="_blank" title="Email: <?php $this->options->clover_email(); ?>">
                    <img width="28px" src="<?php $this->options->themeUrl('assets/icons/mail.svg'); ?>">
                </a>
	            <?php endif ?>
	            <?php if (!empty($this->options->sidebarBlock) && in_array('ShowTwitter', $this->options->sidebarBlock)): ?>
                <a href="https://twitter.com/<?php $this->options->clover_twitter(); ?>" style="text-decoration: none" target="_blank" title="Twitter: @<?php $this->options->clover_twitter(); ?>">
                    <img width="28px" src="<?php $this->options->themeUrl('assets/icons/twitter.svg'); ?>">
                </a>
	            <?php endif ?>
	            <?php if (!empty($this->options->sidebarBlock) && in_array('ShowWeibo', $this->options->sidebarBlock)): ?>
                <a href="https://weibo.com/<?php $this->options->clover_weibo(); ?>" style="text-decoration: none" target="_blank" title="Weibo: @<?php $this->options->clover_weibo(); ?>">
                    <img width="28px" src="<?php $this->options->themeUrl('assets/icons/weibo.svg'); ?>">
                </a>
	            <?php endif ?>
            </p>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="widget-title"><?php _e("🏠关于博客") ?></div>
        </div>
        <div class="card-body">
            <p style="margin-bottom:.5rem;">
	            <?php echo str_replace("\r\n", "<br />", $this->options->clover_about_blog); ?><br />
                <?php _e("基于 Typecho 博客框架") ?><br />
                <?php _e("使用") ?> <a style="text-decoration: underline" href="https://github.com/idealclover/clover" target="_blank">clover</a> <?php _e("主题") ?><br />
            </p>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="widget-title"><?php _e("💡文章分类") ?></div>
        </div>
        <ul class="list-group list-group-root">
            <?php $this->widget('Widget_Metas_Category_List')->to($categories); ?>
            <?php while ($categories->next()) : ?>
                <?php if ($categories->levels === 0) : ?>
                    <?php $children = $categories->getAllChildren($categories->mid); ?>
                    <li class="list-group-item">
                        <a href="<?php $categories->permalink(); ?>" title="<?php $categories->name(); ?>"><?php $categories->name(); ?></a>
                    </li>
                    <?php if (!empty($children)) : ?>
                        <div class="list-group-wrapper">
                            <?php foreach ($children as $mid) { ?>
                                <?php $child = $categories->getCategory($mid); ?>
                                <li class="list-group-item">
                                    <a href="<?php echo $child['permalink'] ?>" title="<?php echo $child['name']; ?>"><?php echo $child['name']; ?></a>
                                </li>
                            <?php } ?>
                        </div>
                    <?php endif ?>
                <?php endif; ?>
            <?php endwhile; ?>
        </ul>
    </div>
</div>
<!-- end #sidebar -->