












<?php

include_once('../global.php'); ?>
<?php include_once('../root/functions.php'); ?>
<?php  

auth_login();

include_once('includes/header.php'); ?>

<?php

$message=array(
	null,
	null
);




include_once('../root/connection.php');
$db=  new Database();
$message='';






?>



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


	$message [0] = 3;
	$message [1] = ' non'; 



}


	// var_dump($details);



?>


<?php
if(isset($_POST['submit'])){

	$vol_id         =  $_POST['vol_id'];
	$admnno        =  $_POST['admnno'];
	$vol_bg       =  $_POST['vol_bg'];
	$vol_mob         =  $_POST['vol_mob'];
	$vol_alt_mob            =  $_POST['vol_alt_mob'];
	$vol_emailid      =  $_POST['vol_emailid'];
	$stmnt='select * from nss_vol_reg where vol_id= :vol_id';




	$params=array(


		':vol_id'        =>  $vol_id 

	);





	if(!$db->display($stmnt,$params)){




		$params=array(


			':vol_id'        =>  $vol_id,
			':admnno'       =>  $admnno,
			':vol_bg'         =>  $vol_bg,
			':vol_mob'            =>  $vol_mob,
			':vol_alt_mob'         =>  $vol_alt_mob,
			':vol_emailid'         =>  $vol_emailid

		);

		$stmnt =  'insert into nss_vol_reg(vol_id,admnno,vol_bg,vol_mob,vol_alt_mob,vol_emailid) values(:vol_id,:admnno,:vol_bg,:vol_mob,:vol_alt_mob,:vol_emailid)';
		$istrue=$db->execute_query($stmnt,$params);
		if($istrue){
			$message=' added!';

			$message [0] = 1;
			$message [1] = ' added '; 



		}else
		$message=$istrue;	
	}else{
		// $message=' value already exists';

		$message [0] = 3;
		$message [1] = ' value already exists'; 


	}
}

?>





<div class="row">
	<div class="col h3 mb-3 bg-primary text-white">



		<div class="page-header">
			<h1>Add Volunteer</h1>
		</div>





	</div>
</div>


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
					<label class="bmd-label-floating">Admission No</label>
					<div class="">
						<input type="text" class="form-control"  placeholder="Admission No" name="admnno"   data-parsley-type="text">
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


					<div class="form-group">
						<label class="bmd-label-floating">Admission No</label>
						<div class="">
							<input type="text" class="form-control text-danger"  placeholdera="Phone No" name="vol_mob"   data-parsley-type="text" disabled value="<?php if(isset($details['admissionno'])) echo $details['admissionno'];  ?>">

							<input type="hidden" name="admnno"  value="<?php if(isset($details['admissionno'])) echo $details['admissionno'];  ?>">
						</div>
					</div>



					<div class="form-group">
						<label for="vol_id" class="bmd-label-floating">Volunteer Id</label>
						<div class="">
							<input id="vol_id" type="text" class="form-control"  placeholdera="Volunteer Id..." name="vol_id"   data-parsley-type="number" required>
						</div>
					</div>




					<div class="form-group">
						<label class="bmd-label-floating">Blood Group</label>
						<div class="">
							<select name="vol_bg" class="form-control"   required>

								<option  value="A+"  selected  >Select</option>
								<option  value="A+" <?php if( strtolower( $details['blood'] ) == "a" ) echo " selected "; ?> >O+ve</option>
								<option  value="A+" <?php if( strtolower( $details['blood'] ) == "a" ) echo " selected "; ?> >O-ve</option>
								<option  value="A+" <?php if( strtolower( $details['blood'] ) == "a" ) echo " selected "; ?> >B+ve</option>
								<option  value="A+" <?php if( strtolower( $details['blood'] ) == "a" ) echo " selected "; ?> >B-ve</option>
								<option  value="A+" <?php if( strtolower( $details['blood'] ) == "a" ) echo " selected "; ?> >A+ve</option>
								<option  value="A+" <?php if( strtolower( $details['blood'] ) == "a" ) echo " selected "; ?> >A-ve</option>
								<option  value="A+" <?php if( strtolower( $details['blood'] ) == "a" ) echo " selected "; ?> >AB+ve</option>
								<option  value="A+" <?php if( strtolower( $details['blood'] ) == "a" ) echo " selected "; ?> >AB-ve</option>


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
							<input type="text" class="form-control"  placeholdera="Phone No" name="vol_mob"   data-parsley-type="number" value="<?php if(isset($details['mobile_phno'])) echo $details['mobile_phno'];  ?>" required>
						</div>
					</div>

					<div class="form-group">
						<label class="bmd-label-floating">Alternate Phone No</label>
						<div class="">
							<input type="text" class="form-control"  placeholdera="Alternate Phone No" name="vol_alt_mob"   data-parsley-type="number" required >
						</div>
					</div>

					<div class="form-group">
						<label class="bmd-label-floating">Email Id</label>
						<div class="">
							<input type="email" class="form-control"  placeholdera="Email Id" name="vol_emailid"      value="<?php if(isset($details['email'])) echo $details['email'];  ?>" required>
						</div>
					</div>	
					<div class="btn-group" role="group">
						<div class="content-box text-center">
							<button type="submit" name="submit" value="" class="btn btn-lg btn-outline-primary">Add</button>
							<button type="button" name="submit1" value="" class="btn btn-lg btn-outline-primary">Upload</button>
						</div>
					</div>




				</div>







			</div>

		</div>


	</form>		 


<?php  endif; ?>



<?php

include_once("includes/footer.php");

?>

















































