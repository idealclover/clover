// 禁止使用微信内置浏览器打开网页
// 小透明・宸 2019.1.15

var ua = navigator.userAgent.toLowerCase();
if (ua.match(/MicroMessenger/i) == "micromessenger") {
  // if (navigator.userAgent.toLowerCase().indexOf('micromessenger') !== -1) {
  var div = document.createElement("div");
  div.setAttribute("id", "fuckWechat");
  div.style.cssText =
    "position: fixed; left: 0; top: 0; width: 100%; height: 100%; box-sizing: border-box; padding: 18px; font-size: 16px; line-height: 1.5em; background-color: rgba(0,0,0,.9); z-index: 2147483647; display: flex; justify-content: center; align-items: center;";
  div.innerHTML =
    "" +
    '<div style="color: #dddddd;">' +
    "<h1>(　^ω^)</h1>" +
    '<p style="color: #175199;">“为什么一些人只使用 QQ 而不使用微信？”</p>' +
    "<p>因为微信是个：</p>" +
    "<ul>" +
    "<li>电脑版功能不全还只能扫码登录</li>" +
    "<li>做不出夜间模式</li>" +
    "<li>群聊不能禁言</li>" +
    "<li>把人拉进群聊不需要本人同意</li>" +
    "<li>无法一键清除小红点</li>" +
    "<li>公众号文章插个外部链接都不行</li>" +
    "</ul>" +
    "<p>……的辣鸡软件，所以我就加上了这个遮罩层把它批判一番 : )</p>" +
    "<p><button style=\"width: 100%; background-color: #175199; color: #fff; border: none; border-radius: 4px; height: 2em;\" onclick=\"document.body.removeChild(document.getElementById('fuckWechat'));document.querySelector('.mdui-appbar').style.filter='';document.querySelector('.mdui-container').style.filter='';\">继续</button></p>" +
    '<p style="text-align: center; color: #bbb; font-size: 16px">使用浏览器打开此页面，即可直接跳过遮罩层</p>' +
    "</div>";

  document.body.append(div);
}
