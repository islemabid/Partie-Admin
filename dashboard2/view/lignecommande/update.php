<?php require ("view/Home/header.php");?>
  <body>
  <div class="content">
  <div class="container">
  <div class="row ">
  
  <div class="col-3"></div>
    <div class="col-6">
  
<form action="index.php?action=update1&controller=Lignecommande" method="POST">

  <div class="form-group">
    <label for="reference	">ref_commande</label>
    <input type="text" class="form-control" value= <?= $_GET['ref_commande']?> name= "ref_commande" >
  </div-->
  
  <div class="form-group">
    <label for="des">ref_produit</label>
    <input type="text" class="form-control" value=<?= $_GET['ref_produit']?> name= "ref_produit">
  </div-->
  
  
  <div class="form-group">
    <label for="des">Quantity</label>
    <input type="text" class="form-control" value=<?= $_GET['qte']?>  name= "qte" >
  </div>
  <div class="form-group">
    <label for="des">Price</label>
    <input type="text" class="form-control" value=<?= $_GET['prix']?>  name= "prix" >
  </div>
  <button type="submit" class="btn btn-primary" name ="submitligne">Valider</button>

</form>
</div>
        <div class="col-3"></div>
	  </div>
    </div>
    </div>
 <?php require("view/Home/footer.php");?>