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

function openTabContent(event, ContentType) {
  var tabscontent, tabs;

  tabscontent = document.getElementsByClassName("tabContent");
  for (var i = 0; i < tabscontent.length; i++) {
    tabscontent[i].style.display = "none";
  }

  tabs = document.getElementsByClassName("tab");
  for (var i = 0; i < tabs.length; i++) {
    tabs[i].className = tabs[i].className.replace(" active", '');
  }

  document.getElementById(ContentType).style.display = "block";
  event.currentTarget.className += " active";
}
