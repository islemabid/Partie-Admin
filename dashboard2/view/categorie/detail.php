<?php require ("view/Home/header.php");?>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title "> categories </h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
	
	              <table class="table">
                <thead class=" text-primary">
		<tr>  

		      <th>code</th>
			<th>categorie Name </th>
	        <th>description</th>
		
		</tr>
		</thead>
    <tbody>
		
		<tr>
            <td> <?php echo $p->code?></td>
			<td> <?php echo $p->nom?></td>
			<td> <?php echo $p->description?></td>
		</tr>
	
	</table>
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