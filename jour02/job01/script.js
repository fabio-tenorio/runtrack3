function citation() {
    var message = document.getElementById('citation').innerHTML;
    console.log(message);
}
var button = document.getElementById("button");
button.addEventListener("click", citation);