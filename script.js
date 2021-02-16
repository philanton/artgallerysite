window.onload = function() {
  window.onscroll = becomeStickyHeader;

  var header = document.getElementsByTagName("header")[0];

  var sticky = header.offsetTop;

  function becomeStickyHeader() {
    if (window.pageYOffset >= sticky) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  }
}
