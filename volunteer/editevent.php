<?php

/**
 * @Author: indran
 * @Date:   2018-11-11 19:17:33
 * @Last Modified by:   indran
 * @Last Modified time: 2018-11-12 22:26:45
 */ 


//(?=<!--)(.*)(?=-->)(.*)(?=\n)


include_once('includes/header.php');


$id = -1;
if (isset($_GET['id'])) {
	$id = unIndexMe($_GET['id']);

}


if (   $id == -1) {

	setLocation("volunteer/viewevent"); 
}




?>



<?php


$stmnt=" SELECT * FROM `nss_event_reg`  c LEFT JOIN nss_eve_cordntrs d  ON c.event_id = d.eve_id WHERE c.event_id = :id ";

$params = array (
	':id' => $id
);


$details = $db->display($stmnt,  $params );

if (isset(  $details[0])) {
	$details =   $details[0];
}  else {


	setLocation("volunteer/viewevent");
}

?>



<?php

if(isset($_POST['submit-btn'])){

	$event_name        =  $_POST['event_name'];
	$event_date        =  $_POST['event_date'];
	$event_hrs      =  $_POST['event_hrs'];
	$event_dtls         =  $_POST['event_dtls'];
	$event_id = $_POST['event_id'];


	$eve_coordinator_1 = $_POST['eve_coordinator_1'];
	$eve_coordinator_2= $_POST['eve_coordinator_2'];


	if ($eve_coordinator_1  ==  $eve_coordinator_2) {

		$message [0] = 3;
		$message [1] = ' both coordinators cannot be same '; 



	} else  

	// if(strtotime($event_date_frm) <= strtotime($event_date_to)) 

	{






		$stmnt='select * from nss_event_reg where (  event_id= :event_id   AND  event_key = :event_key ) OR (  event_id= :event_id1  AND  event_key != :event_key1 ) ';

		// $stmnt=" SELECT * FROM nss_event_reg WHERE event_name= '" . $event_name ."' OR event_key= '" . $event_id ."' ";



		$params=array( 
			':event_id'   =>  $id  ,
			':event_id1'   =>  $id  , 
			':event_key'   =>  $event_id  ,
			':event_key1'   =>  $event_id  
		);  

		if($db->display($stmnt,$params)){






				// $stmnt =  'insert into nss_event_reg(event_key, event_name,event_date_frm,event_date_to,event_details) values(:event_id, :event_name,:event_date_frm,:event_date_to,:event_details)';



			$params=array(
				'event_key' 	=> $event_id,
				'event_name'        =>  $event_name,
				'event_date'       =>  $event_date,
				'event_hrs'         =>  $event_hrs,
				'event_dtls'            =>  $event_dtls
			);

			$istrue= updateTable( ' nss_event_reg ', $params, " event_id = $id  " ,  $db );
			$istrue = $id ;

			if($istrue){
					//$message=' added!';

				$message [0] = 1;
				$message [1] = ' event added '; 


				$retr = $db->execute_query(" DELETE FROM nss_eve_cordntrs WHERE eve_id = $istrue ;");


				$params=array( 
					'eve_id' 	=> $istrue,
					'eve_cd_id1'        =>  $eve_coordinator_1,
					'eve_cd_id2'       =>  $eve_coordinator_2  
				);


				$result = insertInToTable('nss_eve_cordntrs', $params, $db);

				if ($result) {

					$message [0] = 1;
					$message [1] = ' event and coordinators are added '; 
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



	}

	//  else  {

	// 	$message [0] = 4;
	// 	$message [1] = ' end date should not be less than start date '; 
	// }



}



?>



<div class="row">
	<div class="col-sm-12 px-3  bg-white ">



		<div class="page-header">
			<div class="h3 mb-3 bg-primary text-white"><h1> Complete Details</h1>
			</div>
		</div>




		<?php


		$stmnt=" SELECT * FROM `nss_event_reg`  c LEFT JOIN nss_eve_cordntrs d  ON c.event_id = d.eve_id WHERE c.event_id = :id ";

		$params = array (
			':id' => $id
		);
		
		$details = $db->display($stmnt,  $params );

		if (isset(  $details[0])) {
			$details =   $details[0];
		}  else {


			setLocation("volunteer/viewevent");
		}

		?>

		<?php if($details): ?>








			<div class="card">
				<div class="card-body">












					<form  id="addevent"  action="" method="post" class="form-horizontal borderd-row" align="center" data-parsley-validate >

						<center>	<h3 class="h3 mb-3 font-weight-normal danger-text">Add Regular Activities</h3></center>




						<?php echo show_error($message); ?>

						<div class="form-group row">
							<label for="exampleInputName2" class="col-sm-3 col-form-label">Event ID</label>
							<div class="col-sm-9">
								<input type="text" class="form-control text-success" name="event_id" placeholder="Event ID" data-parsley-required="true"    value="<?php echo  isit( 'event_key', $details); ?>" >
							</div>
						</div>




						<div class="form-group row">
							<label for="exampleInputName2" class="col-sm-3 col-form-label">Event Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="event_name" placeholder="Event Name" data-parsley-required="true" value="<?php echo  isit( 'event_name', $details); ?>"  required>
							</div>
						</div>



						<div class="form-group row">
							<label for="exampleInputName2" class="col-sm-3 col-form-label">Event On</label>
							<div class="col-sm-9">
								<input type="text" class="form-control datetimepicker" data-date-format="YYYY-M-D" name="event_date"   value="<?php echo  isit( 'event_date', $details); ?>" placeholder=" Event On" data-parsley-required="true"  >

							</div>
						</div>


						<div class="form-group row">
							<label for="exampleInputName2" class="col-sm-3 col-form-label">Total Hours</label>
							<div class="col-sm-9">

								<input type="text" class="form-control datetimepicker" value="<?php echo  isit( 'event_hrs', $details); ?>" data-date-format="H:mm" name="event_hrs" placeholder=" Event Hours" data-parsley-required="true"  >
							</div>
						</div>



						<div class="form-group row">
							<label for="exampleInputName2" class="col-sm-3 col-form-label">Objectives</label>
							<div class="col-sm-9">

								<textarea type="textarea" class="form-control" name="event_dtls" placeholder="Objective Of Event" data-parsley-required="true"   style="height: 100px"><?php echo  isit( 'event_dtls', $details); ?></textarea>

							</div>
						</div>




						<center ><h5  class="text-capitalize mt-3 ">event coordinators</h5> </center>
					</br>


					<?php  
					$result = selectFromTable( ' * ', '  `nss_vol_reg` v LEFT JOIN stud_details s ON v.admnno = s.admissionno   ' , "1  ORDER BY s.courseid, s.branch_or_specialisation , s.name ", $db); ?>


					<div class="form-group row">
						<label for="exampleInputcoordinator12" class="col-sm-3 col-form-label">coordinator 1:</label>
						<div class="col-sm-9">


							<select  id="exampleInputcoordinator12" type="textarea" class="form-control select2" name="eve_coordinator_1" placeholder="first event coordinator " data-parsley-required="true"   >
								<option selected disabled > select first coordinator  </option>
								<?php if ($result):?>
									<?php foreach ($result as $key => $value): ?>


										<option value="<?php echo $value['vol_id']; ?>" 
											<?php if( isit( 'eve_cd_id1', $details)  == $value['vol_id'] ) echo " selected "; ?>

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


								<select  id="exampleInputcoordinator22" type="textarea" class="form-control select2" name="eve_coordinator_2" placeholder="second event coordinator " data-parsley-required="true"   >
									<option selected disabled > select second coordinator  </option>
									<?php if ($result):?>
										<?php foreach ($result as $key => $value): ?>


											<option value="<?php echo $value['vol_id']; ?>"



												<?php if( isit( 'eve_cd_id2', $details)  == $value['vol_id'] ) echo " selected "; ?>



												><?php echo ''.$value['name'] . ' ' . $value['admissionno']. ' ' . $value['courseid']. '-' . $value['branch_or_specialisation']; ?></option>



											<?php endforeach;?>
										<?php endif; ?>
										<?php ?>
										<?php ?>


									</select> 
								</div>
							</div>




							<button type="submit"  class="btn btn-success mr-2 float-right"  name="submit-btn">Submit
							</button>






						</form>






					</div>

				</div>







			<?php endif; ?>

		</div> 
	</div>

















	<?php include_once('includes/footer.php'); ?>
