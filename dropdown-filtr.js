function myFunction2() {
  var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV-popis");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";     
  } else {
    x.style.display = "none";
    y.style.display = "block";
  }
}
/*function myFunction2(elem) {
  // Clear any currently open menu
  var openMenu = document.getElementById("myDIV");
  if (openMenu) {
    openMenu.removeAttribute("id");
    // Stop if we're just closing the current menu
    if (openMenu === elem) {
      return;
    }
  }  */

  // Only apply it if the element actually has LI child nodes.
  // OPTIONAL: Will still work without if statement.
  /*if (elem.getElementsByTagName("li").length > 0) {
    elem.setAttribute("id", "activeMenu");
  }
}  */