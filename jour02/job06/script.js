// code konami (haut, haut, bas, bas, gauche, droite, gauche, droite, B, A).
// haut = 38
// bas = 40
// gauche = 37
// droite = 39
// A = 65
// B = 66

var string = "";
var b = document.body;
window.addEventListener('keydown', function(event)
{
    var key = event.key;
    string += key;
    if(string == "ArrowUpArrowUpArrowDownArrowDownArrowLeftArrowRightArrowLeftArrowRightab")
    {
      console.log(string);
      var footer = document.createElement('footer');
      b.prepend(footer);
      var main = document.createElement('main');
      b.prepend(main);
      var header = document.createElement('header');
      b.prepend(header);
      var div = document.createElement('div');
      main.prepend(div);
      var title = document.createTextNode('La Plateforme_');
      var titlefooter = document.createTextNode('footer');
      var titleheader = document.createTextNode('header');
      div.append(title);
      header.append(titleheader);
      footer.append(titlefooter);
    }
})