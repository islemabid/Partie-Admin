<?php require("view/Home/header.php");?>
    <div class="content">
  <div class="container">
  <div class="row ">
  
  <div class="col-3"></div>
    <div class="col-6">
    
    <form   action="index.php?action=added&controller=Produit" method="POST" enctype="multipart/form-data">
 
    <div class="form-group" >
    <label for="reference" >reference</label>
    <input type="text" class="form-control" placeholder="" name= "reference" >
     </div>
    <div class="form-group">
    <label for="des" >Name of product</label>
    <input type="text" class="form-control" placeholder="" name= "designation">
  </div>
  
  <div class="form-group">
    <label for="des"  class="form-label">Quantity</label>
    <input type="text" class="form-control" placeholder="" name= "qte">
  </div>
  
  <div class="form-group">
    <label for="pu"  class="form-label"> price</label>
    <input type="text" class="form-control" placeholder="" name= "prix">
  </div>

    <label for="pu"  class="form-label"> picture</label>
    <input type="file" class="form-control"  name= "photo" >
    </br>
   
   
  
    <div class="form-group">
    <label for="des">Discount</label>
    <input type="text" class="form-control" placeholder=" " name= "promotion">
  </div>
  
  <div class="form-group">
    <label for="des">TVA</label>
    <input type="text" class="form-control" placeholder="" name= "tva">
  </div>
  <div class="form-group">
    <label for="cat">Category</label>
    <input type="text" class="form-control" name="categorie">
	
  </div>
  <div class="form-group">
    <label for="des">date</label>
    <input type="datetime" class="form-control" placeholder="" name= "date">
  </div>

  <button type="submit" class="btn btn-primary" name ="submit">submit</button>

</form>

        </div>
        <div class="col-3"></div>
	  </div>
    </div>
    </div>
   <?php require("view/Home/footer.php");?>