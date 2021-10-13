<?php require ("view/Home/header.php");?>
      <!-- End Navbar -->
      <div class="content">
  <div class="container">
  <div class="row ">
  
  <div class="col-3"></div>
    <div class="col-6">

<form action="index.php?action=added&controller=Commande" method="POST">

 
  
  <div class="form-group">
    <label for="des">date</label>
    <input type="datetime-local" class="form-control" placeholder="" name= "date">
  </div>
  
  
  <div class="form-group">
    <label for="des">id_client</label>
    <input type="text" class="form-control" placeholder="" name= "id_client">
  </div>
   <button type="submit" class="btn btn-primary" name ="submitProduit">Valider</button>
</form>

<div class="col-3"></div>
	  </div>
    </div>
    </div>
    <?php require ("view/Home/footer.php");?>