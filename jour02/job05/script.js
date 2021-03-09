var cameleon = document.getElementById("cameleon");
var body = document.getElementById("bodybg")
var val = window.scrollY;
window.scroll(0,0);

bodybg.onscroll = function() {
  cameleon.style.color = "lightgray";
  cameleon.style.backgroundColor = `rgba(0, 32, 255, ${window.scrollY/1000} )`;
};