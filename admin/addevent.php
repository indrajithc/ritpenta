 <?php

 include_once('../global.php')?>
 <?php include_once('../root/functions.php')?>
 <?php
 auth_login();

 include_once('includes/header.php'); ?>



 <?php






 include_once('../root/connection.php');
 $db=  new Database();
 $message=array(null,null);
//$message='';














 if(isset($_POST['submit'])){

 	$event_name         =  $_POST['event_name'];
 	$event_date        =  $_POST['event_date'];
 	$event_hrs      =  $_POST['event_hrs'];
 	$event_dtls        =  $_POST['event_dtls'];
 	







 	$stmnt=" SELECT * FROM nss_event_reg WHERE event_name= '" . $event_name ."' ";





 	$result = $db->display( $stmnt);
 	if( $result ){

 		$message [0] = 2;
 		$message [1] = 'already exists'; 

 	} else {


 		$stmnt =  'insert into nss_event_reg(event_name,event_date,event_hrs,event_dtls) values(:event_name,:event_date,:event_hrs,:event_dtls)';





 		$params=array(

 			
 			':event_name'        =>  $event_name,
 			':event_date'       =>  $event_date,
 			':event_hrs'         =>  $event_hrs,
 			':event_dtls'            =>  $event_dtls

 		);


 		$istrue=$db->execute_query($stmnt,$params);

 		if($istrue){
					//$message=' added!';

 			$message [0] = 1;
 			$message [1] = ' added '; 



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



 ?>







 
 <form class="form-horizontal bordered-row" id="addevent"  action="" method="post" data-parsley-validate>
 	
 	<h3 class="h3 mb-3 font-weight-normal danger-text">Add Regular Activities</h3>


 	

 	

 	
                                <!--
								<div class="form-group">
									<label for="vol_id" class="bmd-label-floating">Event Id</label>
									<div class="">
										<input id="vol_id" type="text" class="form-control"  placeholdera="Event Id..." name="cp_id" data-parsley-required="true" data-parsley-type="number">
									</div>
								</div>
							-->

							<div class="form-group">
								<div class="input-group">
									<input type="text" class="form-control"  placeholder="Activity Name" name="event_name" data-parsley-required="true" data-parsley-type="">
								</div>
							</div>

								<!--


								<div class="form-group">
									<label class="bmd-label-floating">Date</label>
									<div class="">
										<input type="date" class="form-control"  placeholdera="Date" name="event_date" data-parsley-required="true" data-parsley-type="number">
									</div>
								</div> 

							-->
							
							<div class="form-group">
								<div class="input-group">
									<input type="date" class="form-control"  placeholder="Activity On" name="event_date" data-parsley-required="true" data-parsley-type="number">
								</div>
							</div>


    <!--                           <div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
            	<label class="bmd-label-floating">Total Hours</label>
                <div class='input-group date' id='datetimepicker3'>
                    <input type="text" class="form-control" placeholdera="Hours" name="event_hrs" data-parsley-required="true" data-parsley-type="" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });
        </script>
    </div>
</div>
-->               

<div class="form-group">
	<div class="input-group">
		<input type="time" class="form-control datetimepicker3"  placeholder="Hours" name="event_hrs" data-parsley-required="true" data-parsley-type="number">
	</div>
</div>






<div class="form-group">
	
	<div class="input-group">
		<input type="textarea" class="form-control" name="event_dtls" placeholder="Details Of Event" data-parsley-required="true" data-parsley-type="" style="height: 100px">
		
	</div>
</div>














<!--								<div class="form-group">	                                
								<label class="bmd-label-floating">Select Files</label>
							    <form method="POST" action="#" enctype="multipart/form-data">
										<!-- COMPONENT START 
										
											<div class="input-group input-file" name="Fichier1">
									    		<input type="text" class="form-control" placeholder="" />			
									            <span class="input-group-btn">
									        		<button class="btn btn-default btn-choose" type="button">Choose</button>
									    		</span>


											</div>
										</div>
										<!-- 
										<div class="form-group">
											
											<button type="reset" class="btn btn-danger">Reset</button>
										</div>
									    
									</form>
									
								-->



								<div class="container">
									<button class="btn btn-dark submit-btn btn-block btn btn-outline-dark" name="submit-btn">Submit
									</button>
								</div>
							</form>

							<?php   include_once('includes/footer.php'); ?>