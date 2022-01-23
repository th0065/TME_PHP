<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Incription</title>
	<link rel="stylesheet" type="text/css" href="css\bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css\css.css">
	<style type="text/css">
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
        #inscript{  font-size:40px;  font-family: cursive;  margin-top: 20px; }
        #bi {
            position: absolute;
            left: 100px;
        }
        .line{
            padding:10px;
        }
        .footer{
            margin-top: 490px;
            text-align: center;
        }
        

	</style>
</head>
<body>
<div align="center">
       <div id="inscript">Inscription</div> 
   
    <div class="container">
        <form action="inscrit.php" method="post">
            <div class="form-group line">
                    <img src="./img/market.png" width="100px" height="100px">

                </div>
           
                <div class="form-group line">
                <label class="form-label"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill" id="bi" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg><input type="text" class= "form-control" name="nom" placeholder="votre nom"></label>
            </div>
            <div class="form-group line">
                <label class="form-label"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill" id="bi" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg><input type="text" class= "form-control" name="prenom" placeholder="votre prenom"></label>
            </div>
             <div class="form-group line">
             	<label><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope-fill" id="bi" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
</svg><input type="email" class= "form-control" name="email" placeholder="votre email"></label>
             </div>
            <div class="form-group line">
                <label class="form-label"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-key" id="bi" viewBox="0 0 16 16">
  <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
  <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg> <input type="password" class= "form-control" name="mdp" placeholder="Mot de passe"></label>
               
            </div>
            

            <div class="form-group line">
                <a type="button" href="connexion.php" class="btn btn-danger" type="">Retour</a>
                <button class="btn btn-primary" typr="submit">Inscription</button>
            </div>
        </form>
        
    </div>
     </div>
    

</body>
</html>