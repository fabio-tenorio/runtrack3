<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Runtrack3 - jour04 - job03</title>
</head>
<body class="container">
    <form class="form">
        <h1>Cherche ton pokémon: </h1>
        <div id="parsing">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="byid" id="byid">
                <label class="form-check-label" for="byid">
                    par son id
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="byname" id="byname">
                <label class="form-check-label" for="byname">
                    por son nom
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="bytype" id="bytype">
                <label class="form-check-label" for="bytype">
                    por son type
                </label>
            </div>
        </div>
        <div class="form-group hidden" id="chooseid">
            <label for="id">id: </label>
            <input id="input_id" name="id" type="text">
        </div>
        <div class="form-group hidden" id="choosename">
            <label for="nom">nom du Pokémon: </label>
            <input id="nom" name="nom" type="text">
        </div>
        <div class="form-group hidden" id="choosetype">
            <label for="type">Choisie le type du Pokémon:</label>
            <select name="type" id="type">
                <!-- <option value="">--les espèces de Pokémon--</option> -->
            </select>
        </div class="form-group">
        <button class="btn btn-primary" type="button" id="filtrer">filtrer</button>
    </form>
    <div id="result"></div>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>