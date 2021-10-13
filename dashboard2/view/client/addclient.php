<?php require ("view/Home/header.php");?>
  <div class="content">
  <div class="container">
  <div class="row ">
  
  <div class="col-3"></div>
    <div class="col-6">
<form action="index.php?action=added&controller=Client" method="POST">

  <div class="form-group">
    <label > id_customer:</label>
    <input type="text" class="form-control" placeholder=" " name= "pseudo">
  </div>
  
  <div class="form-group">
    <label > family name :</label>
    <input type="text" class="form-control" placeholder="" name= "nom">
  </div>
  
  
  <div class="form-group">
    <label > name: </label>
    <input type="text" class="form-control" placeholder="" name= "prenom">
  </div>
  
  <div class="form-group">
    <label> email </label>
    <input type="text" class="form-control" placeholder=" " name= "email">
  </div>
  
  
  <div class="form-group">
    <label> phone number </label>
    <input type="text" class="form-control" placeholder=" " name= "telephone">
  </div>
  <div class="form-group">
    <label> adress </label>
    <input type="text" class="form-control" placeholder="" name= "adresse">
  </div>
  
  <div class="form-group">
    <label>sexe</label>
    <input type="text" class="form-control" placeholder="" name= "genre">
  </div>
  <div class="form-group">
    <label>password</label>
    <input type="password" class="form-control" name="mp">
	
  </div>
  

  <button type="submit" class="btn btn-primary" name ="submitProduit">submit</button>
  </form>

</div>
<div class="col-3"></div>
</div>
</div>
</div>


<?php require ("view/Home/footer.php");?>