<?php


include_once('includes/header.php'); ?>



<?php

if (isset($_POST['make_delete'])) {
	$action = 0;


	$id = isit('id', $_POST, 0 );
	$id = unIndexMe((int) $id );

	if($_POST['make_delete'] == 1)
		$action = 1;


	$params = array(
		'cp_delete' => $action
	); 

	$istrue = updateTable( 'nss_camp_reg', $params, ' cp_id = ' . $id , $db);

	if($istrue){

		$message [0] = 1;
		$message [1] = ' updated ';  

	}  else {

		$message [0] = 4;
		$message [1] = ' update error ';  
	}

}

?>




<?php 
$data = array();
$data = selectFromTable('*' , 'nss_camp_reg ' , ' 1 ', $db);

?>





<div class="row">
	<div class="col">

		<?php 





		echo show_error($message); ?>


	</div>
</div>

<div class="row flex-grow mt-3">
	<div class="col-12">



		<div class="card">
			<div class="card-body"> 


			

</br>
		
		<center>	<h3 class="h3 mb-3 font-weight-normal danger-text">Camp Activities</h3></center>
		

</br>


				<?php if($data): ?>
					<div class="table-responsive">

						<table class="table dataTable table-hover">
							<thead>
								<tr>
									<th class="text-uppercase">key</th>
									<th class="text-uppercase">name</th>
									<th class="text-uppercase">date from</th>
									<th class="text-uppercase">date to</th>
									<th class="text-uppercase">added time</th> 
									<th class="text-uppercase">delete</th>
									<th class="text-uppercase">more</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($data as $key => $value): ?>


									<tr>
										<td ><?php echo isit('cp_key', $value); ?></td>
										<td ><?php echo isit('cp_name', $value); ?></td>
										<td ><?php echo isit('cp_date_frm', $value); ?></td>
										<td ><?php echo isit('cp_date_to', $value); ?></td>
										<td >

											<time class="timeago" datetime="<?php echo isit('cp_date', $value); ?>" title="<?php echo isit('cp_date', $value); ?>">1 hour ago</time>



										</td>

										<td >
											<form accept="" method="post">
												<input type="hidden" name="id" value="<?php echo indexMe( (int) isit('cp_id', $value, 0)); ?>">
												<?php if( isit('cp_delete', $value) == 0 ): ?>
													<button class="btn btn-sm btn-danger" name="make_delete" value="1">delete</button>
													<?php else: ?>
														<button class="btn btn-sm btn-success" name="make_delete" value="0">active</button>
													<?php endif; ?>
												</form>


											</td>
											<td>
												<a title="edit" href="admin/viewcamp/<?php echo indexMe((int)isit('cp_id', $value, 0)); ?>" class="btn btn-sm btn-info ">
													<i class="ti-eye"></i>
												</a>
												<a title="edit" href="admin/editcamp/<?php echo indexMe((int)isit('cp_id', $value, 0)); ?>" class="btn btn-sm btn-warning ">
													<i class="ti-pencil-alt"></i>
												</a>
											</td>
										</tr>



									<?php endforeach; ?>
								</tbody>
							</table>

						</div>
						<?php else: ?>
							<div class="alert alert-warning text-center text-capitalize">
								<p>no camp added</p>
							</div>


						<?php endif; ?>




					</div>
				</div>



			</div>

		</div>




		<?php include_once('includes/footer.php'); ?>