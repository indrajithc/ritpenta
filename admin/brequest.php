<?php




include_once('includes/header.php'); ?>
<?php

if (isset($_POST['make_read'])) {


	$id = isit('id', $_POST, 0);
	$id = unIndexMe((int) $id );

	// if($_POST['make_delete'] == 1)
	$action = 1;


	$params = array(
		'req_status' => $action
	); 

	$istrue = updateTable( 'nss_bg_reqst', $params, ' req_id = ' . $id , $db);

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

if (isset($_POST['delete-perme'])) {


	$id = isit('id', $_POST, 0);
	$id = unIndexMe((int) $id );

	// if($_POST['make_delete'] == 1)
	$action = 1;



	$istrue =  $db->execute_query(  " DELETE FROM nss_bg_reqst WHERE req_id = " . $id);


	if($istrue){

		$message [0] = 1;
		$message [1] = ' updated ';  

	}  else {

		$message [0] = 4;
		$message [1] = ' update error ';  
	}
	



}

?>






<div class="row">
	<div class="col">

		<?php 





		echo show_error($message); ?>


	</div>
</div>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">

		<center>	<h3 class="h3 mb-3 font-weight-normal danger-text">Blood Requests</h3></center>


				<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="pills-active-tab" data-toggle="pill" href="#pills-active" role="tab" aria-controls="pills-active" aria-selected="true">active Requests</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-delete-tab" data-toggle="pill" href="#pills-delete" role="tab" aria-controls="pills-delete" aria-selected="false">Deactiveted Requests</a>
					</li>

				</ul>
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-active" role="tabpanel" aria-labelledby="pills-active-tab">

						<div>








							<div id="accordion">



								<?php 

								$details = selectFromTable( '*', ' nss_bg_reqst' , ' req_status = 0 ',$db);

								?>

								<?php if($details): ?>

									<table class="table dataTable ">
										<thead>
											<tr>
												<th>b group</th>
												<th>Name</th>
												<th>Email</th>
												<th>Mobile</th>
												<th>Location</th>
												<th>time</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($details as $key => $value): ?>

												<tr>
													<td><?php echo isit('req_bg', $value); ?></td>
													<td><?php echo isit('req_name', $value); ?></td>
													<td><?php echo isit('req_email', $value); ?></td>
													<td><?php echo isit('req_mob', $value); ?></td>
													<td><?php echo isit('req_loc', $value); ?></td>
													<td> 
														<time class="timeago" datetime="<?php echo isit('req_date', $value); ?>" title="<?php echo isit('req_date', $value); ?>">1 hour ago</time> </td> 
														<td>
															

															<form accept="" method="post">
																<input type="hidden" name="id" value="<?php echo indexMe( (int) isit('req_id', $value, 0)); ?>">

																<button class="btn btn-sm btn-danger" name="make_read" value="1">readed</button>

															</form>



														</td>
													</tr>



												<?php endforeach; ?>

											</tbody>

										</table>

									<?php endif; ?>




								</div>













							</div>
						</div>
						<div class="tab-pane fade" id="pills-delete" role="tabpanel" aria-labelledby="pills-delete-tab">

							<div>




								<div id="accordion-delete">






									<?php 

									$details = selectFromTable( '*', ' nss_bg_reqst' , ' req_status = 1 ',$db);

									?>

									<?php if($details): ?>

										<table class="table dataTable ">
											<thead>
												<tr>
													<th>b group</th>
													<th>Name</th>
													<th>Email</th>
													<th>Mobile</th>
													<th>Location</th>
													<th>time</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($details as $key => $value): ?>

													<tr>
														<td><?php echo isit('req_bg', $value); ?></td>
														<td><?php echo isit('req_name', $value); ?></td>
														<td><?php echo isit('req_email', $value); ?></td>
														<td><?php echo isit('req_mob', $value); ?></td>
														<td><?php echo isit('req_loc', $value); ?></td>
														<td> 
															<time class="timeago" datetime="<?php echo isit('req_date', $value); ?>" title="<?php echo isit('req_date', $value); ?>">1 hour ago</time> </td> 
															<td>


																<form accept="" method="post">
																	<input type="hidden" name="id" value="<?php echo indexMe( (int) isit('req_id', $value, 0)); ?>">

																	<button class="btn btn-sm btn-danger" name="delete-perme" value="1">delete</button>

																</form>



															</td>
														</tr>



													<?php endforeach; ?>

												</tbody>

											</table>

										<?php endif; ?>







									</div>





								</div>

							</div> 
						</div>

					</div>

				</div>

			</div>
		</div>
		<?php include_once('includes/footer.php'); ?>