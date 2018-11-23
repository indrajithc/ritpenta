<?php






include_once('includes/header.php');


$id = -1;
if (isset($_GET['id'])) {
	$id = unIndexMe($_GET['id']);

}


if (   $id == -1) {

	setLocation("admin/viewvol"); 
}



$stmnt=" SELECT * FROM `nss_vol_reg` v LEFT JOIN  stud_details d ON v.admnno = d.admissionno   WHERE v.vol_id = :id ";

$params = array (
	':id' => $id
);

$details = $db->display($stmnt,  $params );

if (isset(  $details[0])) {
	$details =   $details[0];
}  else {

	setLocation("admin/viewvol"); 
}



?>








<?php
if(isset($_POST['submit'])){

	$vol_regid         =  $_POST['vol_regid'];
	$admnno        =  $_POST['admnno'];
	$vol_bg       =  $_POST['vol_bg'];
	$vol_mob         =  $_POST['vol_mob'];
	$vol_alt_mob            =  $_POST['vol_alt_mob'];
	$vol_emailid      =  $_POST['vol_emailid'];


	$stmnt='select * from nss_vol_reg where (  admnno= :admnno  AND  vol_regid = :vol_regid ) OR (  admnno= :admnno1  AND  vol_regid != :vol_regid1  ) ';


	$params=array( 
		':admnno'   =>  $admnno  ,
		':admnno1'   =>  $admnno  ,
		':vol_regid'   =>  $vol_regid  ,
		':vol_regid1'   =>  $vol_regid  
	);  

	if($db->display($stmnt,$params)){




		$params=array(


			'vol_regid'        =>  $vol_regid,
			'admnno'       =>  $admnno,
			'vol_bg'         =>  $vol_bg,
			'vol_mob'            =>  $vol_mob,
			'vol_alt_mob'         =>  $vol_alt_mob,
			'vol_emailid'         =>  $vol_emailid

		);

		$istrue= updateTable( ' nss_vol_reg ', $params, " vol_id = $id  " ,  $db );
		if($istrue){

			$message [0] = 1;
			$message [1] = ' updated ';  

		}  else {

			$message [0] = 4;
			$message [1] = ' update error ';  
		}
	}else{
		// $message=' value already exists';

		$message [0] = 3;
		$message [1] = ' id doesn`t exists or duplicate vol id'; 


	}
}

?>
<div class="card">
<div class="card-body">


<div class="row">
	<div class="col-sm-12 p-3  bg-white ">



		
	<center>	<h3 class="h3 mb-3 font-weight-normal danger-text"> Update  Volunteer Details</h3> </center>
		
		<?php 




		


		$stmnt=" SELECT * FROM `nss_vol_reg` v LEFT JOIN  stud_details d ON v.admnno = d.admissionno   WHERE v.vol_id = :id ";

		$params = array (
			':id' => $id
		);


		$details = $db->display($stmnt,  $params );

		if (isset(  $details[0])) {
			$details =   $details[0];
		}  else {

			
			setLocation("admin/viewvol");
		}

		?>



		<div class="row">
			<div class="col">

				<?php 





				echo show_error($message); ?>


			</div>
		</div>


		<div class="row">
			<div class="col-sm-12 col-md-8 offset-md-2">




				<?php   if( !empty($details)): ?>

					<form class="form-horizontal bordered-row" id="add-volunteer-01"  action="" method="post" >

						<div class="row">
							<div class="col-md-6 col-sm-12">

								<div class="form">


									<div class="form-group">
										<label class="bmd-label-floating">Admission No</label>
										<div class="">

											<input type="text" class="form-control text-danger" name="admnno"  disabled value="<?php echo  isit( 'admnno', $details); ?>">
											<input type="hidden" name="admnno"  value="<?php echo  isit( 'admnno', $details); ?>">





										</div>
									</div>



									<div class="form-group">
										<label for="vol_regid" class="bmd-label-floating">Volunteer Id</label>
										<div class="">
											<input id="vol_regid" type="text" class="form-control"  placeholdera="Volunteer Id..." name="vol_regid"   data-parsley-type="number"

											value="<?php echo  isit( 'vol_regid', $details); ?>"
											required>
										</div>
									</div>




									<div class="form-group">
										<label class="bmd-label-floating">Blood Group</label>
										<div class="">
											<select name="vol_bg" class="form-control"   required>

												<option  value=""  selected  >Select</option>
												<option  value="O+" <?php if( strtolower( $details['vol_bg'] ) ==strtolower( "O+" )) echo " selected "; ?> >O+ve</option>
												<option  value="O-" <?php if( strtolower( $details['vol_bg'] ) ==strtolower( "O-" )) echo " selected "; ?> >O-ve</option>
												<option  value="B+" <?php if( strtolower( $details['vol_bg'] ) ==strtolower( "B+" )) echo " selected "; ?> >B+ve</option>
												<option  value="B-" <?php if( strtolower( $details['vol_bg'] ) ==strtolower( "B-" )) echo " selected "; ?> >B-ve</option>
												<option  value="A+" <?php if( strtolower( $details['vol_bg'] ) ==strtolower( "A+" )) echo " selected "; ?> >A+ve</option>
												<option  value="A-" <?php if( strtolower( $details['vol_bg'] ) ==strtolower( "A-" )) echo " selected "; ?> >A-ve</option>
												<option  value="AB+" <?php if( strtolower( $details['vol_bg'] ) == strtolower("AB+" )) echo " selected "; ?> >AB+ve</option>
												<option  value="AB-" <?php if( strtolower( $details['vol_bg'] ) == strtolower("AB-" )) echo " selected "; ?> >AB-ve</option>



											</select>
										</div>
									</div>





								</div>


							</div>
							<div class="col-md-6 col-sm-12">

								<div class="form">




									<div class="form-group">
										<label class="bmd-label-floating">Phone No</label>
										<div class="">
											<input type="text" class="form-control"  placeholdera="Phone No" name="vol_mob"   data-parsley-type="number" value="<?php if(isset($details['vol_mob'])) echo $details['vol_mob'];  ?>" required>
										</div>
									</div>

									<div class="form-group">
										<label class="bmd-label-floating">Alternate Phone No</label>
										<div class="">
											<input type="text" class="form-control"  placeholdera="Alternate Phone No" name="vol_alt_mob"   data-parsley-type="number" 
											value="<?php echo  isit( 'vol_alt_mob', $details); ?>"
											required >
										</div>
									</div>

									<div class="form-group">
										<label class="bmd-label-floating">Email Id</label>
										<div class="">
											<input type="email" class="form-control"  placeholdera="Email Id" name="vol_emailid"      value="<?php if(isset($details['vol_emailid'])) echo $details['vol_emailid'];  ?>" required>
										</div>
									</div>	
									<div class="btn-group" role="group">
										<div class="content-box text-center">
											<button type="submit" name="submit" value="" class="btn btn-lg btn btn-success">update</button>
											<!-- <button type="button" name="submit1" value="" class="btn btn-lg btn-outline-primary">Upload</button> -->
										</div>
									</div>




								</div>







							</div>

						</div>


					</form>		 


				<?php  endif; ?>







			</div>
		</div>


	</div> 
</div>

















<?php include_once('includes/footer.php'); ?>
