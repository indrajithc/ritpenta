<?php




include_once('includes/header.php'); ?>
<?php

if (isset($_POST['delete-fd'])) {


	$id = isit('id', $_POST, 0);
	$id = unIndexMe((int) $id );

	// if($_POST['make_delete'] == 1)
	$action = 1;


	$params = array(
		'fd_delete' => $action
	); 

	$istrue = updateTable( 'nss_feedback', $params, ' fd_id = ' . $id , $db);

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



	$istrue =  $db->execute_query(  " DELETE FROM nss_feedback WHERE fd_id = " . $id);
	

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

				<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="pills-active-tab" data-toggle="pill" href="#pills-active" role="tab" aria-controls="pills-active" aria-selected="true">feedbacks</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-delete-tab" data-toggle="pill" href="#pills-delete" role="tab" aria-controls="pills-delete" aria-selected="false"> Readed</a>
					</li>

				</ul>
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-active" role="tabpanel" aria-labelledby="pills-active-tab">

						<div>








							<div id="accordion">



								<?php 

								$details = selectFromTable( '*', ' nss_feedback' , ' fd_delete = 0 ',$db);

								?>

								<?php if($details): ?>
									<?php foreach ($details as $key => $value): ?>



										<div class="card border my-2">
											<div class="card-header" id="pheadingOne_<?php echo indexMe(  $value['fd_id'] ); ?>">
												<h5 class="mb-0">
													<a class="btn btn-link w-100" data-toggle="collapse" data-target="#headingOne_<?php echo indexMe(  $value['fd_id'] ); ?>" aria-expanded="true" aria-controls="#pheadingOne_<?php echo indexMe(  $value['fd_id'] ); ?>">
														<div class="row">
															<span class="col-sm-12 col-md-4 text-left text-info card-title text-capitalize">
																<?php echo isit(  'fd_name',  $value); ?>
															</span>
															<span class="col-sm-12 col-md-4 text-left">
																<span class="pt-2">
																	<i class="far fa-user"></i>
																</span>
																<span class="pb-1"><?php echo isit(  'fd_contact',  $value); ?></span>
															</span>
														<!-- 	<span class="col-sm-12 col-md-3 text-left">
																<span class="pt-2">
																	<i class="fas fa-phone-volume"></i>
																</span>
																<span class="pb-1"><?php echo isit(  'fd_phoneno',  $value); ?></span>

															</span> -->
															<span class="col-sm-12 col-md-4 text-right text-warning">

																<i>
																	

																	<time class="timeago" datetime="<?php echo isit('fd_date', $value); ?>" title="<?php echo isit('fd_date', $value); ?>">1 hour ago</time>
																</i> 

															</span>
														</div>

														<?php ?>
													</a>
												</h5>
											</div>

											<div id="headingOne_<?php echo indexMe(  $value['fd_id'] ); ?>" class="collapse " aria-labelledby="accordion" data-parent="#pheadingOne_<?php echo indexMe(  $value['fd_id'] ); ?>">
												<div class="card-body">

													<?php  echo isit(  'fd_msg',  $value); ?>
													<form class=" w-100 text-right" method="post" action="">
														<input type="hidden" name="id"  value="<?php 
														echo indexMe(  $value['fd_id'] );
														?>" >
														<button name="delete-fd" class="btn btn-info btn-sm 
														" type="submit" >Read</button>
													</form>
												</div>
											</div>
										</div>


									<?php endforeach; ?>
								<?php endif; ?>




							</div>













						</div>
					</div>
					<div class="tab-pane fade" id="pills-delete" role="tabpanel" aria-labelledby="pills-delete-tab">

						<div>




							<div id="accordion-delete">



								<?php 

								$details = selectFromTable( '*', ' nss_feedback' , ' fd_delete = 1 ',$db);

								?>

								<?php if($details): ?>
									<?php foreach ($details as $key => $value): ?>



										<div class="card border my-2">
											<div class="card-header" id="pxheadingOne_<?php echo indexMe(  $value['fd_id'] ); ?>">
												<h5 class="mb-0">
													<a class="btn btn-link w-100" data-toggle="collapse" data-target="#xheadingOne_<?php echo indexMe(  $value['fd_id'] ); ?>" aria-expanded="true" aria-controls="pxheadingOne_<?php echo indexMe(  $value['fd_id'] ); ?>">
														<div class="row">
															<span class="col-sm-12 col-md-4 text-left text-info card-title text-capitalize">
																<?php echo isit(  'fd_name',  $value); ?>
															</span>
															<span class="col-sm-12 col-md-4 text-left">
																<span class="pt-2">
																	<i class="far fa-user"></i>
																</span>
																<span class="pb-1"><?php echo isit(  'fd_contact',  $value); ?></span>
															</span>
														<!-- 	<span class="col-sm-12 col-md-3 text-left">
																<span class="pt-2">
																	<i class="fas fa-phone-volume"></i>
																</span>
																<span class="pb-1"><?php echo isit(  'fd_phoneno',  $value); ?></span>

															</span> -->
															<span class="col-sm-12 col-md-4 text-right text-warning">

																<i>
																	

																	<time class="timeago" datetime="<?php echo isit('fd_date', $value); ?>" title="<?php echo isit('fd_date', $value); ?>">1 hour ago</time>
																</i> 

															</span>
														</div>

														<?php ?>
													</a>
												</h5>
											</div>

											<div id="xheadingOne_<?php echo indexMe(  $value['fd_id'] ); ?>" class="collapse" aria-labelledby="pxheadingOne_<?php echo indexMe(  $value['fd_id'] ); ?>" data-parent="#accordion-delete">
												<div class="card-body">

													<?php  echo isit(  'fd_msg',  $value); ?>

													<form class=" w-100 text-right" method="post" action="">
														<input type="hidden" name="id"  value="<?php 
														echo indexMe(  $value['fd_id'] );
														?>" >
														<button name="delete-perme" class="btn btn-danger btn-sm 
														" type="submit" >delete</button>
													</form>

												</div>
											</div>
										</div>


									<?php endforeach; ?>
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