<?php



include_once('includes/header.php'); ?>


<?php

$details = array();

if (isset($_POST['find-me'])) {
	


	
	$stmnt='select * from stud_details where LOWER(admissionno) = LOWER(:admissionno)';




	$params=array( 
		':admissionno'    =>  trim($_POST['admnno']) 
	);



	$data = $db->display($stmnt,$params);

	if( $data){ 

		$details = $data[0];

	}
} 

if(empty($details)) {





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
		'ev_delete' => $action
	); 
	$istrue = $db->display( " SELECT * FROM nss_blood_donation WHERE bd_id =  " . $idIN );
	if ($istrue) {


		$istrue = $db->execute_query( " UPDATE nss_blood_donation  SET bd_delete = 1  WHERE bd_id =  " . $idIN );

		if($istrue){

			$message [0] = 1;
			$message [1] = ' updated ';  

		}  else {

			$message [0] = 4;
			$message [1] = ' update error ';  
		}



	} else {

		$message [0] = 3;
		$message [1] = ' doesn`t exists ';  
	}



}

?>






<?php
if(isset($_POST['submit'])){


	$admnno        =  $_POST['admnno'];
	$vol_bg       =  $_POST['vol_bg'];
	$vol_mob         =  $_POST['vol_mob']; 
	$vol_emailid      =  $_POST['vol_emailid'];
	$vol_ml            =  $_POST['vol_ml'];
	$date            =  Date('Y-m-d');




	$stmnt='select * from nss_blood_donation where bd_admno= :bd_admno AND DATE(bd_date) = :date AND bd_delete = 0 ';


	$params=array( 
		':bd_admno'   =>  $admnno  ,
		':date' => $date
	); 

	if(!$db->display($stmnt,$params)){




		$params=array(
			'bd_admno'        =>  $admnno,
			'bd_group'       =>  $vol_bg,
			'bd_email'         =>  $vol_emailid,
			'bd_mobile'            =>  $vol_mob,
			'bd_quantity'         =>  $vol_ml,
			'bd_added_by'         =>  $_SESSION[SYSTEM_NAME . 'userid0']

		);

		$istrue = insertIntoTable( 'nss_blood_donation' , $params , $db);
		if($istrue){

			$message [0] = 1;
			$message [1] = ' added '; 



		} else {
			$message [0] = 4;
			$message [1] = ' error '; 


		}
	}else{
		// $message=' value already exists';

		$message [0] = 3;
		$message [1] = '    already exists'; 


	}
}

?>



<div class="card">
<div class="card-body">


	



		<center>	<h3 class="h3 mb-3 font-weight-normal danger-text"> Blood Donors </h3> </center>
		





<div class="row">
	<div class="col">

		<?php 





		echo show_error($message); ?>


	</div>
</div>
<form class="form-horizontal bordered-row" id="add-volunteer-0"  action="" method="post" data-parsley-validate>

	<div class="row">
		<div class="col-9 ">


			<div class="form">


				<div class="form-group">
					<label class="bmd-label-floating"><b>Admission No</b></label>
					<div class="">

						<?php  
						$result = selectFromTable( ' * ', '  stud_details   ' , " 1   ", $db); ?>

						<select  id="admnno"   class="form-control select2 text-danger" name="admnno" placeholder="second camp coordinator " data-parsley-required="true"   >
							<option selected disabled > select Admission No  </option>
							<?php if ($result):?>
								<?php foreach ($result as $key => $value): ?>


									<option value="<?php echo $value['admissionno']; ?>"><?php echo ''.$value['name'] . ' ' . $value['admissionno']. ' ' . $value['courseid']. '-' . $value['branch_or_specialisation']; ?></option>



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

			<button class="btn btn-outline-info " name="find-me" style="margin-top: 1.9rem;" type="submit">find</button>

		</div>
	</div>

</form>


