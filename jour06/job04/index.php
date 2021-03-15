<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Runtrack 2 - jour 06 - job04</title>
</head>
<body>
    <header>
        <div id="menu">
            <img id="hamburguer" src="hamburguer.png" alt="">
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Présentation</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </header>
    <main>
        <section class="section"></section>
        <section class="section"></section>
        <section class="section"></section>
        <section class="section"></section>
    </main>
    <script>
        var clickCount = 2;
        $("#hamburguer").click(function() {
            console.log(clickCount);
            clickCount ++ % 2 === 0 ? clickCount = 3 : clickCount = 0;
            if (clickCount === 3) {
                $("ul").css("display", "flex");
            } else {
                $("#hamburguer").css("display", "flex");
                $("ul").css("display", "none");
            }
        });
    </script>
</body>
</html>