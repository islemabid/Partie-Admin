<?php require("view/Home/header.php");?>
    <div class="content">
  <div class="container">
  <div class="row ">
  
  <div class="col-3"></div>
    <div class="col-6">
    
 
 
    <form   action="index.php?action=added&controller=Lignecommande" method="POST" >
 
 <div class="form-group" >
 <label for="" >ref_commande</label>
 <input type="text" class="form-control" placeholder="" name= "ref_commande" >
  </div>
 <div class="form-group">
 <label for="" >ref_produit</label>
 <input type="text" class="form-control" placeholder="" name= "ref_produit">
</div>

<div class="form-group">
 <label for="des"  class="form-label">Quantity</label>
 <input type="text" class="form-control" placeholder="" name= "qte">
</div>
<div class="form-group">
 <label for="des"  class="form-label">Prix</label>
 <input type="text" class="form-control" placeholder="" name= "prix">
</div>








<button type="submit" class="btn btn-primary" name ="submit">submit</button>

</form>

     </div>
     <div class="col-3"></div>
 </div>
 </div>
 </div>
<?php require("view/Home/footer.php");?>