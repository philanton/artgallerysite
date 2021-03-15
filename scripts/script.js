$(document).tooltip();

const contacts = {
  _phoneNumber: "+38 (099) 691-77-32",
  _address: "Україна. Київ. Вулиця Борщагівська, 126. 02000.",
  get phoneNumber() {return this._phoneNumber;},
  get address() {return this._address;}
}

window.onscroll = becomeStickyHeader;

function becomeStickyHeader() {
  let header, sticky;
  header = document.getElementsByTagName("header")[0];
  ticky = header.offsetTop;

  if (window.pageYOffset >= sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

function openTabContent(event, ContentType) {
  let tabscontent, tabs;

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
