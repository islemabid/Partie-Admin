<?php require ("view/Home/header.php");?>
  <body>
  <div class="content">
  <div class="container">
  <div class="row ">
  
  <div class="col-3"></div>
    <div class="col-6">

<form action="index.php?action=update1&controller=Commande" method="POST">

  <div class="form-group">
    <label for="reference	">ref_commande</label>
    <input type="text" class="form-control" value=<?= $_GET["ref_commande"]?> name= "ref_commande" >
  </div>
  
  <div class="form-group">
    <label for="des">date</label>
    <input type="datetime" class="form-control" value=<?=$_GET["date"]?> name= "date">

  </div>
  
  
  <div class="form-group">
    <label for="des">id_client</label>
    <input type="text" class="form-control" value=<?=$_GET["id_client"]?>name= "id_client" >
  </div>
  
 

  <button type="submit" class="btn btn-primary" name ="submit">Valider</button>

</form>
</div>
        <div class="col-3"></div>
	  </div>
    </div>
    </div>
    </div>


    <?php require ("view/Home/footer.php");?>