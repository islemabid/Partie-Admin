<?php require ("view/Home/header.php");?>
  <body>
  <div class="content">
  <div class="container">
  <div class="row ">
  
  <div class="col-3"></div>
    <div class="col-6">
  
<form action="index.php?action=update1&controller=Produit" method="POST" enctype="multipart/form-data">

  <div class="form-group">
    <label for="reference	">reference</label>
    <input type="text" class="form-control" value= <?= $_GET['reference']?> name= "reference" >
  </div>
  
  <div class="form-group">
    <label for="des">Name of produit</label>
    <input type="text" class="form-control" value=<?= $_GET['designation']?> name= "designation">
  </div>
  
  
  <div class="form-group">
    <label for="des">Quantity</label>
    <input type="text" class="form-control" value=<?= $_GET['qte']?>  name= "qte" >
  </div>
  
  <div class="form-group">
    <label for="pu"> price</label>
    <input type="text" class="form-control" value=<?=$_GET['prix']?> name= "prix">
		 
  </div>
  
  
  
  <label for="pu"  class="form-label"> picture</label>
    <input type="file" class="form-control"  name= "photo" >
    </br>
  <div class="form-group">
    <label for="des">Discount</label>
    <input type="text" class="form-control" value=<?=$_GET['promotion']?> name= "promotion">
  </div>
  
  <div class="form-group">
    <label for="des">TVA</label>
    <input type="text" class="form-control" value=<?=$_GET['tva']?> name= "tva">
  </div>
  <div class="form-group">
    <label for="cat">Category</label>
    <input type="text" class="form-control" value=<?=$_GET['categorie'] ?> name="categorie" >
	
  </div>
  <div class="form-group">
    <label for="des">date</label>
    <input type="datetime" class="form-control" placeholder="" name= "date">
  </div>
  

  <button type="submit" class="btn btn-primary" name ="submitProduit">Valider</button>

</form>
</div>
        <div class="col-3"></div>
	  </div>
    </div>
    </div>
 <?php require("view/Home/footer.php");?>