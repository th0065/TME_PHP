 <?php require("_header.php");
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marché</title>
  <link rel="stylesheet" type="text/css" href="css\bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css\style_Marche.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
  
  <style type="text/css">
</style>
</head>
<body>
  
  <div id="tete">
              <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <table>
        <tr>
          <td>
     <img src="./img/market.png" width="100px" height="100px">
  </td>
  <td>
    SAMA Marché
  </td>
</tr>
</table>
    </div>


    <div class="nav navbar-nav navbar-left">
      <div class="nav navbar-nav navbar-left">
      <button class="btn btn-group " >
  <a class="btn btn-outline-primary" href="profil.php">Profil</a>
  <a href="Marche01.php" class="btn btn-outline-primary">Marché</a>
  <a class="btn btn-outline-primary" href="./panier.php">Mes produits <span>(<?= number_format($panier->count());?>)</span></a>
</button>

    </div>

    </div>

  <div class="nav navbar-nav navbar-right">
    <div><?php if ($_SESSION['login']) {
       echo $_SESSION['login']."\n";
      }   ?></div>
      <button type="button" class="btn btn-outline-danger"><a href="connexion.php" class="a " >Deconnexion</a></button>
 </div>

        </div>
        </nav> 
     </div>
     
