<?php



include_once('includes/header.php');


$id = -1;
if (isset($_GET['id'])) {
	$id = unIndexMe($_GET['id']);

}


if (   $id == -1) {

	setLocation("volunteer/viewcamp"); 
}




?>



<?php

if (isset($_POST['make_delete'])) {
	$action = 0;


	$idIN = isit('id', $_POST, 0 );
	$idIN = unIndexMe((int) $idIN );

	if($_POST['make_delete'] == 1)
		$action = 1;


	$params = array(
		'cp_delete' => $action
	); 

	$istrue = $db->display( " SELECT * FROM nss_camp_photo WHERE cp_pht_slno =  " . $idIN );
	$pathName = "";

	if (isset($istrue[0])) {
		$pathName = "../" . $istrue[0]['cp_pht_path']. "/" .  $istrue[0]['cp_pht_name'];
	}


	$istrue = $db->execute_query( " DELETE FROM nss_camp_photo WHERE cp_pht_slno =  " . $idIN );

	if($istrue){

		try {
			if (file_exists( $pathName)  && $pathName != '') { 
				unlink($pathName);
			}
		} catch (Exception $e) {

		}

		$message [0] = 1;
		$message [1] = ' updated ';  

	}  else {

		$message [0] = 4;
		$message [1] = ' update error ';  
	}

}

?>





<?php



if (isset($_POST['image-up'])) {
	var_dump($_POST);
	var_dump($_FILES);
}

?>


<div class="row">
	<div class="col">

		<?php 





		echo show_error($message); ?>


	</div>
</div>



<div class="row">
	<div class="col-sm-12 p-3  bg-white ">


<div class="card">
			<div class="card-body"> 


				</br>
		
		<center>	<h3 class="h3 mb-3 font-weight-normal danger-text"> Camp Gallery</h3></center>
		

</br>
		


		<?php


		$stmnt=" SELECT * FROM `nss_camp_reg`  c LEFT JOIN nss_camp_cordntrs d  ON c.cp_id = d.cmp_id WHERE c.cp_id = :id ";

		$params = array (
			':id' => $id
		);


		$details = $db->display($stmnt,  $params );

		if (isset(  $details[0])) {
			$details =   $details[0];
		}  else {


			setLocation("volunteer/viewcamp");
		}

		?>

		<?php if($details): ?>


			<div class="row">
				<div class="col-sm-12  ">




					<table class="table table-hover w-100">
						<tbody>
							<tr>
								<th scope="col">Camp key</th>
								<td>
									<?php echo  isit( 'cp_key', $details); ?>
								</td>

								<th scope="col">Name</th>
								<td> 
									<?php echo  isit( 'cp_name', $details); ?>
								</td>
							</tr> 

							<tr>
								<th scope="col">Date From</th>
								<td> 
									<?php echo  isit( 'cp_date_frm', $details); ?>
								</td>

								<th scope="col">Date To</th>
								<td> 
									<?php echo  isit( 'cp_date_to', $details); ?>
								</td>
							</tr>
							<tr>
								<th scope="col"></th>
								<td></td>
								<th scope="col"></th>
							
							</tr>

						</tbody>


					</table>






				</div>
			</div>





			<div class="row mt-4">
				<div class="col"> 
					<div class="progress"></div>
					<div class="row my-3">
						<div class="col">
							<label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
								<span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Import image with Blob URLs">
									<span class="fa fa-upload"></span> select image
								</span>
							</label>

						</div>

					</div>

					<div class="row d-none" id="hide-imageup">
						<div class="col-md-9">
							<!-- <h3>Demo:</h3> -->
							<div class="img-container">
								<img id="cropImage" src="images/picture.jpg" alt="Picture" onerror="this.onerror=null;this.src='assets/image/logob.jpg';">
							</div>
						</div>
						<div class="col-md-3">
							<!-- <h3>Preview:</h3> -->
							<div class="docs-preview clearfix">
								<div class="img-preview preview-lg"></div>
								<div class="img-preview preview-md"></div>
								<div class="img-preview preview-sm"></div>
								<div class="img-preview preview-xs"></div>
							</div>


							<form method="post" action="ajax" class="mt-3" id="submit_me_image_upload">
								<input type="hidden" name="camp" value="<?php echo indexMe((int)isit('cp_id', $details, 0)); ?>">
								<input type="hidden" name="action" value="image-to-camp"> 
								<input type="file"  class="sr-only d-none" id="inputImage" name="file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
								<input type="hidden" class="form-control" name="dataX" id="dataX" placeholder="x"> 
								<input type="hidden" class="form-control" name="dataY" id="dataY" placeholder="y"> 
								<input type="hidden" class="form-control" name="dataWidth" id="dataWidth" placeholder="width"> 
								<input type="hidden" class="form-control" name="dataHeight" id="dataHeight" placeholder="height"> 
								<input type="hidden" class="form-control" name="dataRotate" id="dataRotate" placeholder="rotate"> 
								<input type="hidden" class="form-control" name="dataScaleX" id="dataScaleX" placeholder="scaleX"> 
								<input type="hidden" class="form-control" name="dataScaleY" id="dataScaleY" placeholder="scaleY">



								<div class="form-group">
									<label class="form-label">Description</label>
									<textarea class="form-control form-desc" name="desc" style="height: 80px;"></textarea>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-success btn-block" name="image-up" id="selectedImg">upload</button>
								</div>

							</form>
						</div>
					</div>

				</div>

			</div>



			<div class="row mt-4">
				<div class="col-sm-12  ">

					<h4>Uploaded Images</h4>
					<?php

					$details = selectFromTable( '*' , ' nss_camp_photo ', ' 1  ORDER BY cp_pht_date  DESC ' , $db);

					?>
					<?php if ($details): ?>
						<table class="table table-hover w-100">
							<thead>
								<tr>
									<th>Image</th>
									<th>description</th>
									<th>Time</th> 
								</tr>
							</thead>
							<tbody> 
								<?php foreach ($details as $key => $value) : ?>

									<tr>
										<td>
											<img class="img-thumbnail" style=" width: 200px ; height: auto;  border-radius: 0 !important;" src="<?php echo  isit( 'cp_pht_path', $value); ?>/<?php echo  isit( 'cp_pht_name', $value); ?>">
										</td>
										<td> 
											<?php echo  isit( 'cp_pht_desc', $value); ?>
										</td>

										<td>  
											<time class="timeago" datetime="<?php echo isit('cp_pht_date', $value); ?>" title="<?php echo isit('cp_pht_date', $value); ?>">1 hour ago</time>
										</td>

										<td >
											<form accept="" method="post">
												<input type="hidden" name="id" value="<?php echo indexMe( (int) isit('cp_pht_slno', $value, 0)); ?>">
												<?php if( isit('cp_pht_delete', $value) == 0 ): ?>
													<button class="btn btn-sm btn-danger" name="make_delete" value="1">delete</button>
													<?php else: ?>
														<button class="btn btn-sm btn-success" name="make_delete" value="0">active</button>
													<?php endif; ?>
												</form>


											</td>
										</tr> 
									<?php endforeach; ?>
								</tbody>


							</table>

							<?php else: ?>
								<div class="alert alert-warning">
									<p>empty table</p>
								</div>

							<?php endif; ?>






						</div>
					</div>

				<?php endif; ?>

			</div> 
		</div>

















		<?php include_once('includes/footer.php'); ?>
