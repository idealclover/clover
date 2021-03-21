<?php

/**
 * 归档
 *
 * @package custom
 */
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
} ?>

<?php $this->need('components/header.php'); ?>

<style>
    ul {
        padding-left: 1.2rem;
    }
</style>

<div class="container col-9" id="main">

    <div class="row">
        <div class="col-12 col-lg-8">
            <?php
            $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
            $year = 0;
            $mon = 0;
            $i = 0;
            $j = 0;
            $output = '<div id="archives">';
            while ($archives->next()) :
                $year_tmp = date('Y', $archives->created);
                $mon_tmp = date('m', $archives->created);
                $y = $year;
                $m = $mon;
                if ($mon != $mon_tmp && $mon > 0) $output .= '</ul></li>';
                if ($year != $year_tmp && $year > 0) $output .= '</ul>';
                if ($year != $year_tmp) {
                    $year = $year_tmp;
                    $output .= '<h3 class="al_year">' . $year . ' 年</h3><ul class="al_mon_list">';
                }
                if ($mon != $mon_tmp) {
                    $mon = $mon_tmp;
                    $output .= '<li><span class="al_mon">' . $mon . ' 月</span><ul class="al_post_list">';
                }
                $output .= '<li>' . date('m.d: ', $archives->created) . '<a href="' . $archives->permalink . '">' . $archives->title . '</a>';
                // $output .= '<li>' . date('m.d: ', $archives->created) . '<a href="' . $archives->permalink . '">' . $archives->title . '</a> (' . AnotherLike_Plugin::theLike($archives->cid, false, false) . ' <i class="fa fa-thumbs-o-up"></i> , ' . $archives->commentsNum . ' <i class="fa fa-comments-o"></i>' . ')</li>';
            endwhile;
            $output .= '</ul></li></ul></div>';
            echo $output;
            ?>
        </div><!-- end #main -->
        <?php $this->need('components/sidebar.php'); ?>
    </div><!-- end #row -->
</div><!-- end #container -->

<?php $this->need('components/footer.php'); ?>