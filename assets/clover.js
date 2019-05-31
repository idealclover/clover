// 返回页首
function turn_up() {
    var btn = document.getElementsByClassName("turn-up")[0];
    var scroll = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;

    if (scroll >= window.innerHeight / 2) {
        btn.classList.add("active");
    } else {
        btn.classList.remove("active");
    }
}

window.onscroll = function () {
    turn_up();
};