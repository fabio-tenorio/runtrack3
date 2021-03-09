var camaleon = document.getElementById("camaleon");
var body = document.getElementById("bodybg")
var val = window.scrollY;

console.log(val);

bodybg.onscroll = function() {
  camaleon.style.color = "lightgray";
  camaleon.style.backgroundColor = `rgba(0, 32, 255, ${window.scrollY/1000} )`;
};