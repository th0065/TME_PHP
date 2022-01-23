

    
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
       $email= valid_donne($_POST['email']);
        $mdp=valid_donne($_POST['mdp']);

$sql = $dbco->prepare("SELECT * FROM clients WHERE email =:email AND mdp=:mdp");
$sql->bindParam(':email',$email);
$sql->bindParam(':mdp',$mdp);
$sql->execute();
$user = $sql->fetch();
var_dump($user);
/*foreach ($user as $key => $value) {

    echo "Clé: ".$key." Valeur: ".$value."";
    echo "\n";
}
*/

if($user!=false){
    session_start();
    $_SESSION["login"] =$_POST['email'];
    header("Location: marche01.php");
}
else{
             echo " Login ou mot de passe non valide <a href = 'connexion.php'>reessayez</a>";

}

?>
