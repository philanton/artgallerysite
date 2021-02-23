var accs = document.getElementsByClassName('accordion');

for (var i = 0; i < accs.length; i++) {
  accs[i].addEventListener("click", function() {
    this.classList.toggle("openAcc");

    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  })
}
