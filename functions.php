<?php

/**
 * Created by PhpStorm.
 * User: shado
 * Date: 1/14/2019
 * Time: 22:14
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;

//获取顶级分类
function gettopcategory($category)
{
    $db = Typecho_Db::get();
    $prefix = $db->getPrefix();
    $rs = $db->fetchRow($db->select()->from($prefix . 'metas')->where('slug = ?', $category)->limit(1));

    if ($rs['parent'] == 0) {
        return $rs['slug'];
    } else {
        $rs2 = $db->fetchRow($db->select()->from($prefix . 'metas')->where('mid = ?', $rs['parent'])->limit(1));
        return $rs2['slug'];
    }
}

function createCatalog($obj)
{    //为文章标题添加锚点
    global $catalog;
    global $catalog_count;
    $catalog = array();
    $catalog_count = 0;
    $obj = preg_replace_callback('/<h([1-6])(.*?)>(.*?)<\/h\1>/i', function ($obj) {
        global $catalog;
        global $catalog_count;
        $catalog_count++;
        $catalog[] = array('text' => trim(strip_tags($obj[3])), 'depth' => $obj[1], 'count' => $catalog_count);
        return '<h' . $obj[1] . $obj[2] . '><a name="cl-' . $catalog_count . '"></a>' . $obj[3] . '</h' . $obj[1] . '>';
    }, $obj);
    return $obj;
}

function getCatalog()
{    //输出文章目录容器
    global $catalog;
    $index = '';
    if ($catalog) {
        $index = '<ul class="list-group list-group-flush">' . "\n";
        $prev_depth = '';
        $to_depth = 0;
        foreach ($catalog as $catalog_item) {
            $catalog_depth = $catalog_item['depth'];
            if ($prev_depth) {
                if ($catalog_depth == $prev_depth) {
                    $index .= '</li>' . "\n";
                } elseif ($catalog_depth > $prev_depth) {
                    $to_depth++;
                    $index .= '<ul class="list-group">' . "\n";
                } else {
                    $to_depth2 = ($to_depth > ($prev_depth - $catalog_depth)) ? ($prev_depth - $catalog_depth) : $to_depth;
                    if ($to_depth2) {
                        for ($i = 0; $i < $to_depth2; $i++) {
                            $index .= '</li>' . "\n" . '</ul>' . "\n";
                            $to_depth--;
                        }
                    }
                    $index .= '</li>';
                }
            }
            $index .= '<li class="list-group-item"><a href="#cl-' . $catalog_item['count'] . '">' . $catalog_item['text'] . '</a>';
            $prev_depth = $catalog_item['depth'];
        }
        for ($i = 0; $i <= $to_depth; $i++) {
            $index .= '</li>' . "\n" . '</ul>' . "\n";
        }
    }
    echo $index;
}

function themeInit($archive)
{
    if ($archive->is('single')) {
        $archive->content = createCatalog($archive->content);
    }
}
