function ChangeHeigh_16_9() {
    var width = document.getElementsByClassName("body_video")[0].clientWidth;
    document.getElementsByClassName("body_video")[0].style.height =
        (width * 9.0) / 16 + "px";
}
