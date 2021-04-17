function myFunction3() {
  var xx = document.getElementById("lupa");
  var yy = document.getElementById("vyhledat");
  if (yy.style.display === "none") {
    yy.style.display = "block";
    xx.style.display = "none";     
  } else {
    yy.style.display = "none";
    xx.style.display = "block";
  }
}