<?php require("view/Home/header.php");?>
      <!-- End Navbar -->
  
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title "> Produits </h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
	
	              <table class="table">
                <thead class=" text-primary">
		            <tr>  

			<th>reference</th>
			<th>Produit Name </th>
	        <th>Quantity</th>
			<th>Price</th>
			<th>picture</th>
			<th>Discount</th>
			<th>TVA</th>
			<th>Category</th>
		</tr>
		</thead>
    <tbody>

		
		<tr>
			<td> <?php echo $p->reference?></td>
			<td> <?php echo $p->designation?></td>
			<td> <?php echo $p->qte?></td>
			<td> <?php echo $p->prix?></td>
      <td> <?php echo "<img src=\"uploads/products/$p->photo\"  width=\"50px\" />";?></td>
			<td> <?php echo $p->promotion?></td>
			<td> <?php echo $p->tva?></td>
			<td> <?php echo $p->categorie?></td>
		
		</tr>
    </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </div>
	  </div>

<?php require("view/Home/footer.php");?>