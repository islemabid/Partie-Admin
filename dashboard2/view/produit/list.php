<?php require ("view/Home/header.php");?>
<script>
function getXMLHttpRequest() {
var xhr = null;
try
{
xhr = new ActiveXObject("Microsoft.XMLHTTP"); // Essayer IE
}
catch(e) // Echec, utiliser l'objet standard
{
xhr = new XMLHttpRequest();
}
return xhr;
}
function search(code) {
  var xhr = new XMLHttpRequest();
			if(code!="d"){
      
		
        xhr.open("GET", 'index.php?action=getBycategorie&&code='+code+"&controller=Produit" , true);
				xhr.send();
				xhr.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("resultat").innerHTML = this.responseText;
					
						
					}
				}			
			
			}
}
		

  </script>
		

      <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            <form>
            
            <select name="categorie" style="color:purple" onchange="search(this.value)">
            <option value="d" > choose Category </option>
             <?php foreach ($categories as $c){?>
              <option value="<?=$c->code?>"><?=$c->nom?></option>
              <?php }?>
              </select>
              </form>
              <div id="resultat">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title "> list of Products </h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <a href="index.php?action=add&controller=Produit">add </a>
                    <table class="table">
                      <thead class=" text-primary">
					         <tr>
		              <th>reference</th>
			           <th>Product Name </th>
	                <th>Quantity</th>
			            <th>Price</th>
			            <th>picture</th>
			             <th>Discount</th>
			             <th>TVA</th>
			            <th>Category</th>
                  <th>Date</th>
		                 </tr>
                      </thead>
                      <tbody>

					
					  <?php foreach($produits as $p){ ?>
		<tr>
		<td> <?php echo $p->reference?></td>
			<td> <?php echo $p->designation?></td>
			<td> <?php echo $p->qte?></td>
			<td> <?php echo $p->prix?></td>
			<td> <?php echo "<img src=\"uploads/products/$p->photo\"  width=\"50px\" />";?></td>
			<td> <?php echo $p->promotion?></td>
			<td> <?php echo $p->tva?></td>
			<td> <?php echo $p->categorie?></td>
      <td> <?php echo $p->date?></td>
	   	<td> <a href='index.php?action=getByref&&reference=<?php echo $p->reference?>&controller=Produit'> Détails </a></td>
			<td> <a href='index.php?action=update&&reference=<?php echo $p->reference?>&&designation= <?php echo $p->designation?>
      &&qte=<?php echo $p->qte?>&&prix=<?php echo $p->prix?>&&promotion=<?php echo $p->promotion?>
      &&tva=<?php echo $p->tva?>&&categorie=<?php echo $p->categorie?>
      &controller=Produit'> Update </a></td>
			<td> <a href='index.php?action=deleteByref&&reference=<?php echo $p->reference?>&controller=Produit'> Delete </a></td>
		
		</tr>
		<?php } ?>
                      </tbody>
                    </table>
                    
                    

                  </div>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </div>
	  </div>
    
    <?php require ("view/Home/footer.php");?>