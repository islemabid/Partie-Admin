<?php require ("view/Home/header.php");?>
 
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title "> Commande </h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
	
	              <table class="table">
                <thead class=" text-primary">
		<tr>  

			<th>ref_commande</th>
			<th>date </th>
	        <th>id_client</th>
		
		</tr>
		</thead>
    <tbody>
		<tr>
			<td> <?php echo $p->ref_commande?></td>
			<td> <?php echo $p->date?></td>
			<td> <?php echo $p->id_client?></td>
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
    <?php require ("view/Home/footer.php");?>