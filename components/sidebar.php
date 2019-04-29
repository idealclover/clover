<?php if ( ! defined( '__TYPECHO_ROOT_DIR__' ) ) {
	exit;
} ?>
<div class="col-12 col-lg-4" id="secondary" role="complementary">
    <div class="card">
        <div class="card-header">
            <div class="widget-title"><?php _e("🤔关于我") ?></div>
        </div>
        <div class="card-body">
	        <?php _e("翠翠 idealclover") ?><br/>
            <?php _e("南京大学商学院2016级本科生") ?><br/>
			<a href="http://wpa.qq.com/msgrd?v=3&uin=1455169173&site=qq&menu=yes" style="text-decoration: none" target="_blank" title="QQ: 1455169173">
				<img src="<?php $this->options->themeUrl( 'assets/icons/QQ.svg' ); ?>">
			</a>
			<a href="http://t.me/idealclover" style="text-decoration: none" target="_blank" title="Telegram: @idealclover">
				<img src="<?php $this->options->themeUrl( 'assets/icons/telegram.svg' ); ?>">
			</a>
			<a href="mailto:idealclover@163.com" style="text-decoration: none" target="_blank" title="Email: idealclover@163.com">
				<img src="<?php $this->options->themeUrl( 'assets/icons/mail.svg' ); ?>">
			</a>
			<a href="https://github.com/idealclover" style="text-decoration: none" target="_blank" title="GitHub: @idealclover">
				<img src="<?php $this->options->themeUrl( 'assets/icons/github.svg' ); ?>">
			</a>
			<a href="https://www.zhihu.com/people/cuicuijiang" style="text-decoration: none" target="_blank" title="Zhihu: @不蠢会死的某翠">
				<img src="<?php $this->options->themeUrl( 'assets/icons/zhihu.svg' ); ?>">
			</a>
			<a href="https://steamcommunity.com/id/idealclover" style="text-decoration: none" target="_blank" title="Steam: @idealclover">
				<img src="<?php $this->options->themeUrl( 'assets/icons/steam.svg' ); ?>">
			</a>
			<a href="https://twitter.com/idealclover" style="text-decoration: none" target="_blank" title="Twitter: @idealclover">
				<img src="<?php $this->options->themeUrl( 'assets/icons/twitter.svg' ); ?>">
			</a>
			<a href="https://weibo.com/idealclover" style="text-decoration: none" target="_blank" title="Weibo: @不蠢会死的某翠">
				<img src="<?php $this->options->themeUrl( 'assets/icons/weibo.svg' ); ?>">
			</a>
			<br />
            <a style="text-decoration: underline" href="<?php $this->options->siteUrl();?>index.php/about.html"><?php _e("了解更多->") ?></a>
        </div>
    </div>
	<div class="card">
        <div class="card-header">
            <div class="widget-title"><?php _e("🏠关于博客") ?></div>
        </div>
        <div class="card-body">
            <?php _e("基于 Typecho 博客框架") ?><br/>
            <?php _e("使用个人创作的") ?> <a style="text-decoration: underline" href="https://github.com/idealclover/clover" target="_blank">clover</a> <?php _e("主题") ?><br/>
            <a style="text-decoration: underline" href="https://www.pgyer.com/8keO" target="_blank"><?php _e("下载Android APP->") ?></a>
        </div>
    </div>
	<div class="card">
		<div class="card-header">
			<div class="widget-title"><?php _e("💾博客小程序") ?></div>
		</div>
		<div class="card-body">
			<img src="<?php $this->options->themeUrl( 'assets/qrcode.png' ); ?>" />
		</div>
	</div>
    <div class="card">
        <div class="card-header">
            <div class="widget-title"><?php _e("💡文章分类") ?></div>
        </div>
        <ul class="list-group list-group-root">
			<?php $this->widget( 'Widget_Metas_Category_List' )->to( $categories ); ?>
			<?php while ( $categories->next() ): ?>
				<?php if ( $categories->levels === 0 ): ?>
					<?php $children = $categories->getAllChildren( $categories->mid ); ?>
                    <!--                    <li class="list-group-item --><?php //if ( $this->is( 'category', $categories->slug ) ): ?><!--active--><?php //endif; ?><!--">-->
                    <li class="list-group-item">
                        <a href="<?php $categories->permalink(); ?>"
                           title="<?php $categories->name(); ?>"><?php $categories->name(); ?></a>
                    </li>
					<?php if ( ! empty( $children ) ): ?>
                        <div class="list-group-wrapper">
							<?php foreach ( $children as $mid ) { ?>
								<?php $child = $categories->getCategory( $mid ); ?>
                                <!--                            <li class="list-group-item --><?php //if ( $this->is( 'category', $child ) ): ?><!--active--><?php //endif; ?><!--">-->
                                <li class="list-group-item">
                                    <a href="<?php echo $child['permalink'] ?>"
                                       title="<?php echo $child['name']; ?>"><?php echo $child['name']; ?></a>
                                </li>
							<?php } ?>
                        </div>
					<?php endif ?>
				<?php endif; ?>
			<?php endwhile; ?>
        </ul>
    </div>
</div><!-- end #sidebar -->
