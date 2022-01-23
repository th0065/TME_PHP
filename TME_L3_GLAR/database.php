<?php
$servername="localhost";
$username="root";
$password="";
try{
	//On etabli la connexion
	$conn=new PDO("mysql:host=$servername",$username,$password);
	//On definit le mode d'erreur de PDO sur exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//On cree la base de donnée
	$sql="CREATE DATABASE sama_marche";
	$conn->exec($sql);
	echo "BASE DE DONNEE BIEN CREE";

}
	//On capture les exceptions si une exception est lancée et on affiche les infos relatives à celle ci

	catch(PDOException $e){
		echo "Erreur: ".$e->getMessage();
	}



 ?>