<?php   if( !empty($details)): ?>

	<form class="form-horizontal bordered-row" id="add-volunteer-01"  action="" method="post" >

		<div class="row">
			<div class="col-md-6 col-sm-12">

				<div class="form">
					<?php  
					$result = selectFromTable( ' * ', '  `nss_vol_reg` v LEFT JOIN stud_details s ON v.admnno = s.admissionno   ' , "1  ORDER BY s.courseid, s.branch_or_specialisation , s.name ", $db); ?>


					<div class="form-group">
						<label class="bmd-label-floating">Admission No</label>
						<div class="">

							<input type="text" class="form-control text-danger" name="admnno"  disabled value="<?php if(isset($details['admissionno'])) echo $details['admissionno'];  ?>">
							<input type="hidden" name="admnno"  value="<?php if(isset($details['admissionno'])) echo $details['admissionno'];  ?>">





						</div>
					</div>






					<div class="form-group">
						<label class="bmd-label-floating">Date</label>
						<div class="">

							<input type="text" class="form-control text-success" name="admnno"  disabled  value="<?php   echo Date('d/m/Y');  ?>" > 

						</div>
					</div>



					<div class="form-group">
						<label class="bmd-label-floating">Blood Group <span class="text-danger px-1">*</span></label>
						<div class="">
							<select name="vol_bg" class="form-control"   required>

								<option  value="A+"  selected  >Select</option>
								<option  value="O+" <?php if( strtolower( $details['blood'] ) == "a" ) echo " selected "; ?> >O+ve</option>
								<option  value="O-" <?php if( strtolower( $details['blood'] ) == "a" ) echo " selected "; ?> >O-ve</option>
								<option  value="B+" <?php if( strtolower( $details['blood'] ) == "a" ) echo " selected "; ?> >B+ve</option>
								<option  value="B-" <?php if( strtolower( $details['blood'] ) == "a" ) echo " selected "; ?> >B-ve</option>
								<option  value="A+" <?php if( strtolower( $details['blood'] ) == "a" ) echo " selected "; ?> >A+ve</option>
								<option  value="A-" <?php if( strtolower( $details['blood'] ) == "a" ) echo " selected "; ?> >A-ve</option>
								<option  value="AB+" <?php if( strtolower( $details['blood'] ) == "a" ) echo " selected "; ?> >AB+ve</option>
								<option  value="AB-" <?php if( strtolower( $details['blood'] ) == "a" ) echo " selected "; ?> >AB-ve</option>



							</select>
						</div>
					</div>


				</div>


			</div>
			<div class="col-md-6 col-sm-12">

				<div class="form">




					<div class="form-group">
						<label class="bmd-label-floating">Phone No <span class="text-danger px-1">*</span></label>
						<div class="">
							<input type="text" class="form-control"  placeholdera="Phone No" name="vol_mob"   data-parsley-type="number" value="<?php if(isset($details['mobile_phno'])) echo $details['mobile_phno'];  ?>" required>
						</div>
					</div>


					<div class="form-group">
						<label class="bmd-label-floating">Email Id</label>
						<div class="">
							<input type="email" class="form-control"  placeholdera="Email Id" name="vol_emailid"      value="<?php if(isset($details['email'])) echo $details['email'];  ?>" >
						</div>
					</div>	
					<div class="form-group">
						<label class="bmd-label-floating">Amount in ml <span class="text-danger px-1">*</span></label>
						<div class="d-flex flex-row">
							<input type="number" class="form-control "  placeholdera="Email Id" name="vol_ml"      value="300" required> <span class="p-2 flex-shrink text-danger"> ML</span>
						</div>
					</div>	



					<div class="btn-group" role="group">
						<div class="content-box text-center">
							<button type="submit" name="submit" value="" class="btn btn-lg btn-outline-primary">Add</button>
							<!-- <button type="button" name="submit1" value="" class="btn btn-lg btn-outline-primary">Upload</button> -->
						</div>
					</div>




				</div>







			</div>

		</div>


	</form>		 

<?php  endif; ?>




<div class="card">
<div class="card-body">


	



		<div class="table-responsive">

			<table class="table dataTable table-hover bg-white">
				<thead>
					<tr>
						<th scope="col">Date</th>
						<th scope="col">Quantity</th>
						<th scope="col">BG</th>
						<th scope="col">Name </th>
						<th scope="col">Adm No</th>
						<th scope="col">Department</th>
						<th scope="col">Mobile No</th>
						<th scope="col">Email Id</th>
						<th scope="col"></th> 
					</tr>
				</thead>

				<tbody>

					<?php
					$stmnt=" SELECT v.*, d.branch_or_specialisation, d.name, DATE(v.bd_date) AS ddate FROM `nss_blood_donation` v LEFT JOIN  stud_details d ON v.bd_admno = d.admissionno  WHERE v.bd_delete = 0  ORDER BY   v.bd_date  DESC";

					$details = $db->display($stmnt);

					?>

					<?php if ($details ): ?>
						<?php foreach ($details as $key => $value): ?>
							<tr>
								<td><?php echo $value['ddate']; ?></td>
								<td><?php echo $value['bd_quantity']; ?></td>
								<td><?php echo $value['bd_group']; ?></td>
								<td><?php echo $value['name']; ?></td>
								<td><?php echo $value['bd_admno']; ?></td>
								<td><?php echo $value['branch_or_specialisation']; ?></td>
								<td><?php echo $value['bd_mobile']; ?></td>
								<td><?php echo $value['bd_email']; ?></td>


								<td>

									<form accept="" method="post">
										<input type="hidden" name="id" value="<?php echo indexMe( (int) isit('bd_id', $value, 0)); ?>">
										
										<button class="btn btn-sm btn-danger" name="make_delete" value="1">delete</button>
										
									</form>



								</td>
							</tr>



						<?php endforeach; ?>
					<?php endif; ?>
				</tbody>
			</table>

		</div>




	</div> 
</div>




<?php

include_once("includes/footer.php");

?>

















































