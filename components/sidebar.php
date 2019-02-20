<?php if ( ! defined( '__TYPECHO_ROOT_DIR__' ) ) {
	exit;
} ?>
<div class="col-12 col-lg-4" id="secondary" role="complementary">
    <div class="card">
        <div class="card-header">
            <div class="widget-title">🤔关于我</div>
        </div>
        <div class="card-body">
            翠翠<br/>
            南京大学商学院<br/>
            2016级本科生<br />
            <a href="<?php $this->options->siteUrl(); ?>index.php/about.html">了解更多-></a>
            <!--         <div class="row">-->
            <!--             <img src="https://ws1.sinaimg.cn/large/005HTDcGly1fl2ylylv2hj301s01sjr5.jpg" class="img-circle">-->
            <!--             <img src="https://ws1.sinaimg.cn/large/005HTDcGgy1fro4q2dw0rj30dw0dwmxj.jpg" class="img-circle">-->
            <!--         </div>-->
        </div>
    </div>
	<div class="card">
        <div class="card-header">
            <div class="widget-title">🏠关于博客</div>
        </div>
        <div class="card-body">
			基于 Typecho 博客框架<br/>
            使用个人创作的<a href="https://github.com/idealclover/clover" target="_blank">clover</a>主题<br/>
            <a href="https://www.pgyer.com/8keO target="_blank"">下载Android APP (Based on Lavas PWA)-></a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="widget-title">💡文章分类</div>
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


        <!--                <ul class="list-group list-group-root list-group-flush">-->
        <!--                    <li class="list-group-item">Cras justo odio</li>-->
        <!--                    <li class="list-group-item">Dapibus ac facilisis in</li>-->
        <!--                    <li class="list-group-item">Vestibulum at eros</li>-->
        <!--                    <li class="list-group-item">Vestibulum at eros <ul class="list-group" ><li class="list-group-item">aaa</li><li class="list-group-item">bbb</li></ul></li>-->
        <!--                    --><?php
		//                    $this->widget('Widget_Metas_Category_List')->parse('<li class="list-group-item"><a href="{permalink}">{name}</a></li>');
		//                    ?>
        <!--                    <li class="list-group-item">-->
        <!--                    </li>-->
        <!--                </ul>-->
    </div>
</div><!-- end #sidebar -->
