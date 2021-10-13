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
             <th>ref_commande</th>
			<th>ref_produit </th>
	        <th>qte</th>
		
		</tr>
		</thead>
		
		<tbody>
		<tr>
			<td> <?php echo $p->ref_commande?></td>
			<td> <?php echo $p->ref_produit?></td>
			<td> <?php echo $p->qte?></td>
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
	
	