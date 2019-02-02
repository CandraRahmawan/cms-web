window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    var desktopView = window.matchMedia("(min-width: 1024px)");
    if (desktopView.matches) {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("scroll-top").style.display = "block";
        } else {
            document.getElementById("scroll-top").style.display = "none";
        }
    }
}
