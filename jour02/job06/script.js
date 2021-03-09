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
    if(string == "ArrowUpArrowUpArrowDownArrowDownArrowLeftArrowRightArrowLeftArrowRight")
    {
        console.log('konami ok');
        var footer = document.createElement('footer');
        b.prepend(footer);
        var main = document.createElement('main');
        b.prepend(main);
        var header = document.createElement('header');
        var title = document.createTextNode('La Plateforme_');
        var titlefooter = document.createTextNode('footer');
        var titlemain = document.createTextNode('main');
        b.prepend(header);
        header.append(title);
        main.append(titlemain);
        footer.append(titlefooter);
    }
})