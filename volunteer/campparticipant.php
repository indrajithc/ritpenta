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

$details = array();

if (isset($_POST['add-me'])) {
	
	$volid = unIndexMe( isit( 'volid', $_POST) );

	
	$chekfitst = selectFromTable(' * ', 'nss_camp_partcptn' , "  camp_id = $id AND camp_vol_id = $volid ", $db);
	if ($chekfitst ) {
		$message[0] = 3;
		$message[1] = " already exists ";
	} else {



		$params = array(
			'camp_id' => $id,
			'camp_vol_id' => $volid
		); 

		$rovil = insertIntoTable(' nss_camp_partcptn ', $params, $db);

		if( $rovil){  

			$message[0] = 1;
			$message[1] = " success";

		} else {

			$message[0] = 4;
			$message[1] = " error ";
		}

	} 

}

?>




<?php

if (isset($_POST['make_delete'])) {
	$action = 0;


	$idIN = isit('id', $_POST, 0 );
	$idIN = unIndexMe((int) $idIN );



	$istrue = $db->display( " SELECT * FROM nss_camp_partcptn WHERE camp_part_id =  " . $idIN );




	if($istrue){


		$istrue = $db->execute_query( " DELETE FROM nss_camp_partcptn WHERE camp_part_id =  " . $idIN );


		if($istrue) {
			$message [0] = 1;
			$message [1] = ' deleted ';  

		}  else {

			$message [0] = 4;
			$message [1] = ' error ';  
		} 

	}  else {

		$message [0] = 4;
		$message [1] = ' not exists ';  
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



</br>
		
		<center>	<h3 class="h3 mb-3 font-weight-normal danger-text">Camp Participation</h3></center>
		

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





			
			<form class="form-horizontal bordered-row   py-5" id="add-volunteer-0"  action="" method="post" data-parsley-validate>

				<h4><b>Camp Participants</b></h4>
				<div class="row  " >
					<div class="col-9 ">


						<div class="form">


							<div class="form-group">
								<label class="bmd-label-floating"></label>
								<div class="">

									<?php  
									$result = selectFromTable( ' * ', ' nss_vol_reg v LEFT JOIN  stud_details s  ON s.admissionno = v.admnno  ' , "  1 AND v.vol_id NOT IN ( SELECT camp_vol_id FROM nss_camp_partcptn  WHERE camp_id = $id )  ", $db); ?>

									<select  id="volid"   class="form-control select2 text-danger" name="volid" placeholder="second camp coordinator " data-parsley-required="true"   >
										<option selected disabled > select Admission No  </option>
										<?php if ($result):?>
											<?php foreach ($result as $key => $value): ?>


												<option value="<?php echo indexMe( $value['vol_id']  ); ?>"><?php echo ''.$value['name'] . ' ' . $value['admissionno']. ' ' . $value['courseid']. '-' . $value['branch_or_specialisation']; ?></option>



											<?php endforeach;?>
										<?php endif; ?>
										<?php ?>
										<?php ?>


									</select> 

								</div>
							</div>


						</div>


					</div>

					<div class="col-3"> 

						<button class="btn btn-outline-info " name="add-me" style="margin-top: 1.9rem;" type="submit">add </button>

					</div>
				</div>

			</form>




			<div class="row mt-4">
				<div class="col-sm-12  ">

					<?php

					$details = selectFromTable( '*' , ' nss_camp_partcptn p LEFT JOIN nss_vol_reg v ON v.vol_id = p.camp_vol_id LEFT JOIN stud_details d ON d.admissionno = v.admnno ', ' 1 ' , $db);

					?>
					<?php if ($details): ?>


						<div class="table-responsive">
							<table class="table dataTable table-hover bg-white w-100">
								<thead>
									<tr>
										<th scope="col">Vol Id</th>
										<th scope="col">Name </th>
										<th scope="col">Adm No</th>
										<th scope="col">BG</th>
										<th scope="col">Department</th>
										<th scope="col">Mobile No</th>
										<th scope="col">Email Id</th>
										<th scope="col"></th> 
									</tr>
								</thead>

								<tbody>


									<?php if ($details ): ?>
										<?php foreach ($details as $key => $value): ?>
											<tr>
												<td><?php echo $value['vol_regid']; ?></td>
												<td><?php echo $value['name']; ?></td>
												<td><?php echo $value['admnno']; ?></td>
												<td><?php echo $value['vol_bg']; ?></td>
												<td><?php echo $value['branch_or_specialisation']; ?></td>
												<td><?php echo $value['vol_mob']; ?></td>
												<td><?php echo $value['vol_emailid']; ?></td>


												<td >
													<form accept="" method="post">
														<input type="hidden" name="id" value="<?php echo indexMe( (int) isit('camp_part_id', $value, 0)); ?>">

														<button class="btn btn-sm btn-danger" name="make_delete" value="1">delete</button>

													</form>


												</td>
											</tr>



										<?php endforeach; ?>
									<?php endif; ?>
								</tbody>
							</table>
						</div>


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
