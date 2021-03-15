<?php

/*
Dans votre page index.php, créez un tableau permettant de contenir ces
informations ainsi qu’un bouton “update”. Sans rafraichir la page, lorsque
l’on clique sur ce bouton, le tableau doit se mettre à jour et contenir
l’ensemble des informations des utilisateurs présents dans la base de
données.
*/
require_once("users.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Runtrack3 - Jour04 - Job04</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">E-mail</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><!-- id utilisateur --></th>
      <td><!-- prenom --></td>
      <td><!-- nom --></td>
      <td><!-- email --></td>
    </tr>
  </tbody>
</table>
<form action="" method="POST">
    <button class="btn btn-primary" type="button" id="update" name="update">update</button>
</form>

<script>

$("#update").click(function () {
    $.get("users.php", function(data){
    // data = data.replace("string(147)", "");
    console.log(data);
    json = JSON.parse(data);
    // for (i in data) {
    //     console.log(data[i]);
    // }
  });
});
  
// $.ajax({url: "users.php", type: "GET", dataType: "json", success: function(json) {
// json = JSON.parse(json);
//     // for(var y=0;y<151;y++) {
//     //   $.each(type[y].type, function(key, value) {
//     //     $("<option>"+value+"</option>").appendTo("#type");
//     //   })
//     // }
//     console.log(json);
//   }});
// console.log(json);
</script>
</body>
</html>