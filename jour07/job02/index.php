<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Runtrack3 - jour07 - job01</title>
</head>
<body>
    <head>
        <nav class="navbar navbar-expand-lg navbar-light bg-light p-4 m-0">
            <a class="navbar-brand" href="#">LPTF</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Units</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Skills</a>
                    </li>
                </ul>
            </div>
        </nav>
    </head>
    <main style="background-color: #DCDCDC" class="container-fluid">
        <section style="height: 70vh;" class="justify-content-evenly p-3 my-5 align-items-start row">
            <div>
                <h1 class="justify-content-md-center row my-4 display-1">LaPlateforme_</h1>
            </div>
            <div class="card px-0" style="width: 14rem;">
                <img class="card-img-top" src="https://fac.img.pmdstatic.net/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2Ffac.2F2020.2F09.2F08.2Fdb17db7f-3242-4f61-8676-1987414ec341.2Ejpeg/850x478/quality/90/crop-from/center/quels-sont-les-papillons-du-jardin.jpeg" alt="papillon">
                <div class="card-body">
                    <h5 class="card-title">Un Papillon</h5>
                    <p class="card-text">Un papillon, c'est un peu comme une chenille, mais avec des ailles. Ne pas ingerer.</p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Commander votre propre papillon
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Papillon</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    vous confirmez l'achat d'un joli papillon au prix abordable?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">non, annuler l'achat</button>
                                    <button type="button" class="btn btn-primary">oui, je confirme l'achat</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="background-color: #E9ECEF;" class="col-9 mx-5 p-5 h-95 rounded">
                <h2 id="#monde" class="display-1"></h2>
                <div id="text">
                    <p class="p-2">Il existe plusieurs visions du terme:</p>
                    <p class="p-2">le monde est la matière, l'espace et les phénomènes qui nous sont accessibles par les sens, l'expérience ou la raison.</p>
                    <p class="p-2">Le sens le plus courant désigne notre planète, la Terre, avec les habitants et son environement plus ou moins naturel.</p>
                    <hr>
                    <p class="p-2">Le sens entendu désigne l'univers dans son ensemble.</p>
                </div>
                <button id="rebooter" class="btn btn-danger btn-lg">Rebooter le monde</button>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        <li class="page-item"> 
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                        </li> <!--Barre-->
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <div class="page-item">
                        </div>
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-1">
                <ul class="list-group">
                    <li class="list-group-item active">Limbes</li>
                    <li class="list-group-item">Luxure</li>
                    <li class="list-group-item">Gourmandise</li>
                    <li class="list-group-item">Avarice</li>
                    <li class="list-group-item">Colère</li>
                    <li class="list-group-item">Heresie</li>
                    <li class="list-group-item">Violence</li>
                    <li class="list-group-item">Ruse et Tromperie</li>
                    <li class="list-group-item">Trahison</li>
                    <li class="list-group-item">Internet Explorer</li>
                </ul>
            </div>
        </section>
        <section>
            <div class="container px-4">
                <div style="height: 50px;" class="row gx-5 mb-5 mx-5">
                    <p class="row justify-content-end">Installation de AI 9000</p>
                    <div style="display: flex; justify-content: center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z"/>
                        </svg>
                            <div class="progress" style="width: 1000px;">
                                <div class="progress-bar progress-bar-striped bg-warning"  role="progressbar"  style="width: 30% " aria-valuenow="20" aria-valuemin="" aria-valuemax="50"></div>
                            </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"/>
                        </svg>
                    </div>
                </div>
                <div class="row py-4 justify-content-between">
                    <div class="col col-md-6">
                        <form class="p-4">
                            <div class="form-row align-items-center">
                                <div class="col-auto">
                                    <label class="sr-only" for="inlineFormInputGroup"><h4>Recevez votre copie gratuite d'internet 2!</h4></label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">@</div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Login">
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <label class="sr-only" for="inlineFormInputGroup"></label>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Mot de passe">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">@example.com</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <label class="sr-only" for="inlineFormInputGroup"><h5>URL des internets 2 et 2.1 beta</h5></label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-text">DogeCoin</div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Mot de passe">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">https://l133t.lptf/dkwb/berlusconimkt</div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Mot de passe">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col col-md-4">
                        <form class="p-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script>
        var text = [];
        number = 0;
        text[number] = "Bonjour, monde";
        
        $("#rebooter").click(function () {
        // ici, on defini les messages
        text[number++] = "Vous lisez un magazine et vous tombez sur toute une page de photos de filles nues."
        text[number++] = "Vous me testez pour savoir si je suis un réplicant ou une lesbienne, monsieur Deckard ? "
        text[number++] = "Le commerce est notre seul but chez Tyrell. Plus humain que l'humain est notre devise."
        text[number++] = "T'endors pas, c'est l'heure de mourir."
        text[number++] = "J'ai vu tant de choses que vous, humains, ne pourriez pas croire."
        // vous pouvez continuer a ajouter des items apres

        increment = Math.floor(Math.random() * number);
        $("#text").append("</p>"+text[increment]+"</p>");
        });
    </script>
</body>
</html>