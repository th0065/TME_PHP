

    
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
$email= valid_donne($_POST['login']);
$nom=valid_donne($_POST['nom']);
$login=valid_donne($_SESSION['login']);


$sql = $dbco->prepare("UPDATE clients SET
                       email =:email,nom=:nom
                       where email=:login"
            );
$sql->bindParam(':login',$login);
$sql->bindParam(':nom',$nom);
$sql->bindParam(':email',$email);
$sql->execute();
$user = $sql->fetch();

if($user!=false)
echo " echec de modification <a href = 'profil.php'>Retourner à la page</a>";
else{
    $_SESSION['login']=$email;
  header("Location: profil.php");
}

?>
