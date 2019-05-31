<?php
/**
 * 豆瓣清单
 *
 * @package custom
 */
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
?>
<?php $this->need('components/header.php'); ?>

<?php
require 'libs/ParserDom/ParserDom.php';

//获取书籍清单数据

function getBookData($userID)
{
    $url = "https://api.douban.com/v2/book/user/$userID/collections?count=100"; //最多取100条数据
    $res = json_decode(curl_get_contents($url), true); //读取api得到json
    $res = $res['collections'];
    if ($res == null || $res == "") {
        echo '<script>$(function(){$(".douban_book_tips").text("获取书籍数据失败，可能原因是：1. 豆瓣API发生故障 2. 豆瓣id配置错误")})</script>';
        return [];
    }
    foreach ($res as $v) {
        //已经读过的书
        if ($v['status'] == "read") {
            $book_name = $v['book']['title'];
            $book_img = $v['book']['images']['medium'];
            $book_img = str_replace("/view/subject/m/public/", "/lpic/", $book_img);
            $book_url = $v['book']['alt'];
            $readlist[] = array("name" => $book_name, "img" => $book_img, "url" => $book_url);
        }
    }

    return $readlist;
}

//获取电影清单数据
function getMovieData($userID)
{

    $movieList = [];
    $filePath = __DIR__ . '/assets/cache/movie.json';

    $fp = fopen($filePath, 'r');
    if ($fp) {
        $contents = fread($fp, filesize($filePath));
        fclose($fp);
        $data = json_decode($contents);

        if (time() - $data->time > 60 * 60 * 72) { //缓存文件过期
            $movieList = updateData($userID, $filePath);
        } else {
            $lastUpdateTime = date('Y-m-d', $data->time); //H 24小时制 2017-08-08 23:00:01
            if ($data->user != null && $data->user !== $userID) { //用户名有修改
                $movieList = updateData($userID, $filePath);
            } else {
                if ($data->data == null || $data->data == "") { //缓存文件中的电影数据为空
                    $movieList = updateData($userID, $filePath);
                } else { //读取缓存文件中的数据
                    $movieList = $data->data;
                    echo '<script>$(function(){$(".douban_tips").text("以下数据最后更新于' . $lastUpdateTime . '")})</script>';
                }
            }
        }
    } else { //目录下无movie.json，此时需要创建文件，并且更新信息
        $movieList = updateData($userID, $filePath);
    }

    return $movieList;
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


function updateData($doubanID = 'ihewro', $filePath)
{
    $url = "https://movie.douban.com/people/$doubanID/collect"; //最多取100条数据
    $p1 = getHTML($url);
    $p1 = getMoviesAndNextPage($p1);
    $movieList = array_merge($p1['data']);
    $num = 0;
    while ($p1['next'] != null && $num <= 3) {
        //echo "下一页地址" . $p1['next'];
        $p1          = getHTML($p1['next']);
        $p1          = getMoviesAndNextPage($p1);
        $movieList = array_merge($movieList, $p1['data']);
        $num++;
    }
    if ($movieList == null || $movieList == "") {
        echo '<script>$(function(){$(".douban_tips").text("获取电影数据失败，可能原因是：1. ip被豆瓣封锁 2. 豆瓣id配置错误 3. 服务器不支持curl扩展")})</script>';
    } else {
        echo '<script>$(function(){$(".douban_tips").text("添加缓存数据成功，请刷新一次页面查看最新数据（如果一直提示刷新，请勿将全站静态缓存）")})</script>';
    }
    $data = fopen($filePath, "w");
    fwrite($data, json_encode(['time' => time(), 'user' => $doubanID, 'data' => $movieList]));
    fclose($data);
    return [];
}

function getMoviesAndNextPage($html = '')
{
    if ($html != "" && $html != null) {
        $doc       = new \HtmlParser\ParserDom($html);
        $itemArray = $doc->find("div.item");
        foreach ($itemArray as $v) {
            $t = $v->find("li.title", 0);
            $movie_name = trimall($t->getPlainText());
            $movie_img  = $v->find("div.pic a img", 0)->getAttr("src");
            $movie_url  = $t->find("a", 0)->getAttr("href");
            //已经读过的电影
            $movieList[] = array("name" => $movie_name, "img" => $movie_img, "url" => $movie_url);
        }

        $t = $doc->find("span.next a", 0);
        if ($t) {
            $t = "https://movie.douban.com" . $t->getAttr("href");
        } else {
            $t = null;
        }
        return ['data' => $movieList, 'next' =>  $t];
    } else {
        return ['data' => [], 'next' => null];
    }
}

function getHTML($url = '')
{
    $ch = curl_init();
    $cookie = 'bid=gnHfdKIXco; ll="108238"; gr_user_id=3a665fce-2a1c-44c7-8e18-531ea651fe6f; _ga=GA1.2.50077311.1505560162; ap=1; ue="ihewro@qq.com"; push_noty_num=0; push_doumail_num=0; _vwo_uuid_v2=0FFDB41687CE3A48C32CB74C8C415F7C|572ba7f63d2101533eb21c21814fd0f5; __utmv=30149280.13002; viewed="24251326"; __utmc=30149280; __utmc=223695111; ps=y; dbcl2="130023498:EFP11hbTQ+w"; ck=v1u1; _pk_ref.100001.4cf6=%5B%22%22%2C%22%22%2C1518071897%2C%22http%3A%2F%2Flocalhost%2Fbuild%2F35.html%22%5D; _pk_ses.100001.4cf6=*; ct=y; __utma=30149280.50077311.1505560162.1518071897.1518074552.44; __utmb=30149280.0.10.1518074552; __utmz=30149280.1518074552.44.24.utmcsr=google|utmccn=(organic)|utmcmd=organic|utmctr=(not%20provided); __utma=223695111.192490176.1505819273.1518071897.1518074552.23; __utmz=223695111.1518074552.23.11.utmcsr=google|utmccn=(organic)|utmcmd=organic|utmctr=(not%20provided); _pk_id.100001.4cf6=f4672bae215755ca.1505819273.22.1518074849.1518066090.; __utmb=223695111.4.10.1518074552';

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_COOKIE, $cookie);

    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36');

    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

function trimall($str)
{
    $qian = array(" ", "　", "\t", "\n", "\r");
    $hou  = array("", "", "", "", "");
    return str_replace($qian, $hou, $str);
}

?>

<style>
    .moviecard {
        margin: 1rem 1.4rem;
    }

    .movieimg {
        object-fit: cover;
        width: 100%;
    }

    .movietitle {
        height: 4rem;
    }

    .moviename {
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
                    <h2>我的书单</h2>
                    <small class="text-muted m-xs letterspacing douban_book_tips"><i class="fontello fontello-clock-o m-xs" aria-hidden="true"></i>以下数据为实时从豆瓣API读取</small>
                    <div class="row">
                        <?php
                        $readList = getBookData($this->fields->doubanID);
                        foreach ($readList as $v) : ?>
                            <div class="card moviecard" style="width: 10rem;">
                                <img class="card-img-top movieimg" src="<?php echo $v['img']; ?>" alt="Card image cap" style="height:12rem;">
                                <div class="card-body movietitle">
                                    <a class="card-title moviename" target="_blank" target="_blank" href="<?php echo $v['url']; ?>"><?php echo $v['name']; ?></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <h2>我的观影</h2>
                    <div class="text-muted m-xs">
                        <i class="fontello fontello-clock-o m-xs" aria-hidden="true"></i>
                        <small class="letterspacing douban_tips"></small>
                    </div>
                    <div class="row">
                        <?php
                        $movieList = getMovieData($this->fields->doubanID);
                        foreach ($movieList as $v) : ?>
                            <div class="card moviecard" style="width: 10em;">
                                <img class="card-img-top movieimg" src="<?php echo $v->img; ?>" alt="Card image cap" style="height:12rem;">
                                <div class="card-body movietitle">
                                    <a class="card-title moviename" target="_blank" href="<?php echo $v->url; ?>"><?php echo $v->name; ?></a>
                                </div>
                            </div>
                            <!-- <div class="col-xs-6 col-sm-4 col-md-3">
                                    <div class="panel panel-default box-shadow">
                                        <div class="panel-body no-padder">
                                            <a target="_blank" href="<?php echo $v->url; ?>">
                                                <img class="img-full no-padder m-n douban-list" src="<?php echo $v->img; ?>">
                                            </a>
                                        </div>
                                        <div class="panel-footer">
                                            <span class="text-ellipsis"><?php echo $v->name; ?></span>
                                        </div>
                                    </div>
                                </div> -->
                        <?php endforeach; ?>
                    </div>
                </div>
            </article>
            <?php $this->need('components/comments.php'); ?>
        </div>
        <?php $this->need('components/sidebar.php'); ?>
    </div>
</div><!-- end #main-->

<script type="text/javascript">
    $(document).ready(function() {
        $(".booklist .section ul li .rsp").hide();
        $(".booklist .section    ul li").hover(function() {
                $(this).find(".rsp").stop().fadeTo(500, 0.5)
                $(this).find(".text").stop().animate({
                    left: '0'
                }, {
                    duration: 500
                })
            },
            function() {
                $(this).find(".rsp").stop().fadeTo(500, 0)
                $(this).find(".text").stop().animate({
                    left: '30'
                }, {
                    duration: "fast"
                })
                $(this).find(".text").animate({
                    left: '-300'
                }, {
                    duration: 0
                })
            });
    });
</script>

<!-- footer -->
<?php $this->need('components/footer.php'); ?>
<!-- / footer -->