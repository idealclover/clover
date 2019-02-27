<?php
/**
 * Bilibili
 *
 * @package custom
 */
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
?>
<?php $this->need('components/header.php');?>

<?php
require 'libs/ParserDom/ParserDom.php';

//获取书籍清单数据

function getBookData($mid){
    $url = "https://space.bilibili.com/ajax/Bangumi/getList?mid=$mid";
    // $url = "https://api.douban.com/v2/book/user/$userID/collections?count=100"; //最多取100条数据
    $res=json_decode(curl_get_contents($url),true); //读取api得到json
    $res = $res['data']['result'];
    if ($res == null || $res ==""){
        echo '<script>$(function(){$(".douban_book_tips").text("获取书籍数据失败，可能原因是：1. 豆瓣API发生故障 2. 豆瓣id配置错误")})</script>';
        return [];
    }
    foreach($res as $v){
        $book_name=$v['title'];
        $book_img = $v['cover'];
        // $book_img = str_replace("/view/subject/m/public/","/lpic/",$book_img);
        $book_url = $v['share_url'];
        $readlist[] = array("name"=>$book_name,"img"=>$book_img,"url"=>$book_url);
    }

    return $readlist;
}

function curl_get_contents($url)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
?>

<style>
.moviecard{
  margin: 1rem 1.4rem;
}

.movieimg{
    object-fit: cover;
    width:100%;
}

.movietitle{
  height: 4rem;
}

.moviename{
    height: 4rem;
    overflow: hidden;
    display: block;
    text-overflow: ellipsis;
    white-space: nowrap;
}

</style>

<div class="container col-lg-8 col-10" id="main" role="main">
    <div class="row">
        <div class="col-12 col-lg-8">
            <article class="panel">
                <div class="booklist">
                    <h2>我的bilibili追番列表</h2>
                    <small class="text-muted m-xs letterspacing douban_book_tips"><i class="fontello fontello-clock-o m-xs" aria-hidden="true"></i>以下数据为实时从Bilibili API读取</small>
                    <div class="row">
                        <?php
                        $readList = getBookData($this->fields->mid);
                        foreach($readList as $v):?>
                            <div class="card moviecard" style="width: 10rem;">
                                <img class="card-img-top movieimg" src="<?php echo $v['img']; ?>" alt="Card image cap" style="height:12rem;">
                                <!-- <div class="card-body moviename">
                                    <a target="_blank" href="<?php echo $v['url'];?>"><?php echo $v['name']; ?></a>
                                </div> -->
                                <div class="card-body movietitle">
                                    <a class="card-title moviename" target="_blank" target="_blank" href="<?php echo $v['url'];?>"><?php echo $v['name']; ?></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </article>
			<?php $this->need( 'components/comments.php' ); ?>
        </div>
	    <?php $this->need( 'components/sidebar.php' ); ?>
    </div>
</div><!-- end #main-->

<!-- footer -->
<?php $this->need('components/footer.php');?>
<!-- / footer -->
