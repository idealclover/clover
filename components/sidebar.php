<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="col-12 col-lg-4" id="secondary" role="complementary">
    <div class="card">
        <div class="card-header">
            <h4 class="widget-title">关于我</h4>
        </div>
        <div class="card-body">
            qwq
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="widget-title">分类</h4>
        </div>
        <div>
	        <?php $this->widget( 'Widget_Metas_Category_List' )->listCategories( [
		        'wrapClass' => 'list-group',
		        'itemClass' => 'list-group-item'
	        ] ); ?>
        </div>


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
