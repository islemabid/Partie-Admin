
<?php require ("view/Home/header.php");?>
  <div class="content">
  <div class="container">
  <div class="row ">
  
  <div class="col-3"></div>
    <div class="col-6">

<form action="index.php?action=added&controller=Categorie" method="POST">

  <div class="form-group">
    <label for="reference	">code</label>
    <input type="text" class="form-control" placeholder="" name= "code">
  </div>
  
  <div class="form-group">
    <label for="des">Name of category</label>
    <input type="text" class="form-control" placeholder="" name= "nom">
  </div>
  
  
  <div class="form-group">
    <label for="des">description</label>
    <input type="text" class="form-control" placeholder="" name= "description">
  </div>
  
 
  <button type="submit" class="btn btn-primary" name ="submit">Valider</button>
</form>
</div>
        <div class="col-3"></div>
	  </div>
    </div>
    </div>
    <?php require ("view/Home/footer.php");?>