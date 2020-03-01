function show_date_time() {
  window.setTimeout("show_date_time()", 1e3);
  var BirthDay = new Date("2017/05/24 13:14:15"),
    today = new Date(),
    timeold = today.getTime() - BirthDay.getTime(),
    msPerDay = 864e5,
    e_daysold = timeold / msPerDay,
    daysold = Math.floor(e_daysold),
    e_hrsold = 24 * (e_daysold - daysold),
    hrsold = Math.floor(e_hrsold),
    e_minsold = 60 * (e_hrsold - hrsold),
    minsold = Math.floor(60 * (e_hrsold - hrsold)),
    seconds = Math.floor(60 * (e_minsold - minsold));
  span_dt_dt.innerHTML =
    "博客已悄悄运行" +
    daysold +
    "天" +
    hrsold +
    "小时" +
    minsold +
    "分" +
    seconds +
    "秒";
}
show_date_time();

// 代码高亮

hljs.initHighlightingOnLoad();

// 图片预览

$("p img").each(function(i) {
  if (!this.parentNode.href && $(this).attr("type") !== "memo") {
    $(this).wrap(
      "<a href='" +
        this.src +
        "' data-fancybox='fancybox' data-caption='" +
        this.alt +
        "'></a>"
    );
  }
});
$(document).ready(function() {
  $("[data-fancybox]").fancybox();
});

// 动态图标

var titleTime;
var OriginTitile = document.title;
document.addEventListener("visibilitychange", function() {
  if (document.hidden) {
    // var link =
    //   document.querySelector("link[rel*='icon']") ||
    //   document.createElement("link");
    // link.type = "image/x-icon";
    // link.rel = "shortcut icon";
    // link.href = "/favicon2.ico";
    // document.getElementsByTagName("head")[0].appendChild(link);
    document.title = "|ω･) 哎呦~页面不见了~";
    clearTimeout(titleTime);
  } else {
    // var link =
    //   document.querySelector("link[rel*='icon']") ||
    //   document.createElement("link");
    // link.type = "image/x-icon";
    // link.rel = "shortcut icon";
    // link.href = "/favicon.ico";
    // document.getElementsByTagName("head")[0].appendChild(link);
    document.title = "(/≧▽≦)/ 呦吼~肥来啦！";
    titleTime = setTimeout(function() {
      document.title = OriginTitile;
    }, 1000);
  }
});

// 返回页首

$(function() {
  $('[data-toggle="popover"]').popover();
});

window.onscroll = function() {
  var btn = document.getElementsByClassName("turn-up")[0];
  var scroll =
    window.pageYOffset ||
    document.documentElement.scrollTop ||
    document.body.scrollTop;

  if (scroll >= window.innerHeight / 2) {
    btn.classList.add("active");
  } else {
    btn.classList.remove("active");
  }
};

var scroll = new SmoothScroll("a.turn-up, .article-list a", {
  offset: 100
});

// 顶栏通知

$(".close").click(function(e) {
  e.preventDefault();
  $.cookie("alert-box", "closed", {
    path: "/"
  });
  $("#main").css("margin-top", "4.5rem");
});
if ($.cookie("alert-box") !== "closed") {
  $("#main").css("margin-top", "6.5rem");
  $(".alert").css("display", "block");
}
