

    
<?php

$server = 'localhost';
$username = 'root';
$database = "sama_marche";
$password = '';
 require('_header.php');
$dbco = new PDO("mysql:host=$server;dbname=$database",$username,$password);
$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
function valid_donne($donne){
        $donne = trim($donne);
        $donne = stripslashes($donne);
        $donne = htmlspecialchars($donne);
        return $donne;}
$mdp1=valid_donne($_POST['mdp1']);
$mdp2=valid_donne($_POST['mdp2']);
$email=valid_donne($_SESSION['e_mail']);
if(strcmp($mdp1,$mdp2)!=0){
    echo "Les mots de passe ne correspondent pas<a href = 'mot_de_passe_oublie.php'>reessayez</a>";
}
else{

$sql = $dbco->prepare("UPDATE clients SET
                       mdp =:mdp 
                       where email=:email"
            );
$sql->bindParam(':mdp', $mdp1);
$sql->bindParam(':email', $email);
$sql->execute();
$user = $sql->fetch();

if($user!=false){
    echo "Mot de passe non reinitialisé <a href = 'mot_de_passe_oublie.php'>reessayez</a>";

}else
session_unset();
session_destroy();

    echo "Mot de passe reinitialisé avec succès <a href = 'connexion.php'>Se connecter</a>";
}

?>
