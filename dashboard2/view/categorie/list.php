<?php require ("view/Home/header.php");?>
  
   <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title "> categories</h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <a href="index.php?action=add&controller=Categorie">add </a>
                    <table class="table">
                      <thead class=" text-primary">
					  <tr>
		               <th>code</th>
			          <th>categorie Name </th>
					 <th>description</th>
					</tr>
                      </thead>
                      <tbody>
					  <?php foreach($categories as $p){ ?>
		<tr>
		<td> <?php echo $p->code?></td>
			<td> <?php echo $p->nom?></td>
			<td> <?php echo $p->description?></td>
			
			<td> <a href='index.php?action=getByref&&code=<?php echo $p->code?>&controller=Categorie'> Details </a></td>
			<td> <a href='index.php?action=update&&code=<?php echo $p->code?>
      &&nom= <?php echo $p->nom?>&&description=<?php echo $p->description?>&controller=Categorie'> Update </a></td>
			<td> <a href='index.php?action=deleteByref&&code=<?php echo $p->code?>&controller=Categorie'> Delete </a></td>
		
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