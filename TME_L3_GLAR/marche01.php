
<?php  require 'header01.php' ; ?>

  <div id="global">

  <div class="search" ><p align="right"><button type="submit" class="btn btn-outline-primary"><i class="fas fa-search"></i></button><input type="text"  name="search" placeholder=" Search" class="input5"></p></div>

  <div class="parent">
    <?php $products=$DB->query('SELECT * FROM products');  ?>
    <?php foreach ($products as $products): ?>
    <div class="gril">
      <div class="items">
        <img src="./img/<?=$products->id;?>.jpg">
      </div>
     <div class="items-button">

<a type="button" class="btn btn-outline-primary add " href="addpanier.php?id=<?= $products->id; ?>"> <i class="fas fa-cart-plus"></i></a>
      <div class="">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModal<?=$products->id;?>"><i class="fas fa-info"></i></button>

  <!-- Modal -->
  <div class="modal fade" id="myModal<?=$products->id;?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Informations Produit </h4>
        </div>
        <div class="modal-body">
          <div align="center">
           <img src="./img/<?=$products->id;?>.jpg" width="80px" height="80px">
            
          </div>
          <div align="center">
            <input type="text" class="form-control" id="exampleFormControlInput1"  value="Nom: <?= $products->name ?>" disabled name="n1">
            <p type="text" style="font-size: medium;" ><?= $products->description?></p>
            </div>
            <div align="center">
            <textarea class="form-control" id="exampleFormControlTextarea1"> </textarea>
            </div>
          
        </div>
        <div class="modal-footer" >
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <a type="button" class="btn btn-outline-primary" href="addpanier.php?id=<?= $products->id; ?>" >Acheter</a>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
</div>
<div class="description">
  <strong>Nom:</strong><?= $products->name?><br>
  <div class="price"><strong>prix: <?= $products->price?>FCFA</strong></div>
</div>

    </div>
  <?php endforeach ?>






    
      

</div>
</div>
<div id="pied"><p><b>''</b></p>
          </div>

</body>
</html>