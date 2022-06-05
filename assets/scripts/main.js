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

// pangu

pangu.spacingElementById("main");

// lazyload

var lazyLoadInstance = new LazyLoad();

// darkmode switch

var darkSwitch = document.getElementById("darkSwitch");
window.addEventListener("load", function () {
  if (darkSwitch) {
    var darkThemeSelected =
      localStorage.getItem("darkSwitch") !== null &&
      localStorage.getItem("darkSwitch") === "dark";
    darkSwitch.checked = darkThemeSelected;
    darkSwitch.addEventListener("change", function () {
      resetTheme();
    });
  }
});

function resetTheme() {
  if (darkSwitch.checked) {
    document.body.setAttribute("data-theme", "dark");
    localStorage.setItem("darkSwitch", "dark");
  } else {
    document.body.removeAttribute("data-theme");
    localStorage.removeItem("darkSwitch");
  }
}

// enable popover

$(function () {
  $('[data-toggle="popover"]').popover();
});

// 返回页首

window.onscroll = function () {
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

var scroll = new SmoothScroll("a.turn-up, .article-list a");

// 顶栏通知

$(".close").click(function (e) {
  e.preventDefault();
  localStorage.setItem("alert-box", "closed");
  $("#main").css("margin-top", "4.5rem");
});
if (localStorage.getItem("alert-box") !== "closed") {
  $("#main").css("margin-top", "6.5rem");
  $(".alert").css("display", "block");
}

// 锚点偏移

if (
  // window.location.hash.indexOf("#") >= 0 &&
  // window.location.hash.indexOf("#top") < 0
  window.location.hash.indexOf("#comment") >= 0
) {
  let padding = localStorage.getItem("alert-box") !== "closed" ? 60 : 10;
  $("html,body").animate(
    {
      scrollTop: $(window.location.hash).offset().top - padding + "px",
    },
    300
  );
}

// 目录

//Executes your code when the DOM is ready.  Acts the same as $(document).ready().
$(function () {
  $("#toc").tocify({
    context: ".single-post",
    selectors: "h2,h3",
    extendPage: false,
    scrollTo: localStorage.getItem("alert-box") !== "closed" ? 100 : 50,
    smoothScroll: false,
    // hideEffect: "slidUp",
    hashGenerator: function (text, element) {
      return element["context"]["firstChild"]["id"];
    },
  });
  if ($("#toc ul li").length > 0) {
    $("#toc").parent().parent().show();
    $("#sidebar-sticky-top").addClass("sticky-top");
  }
});

// 动态图标

var titleTime;
var OriginTitile = document.title;
document.addEventListener("visibilitychange", function () {
  if (document.hidden) {
    document.title = "|ω･) 哎呦~页面不见了~";
    clearTimeout(titleTime);
  } else {
    document.title = "(/≧▽≦)/ 呦吼~肥来啦！";
    titleTime = setTimeout(function () {
      document.title = OriginTitile;
    }, 1000);
  }
});

// 获取关注者

$(".shield-item").each(function (i, e) {
  $.getJSON(e.getAttribute("data-url"), function (data) {
    let num = eval(e.getAttribute("data-query"));
    $("#shield-number-" + e.getAttribute("data-id"))[0].innerHTML =
      typeof num == "undefined" || num == 0 ? "Error" : num;
  });
});

// 代码高亮

hljs.initHighlightingOnLoad();
$("pre").each(function (i, e) {
  $(this).html(
    '<div class="code-toolbar">' +
      $(this)
        .html()
        .replace("<code", '<code id="codeblock' + i + '"') +
      '<div class="toolbar"><div class="toolbar-item"><span>' +
      // $this.html() +
      '</span></div><div class="toolbar-item"><button class="btn-copycode" data-clipboard-target="#codeblock' +
      i +
      '">Copy</button></div></div><div>'
  );
});
$("pre code").each(function () {
  $(this).html(
    "<ul><li>" + $(this).html().replace(/\n/g, "\n</li><li>") + "\n</li></ul>"
  );
});
setTimeout(function () {
  $("pre").each(function (i, e) {
    let html = $(this)[0].outerHTML;
    let re = /class="hljs (.*?)"/;
    let type = html.match(re);
    if (type[1] != null)
      $(this).find(".toolbar-item span")[0].innerHTML = type[1];
  });
}, 0);
var clipboard = new ClipboardJS(".btn-copycode");
clipboard.on("success", function (e) {
  e.trigger.innerHTML = "Copied!";
  setTimeout(function () {
    e.trigger.innerHTML = "Copy";
  }, 3000);
  e.clearSelection();
});

// 图片预览

$("p img").each(function (i) {
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
$(document).ready(function () {
  $("[data-fancybox]").fancybox();
});

// <!-- start webpushr code -->
// (function (w, d, s, id) {
//   if (typeof w.webpushr !== "undefined") return;
//   w.webpushr =
//     w.webpushr ||
//     function () {
//       (w.webpushr.q = w.webpushr.q || []).push(arguments);
//     };
//   var js,
//     fjs = d.getElementsByTagName(s)[0];
//   js = d.createElement(s);
//   js.id = id;
//   js.async = 1;
//   js.src = "https://cdn.webpushr.com/app.min.js";
//   fjs.parentNode.appendChild(js);
// })(window, document, "script", "webpushr-jssdk");
// webpushr("setup", {
//   key: "BAb2EacytRPuGvZGf1OO6OI-4olXc4Jh9cB3ujlVXzFHBzyFrdNjTANFumFbPmaDM2xnS21-xlHVrlugAREK_kk",
// });
// <!-- end webpushr code -->

function googleTranslateElementInit() {
  new google.translate.TranslateElement(
    {
      pageLanguage: "zh-CN",
      includedLanguages:
        "en,zh-CN,zh-TW,hr,cs,da,nl,fr,de,el,iw,hu,ga,it,ja,ko,pt,ro,ru,sr,es,th,vi",
      autoDisplay: false,
    },
    "google_translate_element"
  );
}

if ("serviceWorker" in navigator) {
  console.log("Will the service worker register?");
  navigator.serviceWorker
    .register("https://idealclover.top/sw.js")
    .then(function (reg) {
      console.log("Yes, it did.");
    })
    .catch(function (err) {
      console.log("No it did not. This happened: ", err);
    });
}
