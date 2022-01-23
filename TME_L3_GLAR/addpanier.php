<?php
require("_header.php");
if(isset($_GET['id'])){
    $products= $DB->query('SELECT id FROM products WHERE id=:id', array('id' => $_GET['id']));
if(empty($products)){
    die("Ce produit n'existe pas");
}
$panier->add($products[0]->id);
die('Le produit à bien été ajouté à votre panier <a href="javascript:history.back()"> retourner sur la catalogue</a>');
}else{
    die("Vous n'avez pas selectionner de produit");
}
?>