<?php


include_once('includes/header.php'); ?>




<?php



if(isset($_POST['submit-btn'])){
	$awrd_name        =  $_POST['award_name'];
	$awrd_date        =  $_POST['award_date']; 
	$awrd_detls         =  $_POST['award_dtls']; 

	
	$stmnt=" SELECT * FROM nss_awards WHERE awrd_name= '" . $awrd_name ."' OR awrd_date= '" . $awrd_date ."' ";
	$result = $db->display( $stmnt);
	if( $result ){
		$message [0] = 2;
		$message [1] = ' award is already exists'; 
	} else {
		$stmnt =  'insert into nss_awards(awrd_name, awrd_date,awrd_detls ) values(:awrd_name, :awrd_date,:awrd_detls )';
		$params=array(
			':awrd_name' 	=> $awrd_name,
			':awrd_date'        =>  $awrd_date,
			':awrd_detls'       =>  $awrd_detls 
		);
		$istrue=$db->execute_query_return_id($stmnt,$params);
		if($istrue){
					//$message=' added!';
			$message [0] = 1;
			$message [1] = ' Award added '; 
			
		}
		else
		{
			//$message=$istrue;	
		// $message=' value already exists';
			$message [0] = 3;
			$message [1] = ' something is wrong'; 
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

		<form  id="addaward"  action="" method="post" class="form-horizontal borderd-row" align="center" data-parsley-validate >

			<center>	<h3 class="h3 mb-3 font-weight-normal danger-text">Awards And Achievements</h3></center>




			<?php echo show_error($message); ?>





			<div class="form-group row">
				<label for="exampleInputName2" class="col-sm-3 col-form-label">Award Name</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="award_name" placeholder="Award Name" data-parsley-required="true"  required>
				</div>
			</div>



			<div class="form-group row">
				<label for="exampleInputName2" class="col-sm-3 col-form-label">Award On</label>
				<div class="col-sm-9">
					<input type="text" class="form-control datetimepicker" data-date-format="YYYY" name="award_date" placeholder=" Award On" data-parsley-required="true"  >

				</div>
			</div>





			<div class="form-group row">
				<label for="exampleInputName2" class="col-sm-3 col-form-label">Description</label>
				<div class="col-sm-9">

					<textarea type="textarea" class="form-control" name="award_dtls" placeholder="Objective Of Award" data-parsley-required="true"   style="height: 100px"></textarea>

				</div>
			</div>





			<button type="submit"  class="btn btn-success mr-2 float-right"  name="submit-btn">Submit
			</button>






		</form>

	</div>

</div>

<?php   include_once('includes/footer.php'); ?>