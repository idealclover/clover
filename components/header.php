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
<html class="no-js">
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
    <!--    <link href="https://cdn.bootcss.com/bootswatch/4.2.1/flatly/bootstrap.min.css" rel="stylesheet">-->
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://cdn.bootcss.com/twitter-bootstrap/4.2.1/js/bootstrap.js"></script>

    <!-- 通过自有函数输出HTML头部信息 -->
	<?php $this->header(); ?>
</head>

<body>
<!--<nav class="navbar navbar-expand-lg navbar-white bg-white">-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/blog/index.php/">idealclover</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto"></ul>
        <ul class="navbar-nav">


            <li class="nav-item">
                <a class="nav-link <?php if ( $this->is('index') ): ?>active<?php endif; ?>" href="/blog/index.php/">主页</a>
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

			<!-- <?php $this->widget('Widget_Contents_Page_List')->to($pages);
			while($pages->next()): ?>
				<li class="nav-item">
					<a class="nav-link <?php if ( $this->is( 'page', $pages->slug ) ): ?>active<?php endif; ?>" href="<?php $pages->permalink() ?>"><?php $pages->title() ?></a>
				</li>
			<?php endwhile; ?> -->

            <li class="nav-item">
                <a class="nav-link" href="/blog/index.php/messageboard.html">留言板</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">简历</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/blog/index.php/links.html">友链</a>
            </li>
            <li class="nav-item dropdown pull-right">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    更多
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">关于我</a>
                    <a class="dropdown-item" href="#">关于网站</a>
                    <a class="dropdown-item" href="/blog/index.php/github.html">我的项目</a>
                    <a class="dropdown-item" href="/blog/index.php/onenote.html">我的笔记</a>
                    <a class="dropdown-item" href="/blog/index.php/cross.html">小情绪</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
