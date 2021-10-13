<?php require ("view/Home/header.php");?>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title "> clients </h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
	
	              <table class="table">
                <thead class=" text-primary">
		            <tr>  
			<th>id_customer</th>
			<th>nom</th>
	        <th>prenom</th>
			<th>email</th>
			<th>telephone</th>
			<th>adresse</th>
			<th>genre</th>
			<th>mp</th>
		    <th>admin</th>
		</tr>
		</thead>
    <tbody>
		
		<tr>
			<td> <?php echo $c->pseudo?></td>
			<td> <?php echo $c->nom?></td>
			<td> <?php echo $c->prenom?></td>
			<td> <?php echo $c->email?></td>
			<td> <?php echo $c->telephone?></td>
			<td> <?php echo $c->adresse?></td>
			<td> <?php echo $c->genre?></td>
			<td> <?php echo $c->mp?></td>
			<td> <?php echo $c->admin?></td>
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