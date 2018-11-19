<?php

/**
 * @Author: indran
 * @Date:   2018-11-18 11:51:24
 * @Last Modified by:   indran
 * @Last Modified time: 2018-11-18 17:55:51
 */


//(?=<!--)(.*)(?=-->)(.*)(?=\n)


include_once('includes/header.php');


$id = -1;
if (isset($_GET['id'])) {
	$id = unIndexMe($_GET['id']);

}


if (   $id == -1) {

	setLocation("admin/viewaward"); 
}




?>



<?php


$stmnt=" SELECT * FROM `nss_awards`  c LEFT JOIN nss_eve_cordntrs d  ON c.awrd_id = d.eve_id WHERE c.awrd_id = :id ";

$params = array (
	':id' => $id
);


$details = $db->display($stmnt,  $params );

if (isset(  $details[0])) {
	$details =   $details[0];
}  else {


	setLocation("admin/viewaward");
}

?>



<?php

if(isset($_POST['submit-btn'])){

	$awrd_name        =  $_POST['awrd_name'];
	$awrd_date        =  $_POST['awrd_date']; 
	$awrd_detls         =  $_POST['awrd_detls'];
	$awrd_id = $id;








	$stmnt='select * from nss_awards where  awrd_id= :awrd_id    ';

		// $stmnt=" SELECT * FROM nss_awards WHERE awrd_name= '" . $awrd_name ."' OR awrd_name= '" . $awrd_id ."' ";



	$params=array( 
		':awrd_id'   =>  $id    
	);  

	if($db->display($stmnt,$params)){






				// $stmnt =  'insert into nss_awards(awrd_name, awrd_name,awrd_date_frm,awrd_date_to,award_details) values(:awrd_id, :awrd_name,:awrd_date_frm,:awrd_date_to,:award_details)';



		$params=array( 
			'awrd_name'        =>  $awrd_name,
			'awrd_date'       =>  $awrd_date, 
			'awrd_detls'            =>  $awrd_detls
		);

		$istrue= updateTable( ' nss_awards ', $params, " awrd_id = $id  " ,  $db );
		$istrue = $id ;

		if($istrue){
					//$message=' added!';

			$message [0] = 1;
			$message [1] = ' award added '; 



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


		$stmnt=" SELECT * FROM `nss_awards`  WHERE  awrd_id = :id ";

		$params = array (
			':id' => $id
		);
		
		$details = $db->display($stmnt,  $params );

		if (isset(  $details[0])) {
			$details =   $details[0];
		}  else {


			setLocation("admin/viewaward");
		}

		?>

		<?php if($details): ?>








			<div class="card">
				<div class="card-body">












					<form  id="addaward"  action="" method="post" class="form-horizontal borderd-row" align="center" data-parsley-validate >

						<center>	<h3 class="h3 mb-3 font-weight-normal danger-text">Add Regular Activities</h3></center>




						<?php echo show_error($message); ?>



						<div class="form-group row">
							<label for="exampleInputName2" class="col-sm-3 col-form-label">Award Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="awrd_name" placeholder="Award Name" data-parsley-required="true" value="<?php echo  isit( 'awrd_name', $details); ?>"  required>
							</div>
						</div>



						<div class="form-group row">
							<label for="exampleInputName2" class="col-sm-3 col-form-label">Award On</label>
							<div class="col-sm-9">
								<input type="text" class="form-control datetimepicker" data-date-format="YYYY" name="awrd_date"   value="<?php echo  isit( 'awrd_date', $details); ?>" placeholder=" Award On" data-parsley-required="true"  >

							</div>
						</div>





						<div class="form-group row">
							<label for="exampleInputName2" class="col-sm-3 col-form-label">Objectives</label>
							<div class="col-sm-9">

								<textarea type="textarea" class="form-control" name="awrd_detls" placeholder="Objective Of Award" data-parsley-required="true"   style="height: 100px"><?php echo  isit( 'awrd_detls', $details); ?></textarea>

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
