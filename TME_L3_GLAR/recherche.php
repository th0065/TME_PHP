

    
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
        $email=valid_donne($_POST['email']);
$sql = $dbco->prepare("SELECT id FROM clients WHERE email =:email");
$sql->bindParam(':email',$email);
$sql->execute();
$user = $sql->fetch();

if($user==false){
    session_start();
    $_SESSION['e_mail']=$_POST['email'];
    header("Location: reinitialise.php");
}else{
     echo " Email non trouvé <a href = 'mot_de_passe_oublie.php'>reessayez</a>";
}



?>
