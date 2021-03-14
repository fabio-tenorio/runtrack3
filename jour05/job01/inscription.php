<?php
// envoie une requête à la bdd pour INSERT les infos du form avec la méthode POST
// l'affichage du form et le comportement du bouton d'envoi sera géré par le script js

// peut-être déplacer cette fonction vers index.php
function connexion_db(string $database) {
  $db = $database;
  $host='localhost';
  $user='root';
  $pwd='';
  $charset='utf8mb4';
  $connection="mysql:host=$host;dbname=$db;charset=$charset";
  $settings=[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  ];
  try {
    $pdo=new PDO($connection, $user, $pwd, $settings);
    return $pdo;
  } catch (PDOException $exception) {
    throw new PDOException ($exception->getMessage(), (int)$exception->getCode());
  }
}

if (isset($_POST['button'])) {
  foreach ($_POST as key => value) {
    if 
  }
  $prenom = $_POST['firstname'];
  $nom = $_POST['lastname'];
  $email = $_POST['mail'];
  $pwd = $_POST['pwd'];
  $pwdconfirm = $_POST['pwdconfirm'];
  $hashedpwd = password_hash($pwd, PASSWORD_BCRYPT);
  
  $pdo=connexion_db('utilisateurs');
  $sql= "INSERT INTO utilisateurs (nom, prenom, email, password) VALUES (:nom, :prenom, :email, :password)";
  $statement=$pdo->prepare($sql);
  $result =$statement->execute(['nom'=>$nom,'prenom'=>$prenom, 'email'=>$email, 'password'=>$hashedpwd]);
}

// tous les contrôles doivent se deplacer dans le script
// $login=$tab['login'];
// $login = htmlspecialchars($tab['login']);
// $password=$tab['password'];
// $password2=$tab['password2'];
// $prenom=$tab['prenom'];
// $nom=$tab['nom'];
// if(!empty($login) AND !empty($password)AND !empty($password2))
// {  
//     $loginlength = strlen($login);
//     if ($loginlength <= 255)
//     {   
//         $pdo=$this->connectdb('reservationsalles');
//         $reqlogin = $pdo->prepare("SELECT login FROM utilisateurs WHERE login =:login");
//         $reqlogin->execute(array('login'=>$login));
//         $loginexist = $reqlogin->rowCount();
//         if($loginexist == 0) 
//         { 
//             if($password == $password2)
//             {
//             $hashedpass = password_hash($password, PASSWORD_BCRYPT);
            
//             $pdo=$this->connectdb('reservationsalles');
//             $sql= "INSERT INTO utilisateurs (login, password, prenom, nom) VALUES (:login, :password, :prenom, :nom)";
//             $stm=$pdo->prepare($sql);
//             $result =$stm->execute(['login'=>$login,'password'=>$hashedpass,'prenom'=>$prenom,'nom'=>$nom]);
//             $this->erreur = "<span>vous êtes inscrit-e</span><a href=\"connexion.php\">me connecter</a>";
//             }
//             else 
//             {
//             return $this->erreur = "vos mots de passes ne correspondent pas !";
//             }   
//         }
//         elseif ($loginexist>0)
//         {
//             return $this->erreur = "vous êtes déjà inscrit";
//         }
//     }
//     else
//     {
//     return $this->erreur = "Votre nom ne doit pas dépasser 255 caractères !";
//     }
// }
// else
// {
// return $this->erreur = "Tous les champs doivent être complétés !";
// }

?>
<form action="#" method="POST">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="firstname">First name</label>
      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="lastname">Last name</label>
      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name" required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="mail">E-mail</label>
      <input type="email" class="form-control" id="mail" name="mail" placeholder="example@example.fr" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="pwd">Password</label>
      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="your password" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="pwdconfirm">Confirm password</label>
      <input type="password" class="form-control" id="pwdconfirm" name="pwdconfirm" placeholder="confirm your password" required>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <button class="btn btn-primary" type="submit" name="button" id="inscriptionbutton">Submit</button>
</form>