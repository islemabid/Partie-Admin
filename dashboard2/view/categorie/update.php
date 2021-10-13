<?php require ("view/Home/header.php");?>
 
  <div class="content">
  <div class="container">
  <div class="row ">
  
  <div class="col-3"></div>
    <div class="col-6">

<form action="index.php?action=update1&controller=Categorie" method="POST">

  <div class="form-group">
    <label for="reference	">reference</label>
    <input type="text" class="form-control" value=<?= $_GET["code"]?> name= "code" >
  </div>
  
  <div class="form-group">
    <label for="des">Name of category</label>
    <input type="text" class="form-control"  value=<?= $_GET["nom"]?> name= "nom">
  </div>
  
  
  <div class="form-group">
    <label for="des">description</label>
    <input type="text" class="form-control" value=<?= $_GET["description"]?> name= "description" >
  </div>
  
  

  <button type="submit" class="btn btn-primary" name ="submit">Valider</button>

</form>
</div>
        <div class="col-3"></div>
	  </div>
    </div>
    </div>


    <?php require ("view/Home/footer.php");?>