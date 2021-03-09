var allbody = document.body;
var keylogger = document.getElementById("keylogger");

function unefois(e) {
  keylogger.innerHTML = e.key;
}

function deuxfois(e) {
  keylogger.innerHTML = e.key + e.key;
}

allbody.addEventListener("keydown", unefois);
  
keylogger.addEventListener("keydown", deuxfois);
