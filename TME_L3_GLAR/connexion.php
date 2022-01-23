  <?php
  error_reporting(E_ALL ^ E_WARNING);
// remove all session variables
session_unset();
// destroy the session
session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css\bootstrap.css">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"/>

    
    <style>
        #bi {  position: absolute;left: 100px; }
        form{
            margin-top: 100px;
            margin-left: 300px;
            width: 500px;
            position: absolute;
            top: 10px;
            border: 1px solid #CCC;
            padding: 20px;
        }

        button{
            margin-top: 10px;
            padding-right: 20px;
        }
        .fas{
            font-size: 30px;
            position: absolute;
            left: 100px;
        }
        #connect{  font-size:40px;  font-family: cursive;  margin-top: 20px; }
        
        .line{
            padding:10px;

        }
        
        .footer{
            margin-top: 490px;
            text-align: center;
        }
        a{
            padding-right: 20px;
        }
    </style>
</head>
<body>
    <div align="center">
       <div id="connect">Connexion</div> 
   
    <div class="container">
        <form action="verification.php" method="post">
           
                <div class="form-group line">
                    <img src="./img/market.png" width="100px" height="100px">

                </div>
                <div class="form-group line">
                <label class="form-label ligne"><i class="fas fa-envelope" ></i><input type="text" class= "form-control" name="email" placeholder="votre login"></label>
            </div>

            <div class="form-group line ligne">
                <label class="form-label"><i class="fas fa-key"></i><input type="password" class= "form-control" name="mdp" placeholder="password"></label>
               
            </div>
            <div class="form-group line">
                <label><input type="checkbox" value="">Connexion permanente</label>
            </div>

            <div class="form-group line">
                <button class="btn btn-primary" type="submit">Connexion</button>
                <button class="btn btn-danger" type="reset">Annuler</button>
            </div>
        </form>
        
    </div>
     </div>
     <div class="footer">
           <a href="Mot_de_passe_oublie.php">Mot de passe oublié</a>
           <a href="inscription.php">Créer un compte</a>
        </div>
</body>
</html>