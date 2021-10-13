<?php require ("view/Home/header.php");?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title "> list of commandes</h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <a href="index.php?action=add&controller=Commande">add </a>
                    <table class="table">
                      <thead class=" text-primary">
					  <tr>
		   <th>ref_commande</th>
			<th>date </th>
	        <th>id_client</th>
			
		</tr>
		</thead>
    <tbody>
		<?php foreach($commande as $p){ ?>
		<tr>
		<td> <?php echo $p->ref_commande?></td>
			<td> <?php echo $p->date?></td>
			<td> <?php echo $p->id_client?></td>
		
			<td> <a href='index.php?action=getByref&&ref_commande=<?php echo $p->ref_commande?>&controller=Commande'> Détails </a></td>
			<td> <a href='index.php?action=update&&ref_commande=<?php echo $p->ref_commande?>&&date=
      <?php echo $p->date?>&&id_client=<?php echo $p->id_client?>
      &controller=Commande'> Update </a></td>
			<td> <a href='index.php?action=deleteByref&&ref_commande=<?php echo $p->ref_commande?>&controller=Commande'> Delete </a></td>
			
		
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