<?php
require("header01.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="panier.css">
    <title>Document</title>
</head>
<body>
<div class="table">
    <div class="wrap">
        <div class="rowtitle">
            <span class="name">Name</span>
            <span class="price">Prix</span>
            <span class="quantite">Quantite</span>
            <span class="soustotal">prix avec TVA</span>
            <span class="action">Action</span>
        </div>

        <?php
        $ids = array_keys($_SESSION['panier']);
        if(empty($ids)){
            $products = array();
        }
        else{
            $products = $DB->query('SELECT * FROM products WHERE id IN ('.implode(',', $ids).')');
        }
         foreach ($products as $products):
        ?>
        <div class="row">
            <a href="#" class="img"><img src="<?= $products->id ?>.jpg" height="50" width="50"></a>
            <span class="name"><?= $products->name;?></span>
            <span class="price"><?= number_format($products->price, 2, ',',' '); ?>FCFA</span>
            <span class="quantite"><?= $_SESSION['panier'][$products->id];?></span>
            <span class="soustotal"><?= number_format($products->price*1.18, 2, ',',' '); ?>FCFA</span>
            <span class="action">
                <a href="panier.php?delPanier=<?= $products->id ?>" class= "del"><i class="fas fa-trash-alt"></i></a>
            </span>
        </div>
        <?php endforeach ?>

        <div class="rowtotal">
            Grand total: <span class="mtotal"><?= number_format($panier->total()*1.18, 2,',' ,' '); ?>FCFA</span>
        </div>
    </div>
</div>
</body>
</html>