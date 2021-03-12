<?php session_start() ?>
<form action="" method="post">
  <div class="form-group">
    <label for="mail">Email address</label>
    <input type="email" class="form-control" id="mail" name="mail" aria-describedby="emailHelp" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="pwd">Password</label>
    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
	if(!isset($_SESSION["id"]))
	{
		if(isset($_POST["name"]) && isset($_POST["pwd"]))
		{

            function db(){

            $servname = "localhost"; $dbname = "utilisateurs"; $user = "root"; $pwd = "";

            try{
            $pdo = new PDO("mysql:host=$servname;dbname=$dbname", $user , $pwd);
            }
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }

            return $pdo;
        }

        $db = db();

            $user = $db->query("SELECT * FROM utilisateurs WHERE nom = '".$_POST["nom"]."'")->fetch(PDO::FETCH_ASSOC);

            if(password_verify($_POST["pwd"], $user["pwd"]))
			{
				echo json_encode($user);
			}
			else
			{
				echo "wrong password";
			}
		}
	}
?>


<?php

//Il faut faire les vérification pour ce connecter en ajax sans rafraichissement de la pages du coup

  ?>
    <?php





/*if( isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email'])  && isset($_POST['password']) && isset($_POST['c_password'])  && isset($_POST['envoyer']) ){

    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];


        $sel = $db->prepare("select * from utilisateurs where login=? limit 1");
        $sel->execute(array($prenom));
        $tab = $sel->fetch();

            foreach ($tab as $row) {

                if ($row["nom"] !== $nom)
                {
                    array_push($errors, "Le password n'est pas le bon");
                }elseif ($row["email"] !== $email)
                {
                    array_push($errors, "L'adresse email n'est pas la bonne");
                }
    }

        $hpass = $tab["password"];

        if (!password_verify($this->password, $hpass)) {
            array_push($errors, 'Mot de passe invalide');
        }
        if (count($errors) < 1) {
            $_SESSION["user"] = $tab;
            $_SESSION["id"] = $tab["id"];
            $_SESSION["login"] = ucfirst(strtolower($tab["login"]));
        header("Location: index.php");
        } else {
            return $errors;
        }



}*/

?>





<!--<script>

$(document).ready(function(){

    $("#submit").click(function{

        $.post(
            'connexion.php', 
            {
                nom : $("#nom").val(),
                password : $("#password").val()
                prenom : $("#prenom").val()
                email : $("#email").val()
                c_password : $("#c_password").val()
            },
            function(data){ 
            },

            'text' 
         );

    });

});-->

<!--</script>-->





<!--<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body style="display: flex; justify-content: center;">
<h1>Connexion</h1>
<form style="display: flex; flex-direction: column; width: 20%; margin-top: 20%;">
    <label for="prenom">Prenom</label>
    <input type="text" id="prenom" name="prenom"/>


    <label for="nom">Nom</label>
    <input type="text" id="nom" name="nom"/>


    <label for="email">Email</label>
    <input type="email" id="email" name="email"/>

     <label for="password">Password</label>
     <input type="password" id="password" name="password"/>

    <label for="r_password">Confirmer password</label>
    <input type="password" id="r_password" name="r_password"/>

    <input type="submit" name="envoyer" value="envoyer">
</form>



<a href="index.php">Index</a>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
-->