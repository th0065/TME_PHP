  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de passe oublié</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css\bootstrap.css">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"/>

    
    <style>
        #bi {  position: absolute;left: 100px; }
        form{
            margin-top: 100px;
            margin-left: 350px;
            width: 400px;
            height: 250px;
            position: absolute;
            top: 10px;
            border: 1px solid #CCC;
            padding: 20px;
        }

        button{
            
            margin-top: 300px;
            padding-right: 20px;
        }
        .fas{
            font-size: 40px;
            position: absolute;
            left: 55px;
        }

        #connect{  font-size:40px;  font-family: cursive;  margin-top: 20px; }
        
        .line{
            padding:10px;

        }
        
        .footer{
            margin-top: 100px;
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
        <form action="reinitialiser.php" method="post">
           
                <div class="form-group line">
                    <img src="market.png" width="100px" height="100px">

                </div>
               <div class="form-group line ligne">
                <label class="form-label"><i class="fas fa-key"></i><input type="password" class= "form-control" name="mdp1" placeholder="Saisir le nouveau mot de passe"></label>

                <div class="form-group line ligne">
                <label class="form-label"><i class="fas fa-key"></i><input type="password" class= "form-control" name="mdp2" placeholder="Reprendre le mot de passe"></label>
               
            </div>
               
            </div>
  
            </div>

            <div class="form-group line">
                <button class="btn btn-primary " type="submit">Envoyer</button>
                <button class="btn btn-danger" typr="reset">Annuler</button>
            </div>
        </form>
        
    </div>
     </div>
     <div class="footer">
           <a href="Mot_de_passe_oublie.html">Mot de passe oublié</a>
           <a href="inscription.php">Créer un compte</a>
        </div>
</body>
</html>