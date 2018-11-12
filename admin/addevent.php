 <?php  include_once('includes/header.php'); ?>




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
 		
 	} else  {
 		$stmnt=" SELECT * FROM nss_event_reg WHERE event_name= '" . $event_name ."' OR event_key= '" . $event_id ."' ";
 		$result = $db->display( $stmnt);
 		if( $result ){
 			$message [0] = 2;
 			$message [1] = ' cmap name or camp id is already exists'; 
 		} else {
 			$stmnt =  'insert into nss_event_reg(event_key, event_name,event_date,event_hrs,event_dtls) values(:event_key, :event_name,:event_date,:event_hrs,:event_dtls)';
 			$params=array(
 				':event_key' 	=> $event_id,
 				':event_name'        =>  $event_name,
 				':event_date'       =>  $event_date,
 				':event_hrs'         =>  $event_hrs,
 				':event_dtls'            =>  $event_dtls
 			);
 			$istrue=$db->execute_query_return_id($stmnt,$params);
 			if($istrue){
					//$message=' added!';
 				$message [0] = 1;
 				$message [1] = ' Event added '; 
 				$params=array( 
 					'eve_id' 	=> $istrue,
 					'eve_cd_id1'        =>  $eve_coordinator_1,
 					'eve_cd_id2'       =>  $eve_coordinator_2 
 				);
 				$result = insertInToTable(' nss_eve_cordntrs', $params, $db);
 				if ($result) {
 					$message [0] = 1;
 					$message [1] = ' Event and coordinators are added '; 
 				}
 			}
 			else
 			{
			//$message=$istrue;	
		// $message=' value already exists';
 				$message [0] = 3;
 				$message [1] = ' something is wrong'; 
 			}
 		}
 	}

 	//  else  {
 	// 	$message [0] = 4;
 	// 	$message [1] = ' end date should not be less than start date '; 
 	// }
 }
 ?>



 

 <div class="card">
 	<div class="card-body">

 		<form  id="addevent"  action="" method="post" class="form-horizontal borderd-row" align="center" data-parsley-validate >

 			<center>	<h3 class="h3 mb-3 font-weight-normal danger-text">Add Regular Activities</h3></center>




 			<?php echo show_error($message); ?>

 			<div class="form-group row">
 				<label for="exampleInputName2" class="col-sm-3 col-form-label">Event ID</label>
 				<div class="col-sm-9">
 					<input type="text" class="form-control text-success" name="event_id" placeholder="Event ID" data-parsley-required="true"   value="<?php
 					try {
 						$keyge = "EVE_" . Date('Y') . "_"; 
 						$keyge .= rand(100,999)."";
 						$result = selectFromTable( 'COUNT(*) AS count ', 'nss_event_reg' , "1", $db);
 						if( isset($result[0]['count'])){
 							$keyge  .=  $result[0]['count'];
 						}
 						echo $keyge ;
 						} catch(Exception $e){
 						}
 						?>">
 					</div>
 				</div>




 				<div class="form-group row">
 					<label for="exampleInputName2" class="col-sm-3 col-form-label">Event Name</label>
 					<div class="col-sm-9">
 						<input type="text" class="form-control" name="event_name" placeholder="Event Name" data-parsley-required="true"  required>
 					</div>
 				</div>



 				<div class="form-group row">
 					<label for="exampleInputName2" class="col-sm-3 col-form-label">Event On</label>
 					<div class="col-sm-9">
 						<input type="text" class="form-control datetimepicker" data-date-format="YYYY-M-D" name="event_date" placeholder=" Event On" data-parsley-required="true"  >

 					</div>
 				</div>

 				<div class="form-group row">
 					<label for="exampleInputName2" class="col-sm-3 col-form-label">Total Hours</label>
 					<div class="col-sm-9">

 						<input type="text" class="form-control datetimepicker" data-date-format="H:mm" name="event_hrs" placeholder=" Event Hours" data-parsley-required="true"  >
 					</div>
 				</div>




 				<div class="form-group row">
 					<label for="exampleInputName2" class="col-sm-3 col-form-label">Objectives</label>
 					<div class="col-sm-9">

 						<textarea type="textarea" class="form-control" name="event_dtls" placeholder="Objective Of Event" data-parsley-required="true"   style="height: 100px"></textarea>

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


 								<option value="<?php echo $value['vol_id']; ?>"><?php echo ''.$value['name'] . ' ' . $value['admissionno']. ' ' . $value['courseid']. '-' . $value['branch_or_specialisation']; ?></option>



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


 								<option value="<?php echo $value['vol_id']; ?>"><?php echo ''.$value['name'] . ' ' . $value['admissionno']. ' ' . $value['courseid']. '-' . $value['branch_or_specialisation']; ?></option>



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

 <?php   include_once('includes/footer.php'); ?>