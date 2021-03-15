<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Runtrack 3 - jour06 - job01</title>
</head>
<body>
    <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum, quos?</h1>
    <script>
        
        function addCss(fileName) {
        var head = document.head;
        var link = document.createElement("link");
        link.type = "text/css";
        link.rel = "stylesheet";
        link.href = fileName;
        head.appendChild(link);
        }

        // la feuille d'style change selon la taille de l'écran
        // mais le changement d'style n'arrive qu'après rafraichissiment de la page 

        if (window.matchMedia("(max-width: 1280px)").matches) {
            addCss('style4.css');
        } else if (window.matchMedia("(min-width: 1280px)").matches && window.matchMedia("(max-width: 1680px)").matches) {
            addCss('style3.css');
        } else if (window.matchMedia("(min-width: 1680px)").matches && window.matchMedia("(max-width: 1920px)").matches) {
            addCss('style2.css');
        } else {
            addCss('style1.css');
        }
        
    </script>
</body>
</html>