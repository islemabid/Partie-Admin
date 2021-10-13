<?php require ("view/Home/header.php");?>
      <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title "> list of orders </h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <a href="index.php?action=add&controller=Lignecommande">add </a>
                    <table class="table">
                      <thead class=" text-primary">
					         <tr>
		                     <th>ref_commande</th>
			                <th>ref_produit</th>
	                        <th>qte</th>
                          <th>price</th>
							</tr>
                      </thead>
                      <tbody>

					
					  <?php foreach($lignecommande as $p){ ?>
	
		<tr>
		            <td> <?php echo $p->ref_commande?></td>
			        <td> <?php echo $p->ref_produit?></td>
			         <td> <?php echo $p->qte?></td>
               <td> <?php echo $p->prix?></td>
					 <td> <a href='index.php?action=getByref&&ref_commande=<?php echo $p->ref_commande?>&controller=Lignecommande'> Détails </a></td>
	                 <td> <a href='index.php?action=update&&ref_commande=
                   <?php echo $p->ref_commande?>&&ref_produit=<?php echo $p->ref_produit?>
                   &&qte=<?php echo $p->qte?>&&prix=<?php echo $p->prix?>&controller=Lignecommande'> Update </a></td>
			<td> <a href='index.php?action=deleteByref&&ref_commande=<?php echo $p->ref_commande?>&controller=Lignecommande'> Delete </a></td>
			
			
		
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
    <?php require ("view/Home/footer.php");?>
		
		
		
			
			
		
		