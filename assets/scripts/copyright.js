function copy() {
  if (window.ActiveXObject) {
    document.body.oncopy = function() {
      event.returnValue = false;
      var t = document.selection.createRange().text;
      var s = "原文链接：" + location.href;
      clipboardData.setData("Text", t + "\r\n" + s);
    };
  } else {
    function addLink() {
      var body_element = document.getElementsByTagName("body")[0];
      var selection;
      selection = window.getSelection();
      var pagelink = "\n原文链接：" + location.href;
      var copytext = selection + pagelink;
      var newdiv = document.createElement("div");
      newdiv.style.position = "absolute";
      newdiv.style.left = "-99999px";
      body_element.appendChild(newdiv);
      newdiv.innerHTML = copytext;
      selection.selectAllChildren(newdiv);
      window.setTimeout(function() {
        body_element.removeChild(newdiv);
      }, 0);
    }
    document.oncopy = addLink;
    $("#copyright-true").modal({
      show: true
    });
  }
}
document.oncopy = function() {
  $("#copyright").modal({
    show: true
  });
  return false;
};
document.oncut = function() {
  $("#copyright").modal({
    show: true
  });
  return false;
};
