var message = document.getElementById("message");
message.style.display = "none";
function showhide() {
    if (message.style.display === "none") {
      message.style.display = "block";
    } else {
      message.style.display = "none";
    }
}
var button = document.getElementById("button");
button.addEventListener("click", showhide);