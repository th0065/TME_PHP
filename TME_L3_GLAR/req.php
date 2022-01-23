<?php
$servername = "localhost";
$username = 'root';
$password = "";
$base_de_donne = "mabase";
$dbco = new PDO("mysql:host=$servername;dbname=$base_de_donne", $username, $password);
// 1. prepare la requete
$req = $dbco->query('SELECT * FROM `utilisateur`');
// 2. execute la requete
$req->execute();
// 3. recupere les donnees
$donnees = $req->fetchAll();
echo "<pre>";
var_dump($donnees);
echo "</pre>";