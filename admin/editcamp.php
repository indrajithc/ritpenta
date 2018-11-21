<?php


include_once('includes/header.php');


$id = -1;
if (isset($_GET['id'])) {
	$id = unIndexMe($_GET['id']);

}


if (   $id == -1) {

	setLocation("admin/viewcamp"); 
}




?>



<?php


$stmnt=" SELECT * FROM `nss_camp_reg`  c LEFT JOIN nss_camp_cordntrs d  ON c.cp_id = d.cmp_id WHERE c.cp_id = :id ";

$params = array (
	':id' => $id
);


$details = $db->display($stmnt,  $params );

if (isset(  $details[0])) {
	$details =   $details[0];
}  else {


	setLocation("admin/viewcamp");
}

?>



<?php

if(isset($_POST['submit-btn'])){

	$cp_name         =  $_POST['cp_name'];
	$cp_date_frm        =  $_POST['cp_date_frm'];
	$cp_date_to      =  $_POST['cp_date_to'];
	$cp_details         =  $_POST['cp_details'];
	$cp_id = $_POST['cp_id'];


	$cp_coordinator_1 = $_POST['cp_coordinator_1'];
	$cp_coordinator_2 = $_POST['cp_coordinator_2'];



	if ($cp_coordinator_1  ==  $cp_coordinator_2) {

		$message [0] = 3;
		$message [1] = ' both coordinators cannot be same '; 



	} else  if(strtotime($cp_date_frm) <= strtotime($cp_date_to)) {






		$stmnt='select * from nss_camp_reg where (  cp_id= :cp_id   AND  cp_key = :cp_key ) OR (  cp_id= :cp_id1  AND  cp_key != :cp_key1 ) ';

		// $stmnt=" SELECT * FROM nss_camp_reg WHERE cp_name= '" . $cp_name ."' OR cp_key= '" . $cp_id ."' ";



		$params=array( 
			':cp_id'   =>  $id  ,
			':cp_id1'   =>  $id  , 
			':cp_key'   =>  $cp_id  ,
			':cp_key1'   =>  $cp_id  
		);  

		if($db->display($stmnt,$params)){






				// $stmnt =  'insert into nss_camp_reg(cp_key, cp_name,cp_date_frm,cp_date_to,cp_details) values(:cp_id, :cp_name,:cp_date_frm,:cp_date_to,:cp_details)';



			$params=array(

				'cp_key' 	=> $cp_id,
				'cp_name'        =>  $cp_name,
				'cp_date_frm'       =>  $cp_date_frm,
				'cp_date_to'         =>  $cp_date_to,
				'cp_details'            =>  $cp_details

			);

			$istrue= updateTable( ' nss_camp_reg ', $params, " cp_id = $id  " ,  $db );
			$istrue = $id ;

			if($istrue){
					//$message=' added!';

				$message [0] = 1;
				$message [1] = ' camp added '; 


				$retr = $db->execute_query(" DELETE FROM nss_camp_cordntrs WHERE cmp_id = $istrue ;");


				$params=array( 
					'cmp_id' 	=> $istrue,
					'cmp_cd_id1'        =>  $cp_coordinator_1,
					'cmp_cd_id2'       =>  $cp_coordinator_2  
				);


				$result = insertInToTable('nss_camp_cordntrs', $params, $db);

				if ($result) {

					$message [0] = 1;
					$message [1] = ' camp and coordinators are added '; 
				}


			}
			else
			{
			//$message=$istrue;	

		// $message=' value already exists';

				$message [0] = 3;
				$message [1] = ' something is wrong'; 
			}

		} else {



			$message [0] = 2;
			$message [1] = ' cmap not exists'; 

		}



	} else  {

		$message [0] = 4;
		$message [1] = ' end date should not be less than start date '; 
	}



}



