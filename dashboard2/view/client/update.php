<?php require ("view/Home/header.php");?>
<!-- End Navbar -->
<body>
  <div class="content">
  <div class="container">
  <div class="row ">
  
  <div class="col-3"></div>
    <div class="col-6">
<form action="index.php?action=update1&controller=client" method="POST">

  <div class="form-group">
    <label > id_customer:</label>
    <input type="text" class="form-control" value=<?php echo $_GET['pseudo']?> name= "pseudo" required>
  </div>
  
  <div class="form-group">
    <label > family name :</label>
    <input type="text" class="form-control" value=<?php echo $_GET["nom"]?> name= "nom"required>
  </div>
  
  
  <div class="form-group">
    <label > name: </label>
    <input type="text" class="form-control" value=<?php echo $_GET["prenom"]?> name= "prenom" required>
  </div>
  
  <div class="form-group">
    <label> email </label>
    <input type="email" class="form-control" value=<?php echo $_GET["email"]?> name="email" required>
  </div>
  
  
  <div class="form-group">
    <label> phone number </label>
    <input type="text" class="form-control" value=<?php echo $_GET["telephone"]?> name= "telephone"required>
  </div>
  <div class="form-group">
    <label> adress </label>
    <input type="text" class="form-control" value= <?php echo $_GET["adresse"]?> name= "adresse"required>
  </div>
  
  <div class="form-group">
    <label>sexe</label>
    <input type="text" class="form-control" value= <?php echo $_GET["genre"]?> name="genre" required>
  </div>
  <div class="form-group">
    <label>password</label>
    <input type="password" class="form-control" value=<?php echo $_GET["mp"]?> name="mp" required>
	
  </div>
 
  
  <button type="submit" class="btn btn-primary" name ="submitProduit">Valider</button>
  </form>
  </div>
        <div class="col-3"></div>
	  </div>
    </div>
    </div>
    <?php require ("view/Home/footer.php");?>