// 禁止使用微信内置浏览器打开网页
// 小透明・宸 2019.1.15

var ua = navigator.userAgent.toLowerCase();
if (ua.match(/MicroMessenger/i) == "micromessenger") {
// if (navigator.userAgent.toLowerCase().indexOf('micromessenger') !== -1) {
    var div = document.createElement('div');
    div.setAttribute('id', 'fuckWechat');
    div.style.cssText = 'position: fixed; left: 0; top: 0; width: 100%; height: 100%; box-sizing: border-box; padding: 18px; font-size: 16px; line-height: 1.5em; background-color: rgba(0,0,0,.5); z-index: 2147483647; display: flex; justify-content: center; align-items: center;'
    div.innerHTML = ''
      + '<div style="color: #dddddd;">'
      +     '<h1>(　^ω^)</h1>'
      +     '<p style="color: #175199;">“为什么一些人只使用 QQ 而不使用微信？”</p>'
      +     '<p>因为微信是个：</p>'
      +     '<ul>'
      +     '<li>电脑版功能不全还只能扫码登录</li>'
      +     '<li>做不出夜间模式</li>'
      +     '<li>群聊不能禁言</li>'
      +     '<li>把人拉进群聊不需要本人同意</li>'
      +     '<li>无法一键清除小红点</li>'
      +     '<li>公众号文章插个外部链接都不行</li>'
      +     '</ul>'
      +     '<p>……的辣鸡软件，所以我就加上了这个遮罩层把它批判一番 : )</p>'
      +     '<p><button style="width: 100%; background-color: #175199; color: #fff; border: none; border-radius: 4px; height: 2em;" onclick="document.body.removeChild(document.getElementById(\'fuckWechat\'));document.querySelector(\'.mdui-appbar\').style.filter=\'\';document.querySelector(\'.mdui-container\').style.filter=\'\';">继续</button></p>'
      +     '<p style="text-align: center; color: #bbb; font-size: 14px">使用浏览器打开此页面，即可直接跳过遮罩层</p>'
      + '</div>';

    document.body.append(div);
}

// function is_weixin() {
//     var ua = navigator.userAgent.toLowerCase();
//     if (ua.match(/MicroMessenger/i) == "micromessenger") {
//         return true;
//     } else {
//         return false;
//     }
// }
// var isWeixin = is_weixin();
// // var isWeixin = false;
// var winHeight = typeof window.innerHeight != 'undefined' ? window.innerHeight : document.documentElement.clientHeight;

// function loadHtml() {
//     var div = document.createElement('div');
//     div.id = 'weixin-tip';
//     // div.innerHTML = '<img src="<?php $this->options->themeUrl('assets/fuckweixin.png'); ?>" alt="微信打开"/>';
//     div.innerHTML = '<img src="https://i.loli.net/2019/06/25/5d11d9c19065848452.png" alt="微信打开"/>';
//     document.body.appendChild(div);
// }

// function loadStyleText(cssText) {
//     var style = document.createElement('style');
//     style.rel = 'stylesheet';
//     style.type = 'text/css';
//     try {
//         style.appendChild(document.createTextNode(cssText));
//     } catch (e) {
//         style.styleSheet.cssText = cssText; //ie9以下
//     }
//     var head = document.getElementsByTagName("head")[0]; //head标签之间加上style样式
//     head.appendChild(style);
// }

// var cssText = "img{max-width: 100%; height: auto;} #weixin-tip{position: fixed; left:0; top:0; background: rgba(0,0,0,0.8); filter:alpha(opacity=80); width: 100%; height:100%; z-index: 1050;} #weixin-tip p{text-align: center; margin-top: 10%; padding:0 5%;}";
// if (isWeixin) {
//     loadHtml();
//     loadStyleText(cssText);
// }