?>







		<?php


		$stmnt=" SELECT * FROM `nss_camp_reg`  c LEFT JOIN nss_camp_cordntrs d  ON c.cp_id = d.cmp_id WHERE c.cp_id = :id ";

		$params = array (
			':id' => $id
		);
		
		$details = $db->display($stmnt,  $params );

		if (isset(  $details[0])) {
			$details =   $details[0];
		}  else {


			setLocation("admin/viewcamp");
		}

		?>

		<?php if($details): ?>








			<div class="card">
				<div class="card-body">

					<form  id="addcampa"  action="" method="post" class="form-horizontal borderd-row" align="center" data-parsley-validate >

						<h3 class="h3 mb-3 font-weight-normal danger-text">Update Camp Activities</h3>




						<?php echo show_error($message); ?>

						<div class="form-group row">
							<label for="exampleInputName2" class="col-sm-3 col-form-label">Camp ID</label>
							<div class="col-sm-9">
								<input type="text" class="form-control text-success" name="cp_id" placeholder="Camp ID" data-parsley-required="true"   value="<?php echo  isit( 'cp_key', $details); ?>" >
							</div>
						</div>




						<div class="form-group row">
							<label for="exampleInputName2" class="col-sm-3 col-form-label">Camp Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="cp_name" placeholder="Camp Name" data-parsley-required="true" value="<?php echo  isit( 'cp_name', $details); ?>" required>
							</div>
						</div>



						<div class="form-group row">
							<label for="exampleInputName2" class="col-sm-3 col-form-label">Start On</label>
							<div class="col-sm-9">
								<input type="text" class="form-control datetimepicker" data-date-format="YYYY-M-D" name="cp_date_frm" placeholder=" Start On" data-parsley-required="true" value="<?php echo  isit( 'cp_date_frm', $details); ?>" >

							</div>
						</div>

						<div class="form-group row">
							<label for="exampleInputName2" class="col-sm-3 col-form-label">End On</label>
							<div class="col-sm-9">
								<input type="text" class="form-control datetimepicker" data-date-format="YYYY-M-D" name="cp_date_to"  placeholder=" End On" data-parsley-required="true" value="<?php echo  isit( 'cp_date_to', $details); ?>" >


							</div>
						</div>




						<div class="form-group row">
							<label for="exampleInputName2" class="col-sm-3 col-form-label">Objectives</label>
							<div class="col-sm-9">

								<textarea type="textarea" class="form-control" name="cp_details" placeholder="Objective Of Camp" data-parsley-required="true"   style="height: 100px"><?php echo  isit( 'cp_details', $details); ?></textarea>

							</div>
						</div>




						<h5  class="text-capitalize mt-3 text-left">camp coordinator</h5>


						<?php  






						$result = selectFromTable( ' * ', '  `nss_vol_reg` v LEFT JOIN stud_details s ON v.admnno = s.admissionno   ' , "1  ORDER BY s.courseid, s.branch_or_specialisation , s.name ", $db); ?>


						<div class="form-group row">
							<label for="exampleInputcoordinator12" class="col-sm-3 col-form-label">coordinator 1:</label>
							<div class="col-sm-9">


								<select  id="exampleInputcoordinator12" type="textarea" class="form-control select2" name="cp_coordinator_1" placeholder="first camp coordinator " data-parsley-required="true"   >
									<option selected disabled > select first coordinator  </option>
									<?php if ($result):?>
										<?php foreach ($result as $key => $value): ?>


											<option value="<?php echo $value['vol_id']; ?>"  

												<?php if( isit( 'cmp_cd_id1', $details)  == $value['vol_id'] ) echo " selected "; ?>



												><?php echo ''.$value['name'] . ' ' . $value['admissionno']. ' ' . $value['courseid']. '-' . $value['branch_or_specialisation']; ?></option>



											<?php endforeach;?>
										<?php endif; ?>
										<?php ?>
										<?php ?>


									</select> 
								</div>
							</div>




							<div class="form-group row">
								<label for="exampleInputcoordinator22" class="col-sm-3 col-form-label">coordinator 2:</label>
								<div class="col-sm-9">


									<select  id="exampleInputcoordinator22" type="textarea" class="form-control select2" name="cp_coordinator_2" placeholder="second camp coordinator " data-parsley-required="true"   >
										<option selected disabled > select second coordinator  </option>
										<?php if ($result):?>
											<?php foreach ($result as $key => $value): ?>


												<option value="<?php echo $value['vol_id']; ?>"



													<?php if( isit( 'cmp_cd_id2', $details)  == $value['vol_id'] ) echo " selected "; ?>


													><?php echo ''.$value['name'] . ' ' . $value['admissionno']. ' ' . $value['courseid']. '-' . $value['branch_or_specialisation']; ?></option>



												<?php endforeach;?>
											<?php endif; ?>
											<?php ?>
											<?php ?>


										</select> 
									</div>
								</div>




								<button type="submit"  class="btn btn-success mr-2 float-right"  name="submit-btn">Update
								</button>






							</form>

						</div>

					</div>







				<?php endif; ?>

			</div> 
		</div>

















		<?php include_once('includes/footer.php'); ?>
