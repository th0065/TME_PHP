<?php  require 'header01.php'  ?>
	<div id="global">

	<div id="partie1">
		<img src="./img/profil.jpg" class="photo" height="100px" width="100px">
</div>

<div id="partie2">
	  <form action="traitement.php" method="post" align="center">
           <div class="input-group input-group-sm mb-3 form-group line">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Votre nom</span>
  </div>
  <input type="text" class="form-control" name="nom" placeholder="Votre nom" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>

             <div class="input-group input-group-sm mb-3 form-group line">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Votre login</span>
  </div>
  <input type="text" class="form-control" name="login" placeholder="Votre login" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>
       <div class="form-group line">
                <label class="form-label" >Infos Additionnels </label>
               <textarea class="form-control col-6" placeholder="On est à l'ecoute" aria-label="With textarea"></textarea> 
            </div>    
  


            <div class="form-group">
                <button class="btn btn-primary" type="submit">Edit</button>
            </div>
        </form>
	</div>
</div>
<div id="pied"><p><b>''</b></p>
          </div>

</body>
</html>