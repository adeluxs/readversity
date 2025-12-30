// Admin Collapsible Sidebar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
    document.getElementById("menu").style.marginTop = "-59px";
  } else {
    document.getElementById("menu").style.marginTop = "0px";
  }
}
