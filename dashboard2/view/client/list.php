<?php require ("view/Home/header.php");?>
     <!-- End Navbar -->
     <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title "> list of Clients </h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <a href="index.php?action=add&controller=Client">add </a>
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
		
		</tr>
		</thead>
    <tbody>
		<?php foreach($clients as $c){ ?>
		<tr>
		    <td> <?php echo $c->pseudo?></td>
			<td> <?php echo $c->nom?></td>
			 <td> <?php echo $c->prenom?></td>
			<td> <?php echo $c->email?></td>
			<td> <?php echo $c->telephone?></td>
			<td> <?php echo $c->adresse?></td>
			<td> <?php echo $c->genre?></td>
			<td> <?php echo $c->mp?></td>
			
			<td> <a href='index.php?action=getBypseudo&&pseudo=<?php echo $c->pseudo?>&controller=Client'> Détails </a></td>
			<td> <a href='index.php?action=update&&pseudo=<?php echo $c->pseudo?>&&nom=<?php echo $c->nom?>&&prenom= <?php echo $c->prenom?>
      &&email=<?php echo $c->email?>&&telephone=<?php echo $c->telephone?>&&adresse=<?php echo $c->adresse?>
      &&genre=<?php echo $c->genre?>&&mp=<?php echo $c->mp?>&controller=Client'> Update </a></td>
			<td> <a href='index.php?action=deleteBypseudo&&pseudo=<?php echo $c->pseudo?>&controller=Client'> Delete </a></td>
		
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