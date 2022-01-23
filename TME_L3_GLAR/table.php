<?php
$servername="localhost";
$username="root";
$password="";
$database="sama_marche";
try{
	//On etabli la connexion
	$db=new PDO("mysql:host=$servername;dbname=$database",$username,$password);
	//On definit le mode d'erreur de PDO sur exception
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//On cree la base de donnée
	$sql1="CREATE TABLE clients(
      id int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      nom Varchar(30) NOT NULL,
      prenom Varchar(30) NOT NULL,
      email Varchar(45) NOT NULL,
      mdp Varchar(30) NOT NULL  
)";
	$db->exec($sql1);
	if($db!=false)
	echo "TABLE CREE";
	

$sql2="CREATE TABLE products(
      id int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name double NOT NULL,
      price Varchar(50) NOT NULL,
      
      description Varchar(400) NOT NULL  
)";
	$db->exec($sql2);
	if($db!=false)
	echo "TABLE CREE";
	

$sql3="INSERT INTO `products` (`id`, `name`, `price`, `description`) VALUES
(1, 'beignet', 100, 'Bla bla bla'),
(2, 'crepes', 150, 'Un autre bla bla'),
(3, 'miel', 1500, 'Puis une autre bla bla'),
(4, 'lait', 750, 'Encore des bla bla');
(5, 'nouilles', 500, 'Bla bla bla'),
(6, 'souchi', 5000, 'Un autre bla bla'),
(7, 'pain',175, 'Puis une autre bla bla'),
(8, 'gateau', 1500, 'Encore des bla bla');"
$db->exec($sql3);
	if($db!=false)
	echo "produits ajoutées";
//on peut ajouter dans les utilisateur en creant simplement un compte sur la page d'inscription

}
	//On capture les exceptions si une exception est lancée et on affiche les infos relatives à celle ci

	catch(PDOException $e){
		echo "Erreur: ".$e->getMessage();
	}



 ?>