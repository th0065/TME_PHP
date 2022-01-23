<?php
    $serveur = "localhost";
    $database = "sama_marche";
    $username = "root";
    $password = "";
    
    $nom = valid_donne($_POST["nom"]);
    $prenom = valid_donne($_POST["prenom"]);
    $email = valid_donne($_POST["email"]);
    $mdp = valid_donne($_POST["mdp"]);
    

    function valid_donne($donne){
        $donne = trim($donne);
        $donne = stripslashes($donne);
        $donne = htmlspecialchars($donne);
        return $donne;
    }
    if(!empty($nom)
     && strlen($nom)<=20
     && !empty($prenom)
     && strlen($prenom)<=20
     && preg_match("^[A-Za-z '-]+$^", $prenom)
     && !empty($email)
     && filter_var($email, FILTER_VALIDATE_EMAIL)
     && !empty($mdp))
     {
        try{
            //On se connecte à la BDD
            $inscrit = new PDO("mysql:host=$serveur;dbname=$database",$username,$password);
            $inscrit->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            //On insère les données reçues
            $sql = $inscrit->prepare("
                INSERT INTO clients(nom, prenom, email, mdp)
                VALUES(:nom, :prenom, :email, :mdp)");
            $sql->bindParam(':nom',$nom);
            $sql->bindParam(':prenom',$prenom);
            $sql->bindParam(':email',$email);
            $sql->bindParam(':mdp',$mdp);
            $sql->execute();
            
            //On renvoie l'utilisateur vers la page de remerciement parce qu'iil s'est bien inscrit
            header("Location:connexion.php?msg='Inscription effectuée avec succès'");
         }
        catch(PDOException $e){
            echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
        }
        

     }else{
         echo " Les donnees saisies sont invalides <a href = 'inscription.php'>reessayez</a>";
        
     }

?>