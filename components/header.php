<?php
/**
 * Created by PhpStorm.
 * User: shado
 * Date: 1/14/2019
 * Time: 0:31
 */

if ( ! defined( '__TYPECHO_ROOT_DIR__' ) ) {
	exit;
} ?>
<!DOCTYPE HTML>
<html class="no-js" lang="zh-CN">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle( array(
			'category' => _t( '%s' ),
			'search'   => _t( '包含关键字 %s 的文章' ),
			'tag'      => _t( '标签 %s 下的文章' ),
			'author'   => _t( '%s 发布的文章' )
		), '', ' - ' ); ?><?php $this->options->title(); ?></title>

    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/twitter-bootstrap/4.2.1/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php $this->options->themeUrl( 'assets/clover.css' ); ?>">
    <link rel="stylesheet" href="https://cdn.bootcss.com/highlight.js/9.14.2/styles/default.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl( 'libs/OwO/OwO.min.css' ); ?>">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://cdn.bootcss.com/twitter-bootstrap/4.2.1/js/bootstrap.js"></script>

    <!-- 通过自有函数输出HTML头部信息 -->
	<?php $this->header(); ?>
</head>

<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php $this->options->siteUrl(); ?>">idealclover</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto"></ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?php if ( $this->is('index') ): ?>active<?php endif; ?>" href="<?php $this->options->siteUrl(); ?>"><?php _e("主页") ?></a>
            </li>
			<?php $category = $this->widget( 'Widget_Metas_Category_List' );
			if ( $category->have() ):
				while ( $category->next() ):
					if ( $category->levels === 0 ): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php if ( $this->is( 'category', $category->slug ) ): ?>active<?php endif; ?>" href="<?php $category->permalink() ?>"><?php $category->name() ?></a></li>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>

<!--            --><?php //$this->widget('Widget_Contents_Page_List')->to($pages); ?>
<!--	        --><?php //while($pages->next()): ?>
<!--				<li class="nav-item">-->
<!--					<a class="nav-link --><?php //if ( $this->is( 'page', $pages->slug ) ): ?><!--active--><?php //endif; ?><!--" href="--><?php //$pages->permalink() ?><!--">--><?php //$pages->title() ?><!--</a>-->
<!--				</li>			-->
<!--            --><?php //endwhile; ?>

            <li class="nav-item">
                <a class="nav-link <?php if ( $this->is('page','messageboard')): ?>active<?php endif; ?>" href="<?php $this->options->siteUrl(); ?>index.php/messageboard.html"><?php _e("留言板") ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link search-form-input"><?php _e("搜索") ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ( $this->is('page','about')): ?>active<?php endif; ?>" href="<?php $this->options->siteUrl(); ?>index.php/about.html"><?php _e("关于") ?></a>
            </li>
            <li class="nav-item dropdown pull-right">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <?php _e("更多") ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php $this->options->siteUrl(); ?>index.php/resume.html"><?php _e("我的简历") ?></a>
                    <a class="dropdown-item" href="<?php $this->options->siteUrl(); ?>index.php/github.html"><?php _e("我的项目") ?></a>
                    <a class="dropdown-item" href="<?php $this->options->siteUrl(); ?>index.php/onenote.html"><?php _e("我的笔记") ?></a>
                    <a class="dropdown-item" href="<?php $this->options->siteUrl(); ?>index.php/cross.html"><?php _e("我的情绪") ?></a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<?php
if ($this->is('single')) {
	$cid = $this->cid;
	$db = Typecho_Db::get();
	$row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
	$db->query($db->update('table.contents')->rows(array('views' => (int)$row['views']+1))->where('cid = ?', $cid));
}
?>
