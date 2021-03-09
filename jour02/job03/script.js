var clicks = 0;
function addone() {
  clicks ++;
  document.getElementById("compteur").innerHTML = clicks;
}
var button = document.getElementById("button");
button.addEventListener("click", addone);