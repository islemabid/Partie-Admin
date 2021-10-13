


		

      <!-- End Navbar -->
    
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
						<th>date</th>

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
            
    
