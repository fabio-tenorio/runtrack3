<?php
// Créez une page users.php qui se
// connecte à la base de données, récupère l’ensemble des utilisateurs et
// affiche ces informations au format json.

$host = 'localhost';
$db   = 'utilisateurs';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
// $options = [
//     PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//     PDO::ATTR_EMULATE_PREPARES   => false,
// ];
try {
     $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
     throw new PDOException($e->getMessage(), (int)$e->getCode());
}

$statement = $pdo->prepare('SELECT * FROM utilisateurs');
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
$result = json_encode($result);
echo $result;
// var_dump($_GET);
?>