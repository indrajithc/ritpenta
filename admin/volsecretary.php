<?php



include_once('includes/header.php');

include_once('../root/mail.php');

?>


<?php


if (isset($_POST['add-login'])) {

	$id = isit('vol_id', $_POST, 0);

	$email  = selectFromTable ('email', ' `nss_vol_reg` v LEFT JOIN  stud_details d ON v.admnno = d.admissionno ', ' v.vol_id = ' .$id, $db);
	$email = trim($email); 

	$res = selectFromTable(' user_id' , ' nss_log ', " user_id = '$email' ", $db  );
	if( $res ) {
		$message[0] = 3;
		$message[1] = " Volunteer already added";
	} else {
		$passwrod = random_bytes_05(6);



		$params = array(
			'user_id' => $email,
			'user_type' => 'vsecretary',
			'user_pwd' => $passwrod
		);

		$istrue = insertInToTable( ' nss_log ', $params, $db);

		if($istrue){

			$subject = " login success ";
			$body = " login success user id = '$email' and passwrod = '$passwrod' ";
			$resultMail = 	mainTo ($email , $subject , $body) ;


			$message [0] = 1;
			$message [1] = ' successfully added  ';  

			if($resultMail) { 
				$message [1] = $message [1]  . ' and email successfully .. ';  
			}

		}  else {

			$message [0] = 4;
			$message [1] = ' update error ';  
		}


	}


}







if (isset($_POST['make_remove'])) {
	
	$id = isit('id' , $_POST, 0);
	$id = unIndexMe($id);

	$email  = selectFromTable ('email', ' `nss_vol_reg` v LEFT JOIN  stud_details d ON v.admnno = d.admissionno ', ' v.vol_id = ' .$id, $db);
	$email = trim($email);
	$istrue  = $db->execute_query(" DELETE FROM nss_log WHERE user_id = '$email' AND user_type = 'vsecretary' ");
	if($istrue){

		$message [0] = 1;
		$message [1] = ' updated ';  

	}  else {

		$message [0] = 4;
		$message [1] = ' update error ';  
	}
}


?>



<?php
$stmnt=" SELECT v.*, d.branch_or_specialisation, d.name FROM `nss_vol_reg` v LEFT JOIN  stud_details d ON v.admnno = d.admissionno  WHERE v.vol_emailid  IN ( SELECT user_id FROM nss_log WHERE user_type = 'vsecretary') ";

$details = $db->display($stmnt);

?>

<div class="row">
	<div class="col">

		<?php 





		echo show_error($message); ?>


	</div>
</div>

<?php  if(  sizeof($details)  <2 ):  ?>
	<div class="row bg-white p-3">
		<div class="col">

			<form class="form" method="post" action="">


				<h5  class="text-dark mt-3 text-left"><B> SELECT A VOLUNTEER</B></h5>


				<?php  
				$result = selectFromTable( ' * ', '  `nss_vol_reg` v LEFT JOIN stud_details s ON v.admnno = s.admissionno   ' , " s.email NOT IN ( SELECT user_id FROM nss_log WHERE user_type = 'vsecretary' )  ORDER BY s.courseid, s.branch_or_specialisation , s.name ", $db); ?>


				<div class="form-group row">
					<!-- <label for="exampleInputcoordinator12" class="col-sm-3 col-form-label">coordinator 1:</label> -->
					<div class="col-sm-9">


						<select  id="exampleInputcoordinator12" type="textarea" class="form-control select2" name="vol_id" placeholder="first camp coordinator " data-parsley-required="true"   >
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
					<div class="col-sm-3">
						<button class="btn btn-info" type="submit" name="add-login" value="true">add</button>
					</div>
				</div>






			</form>

		</div>
	</div>

<?php  endif; ?>
<div class="row  bg-white p-3 mt-3">
	<div class="col-sm-12 ">


		<h1 class="h3 mb-3 font-weight-normal text-dark text-center">Volunteer Details</h1>



		<div class="table-responsive">

			<table class="table dataTable table-hover bg-white">
				<thead>
					<tr>
						<th scope="col">Action</th> 
						<th scope="col">Vol Id</th>
						<th scope="col">Name </th>
						<th scope="col">Adm No</th> 
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

								<td >
									
									<form accept="" method="post">
										<input type="hidden" name="id" value="<?php echo indexMe( (int) isit('vol_id', $value, 0)); ?>"> 
										<button class="btn btn-sm btn-danger" name="make_remove" value="1">remove</button> 
									</form>


								</td>

								<td><?php echo $value['vol_regid']; ?></td>
								<td><?php echo $value['name']; ?></td>
								<td><?php echo $value['admnno']; ?></td> 
								<td><?php echo $value['branch_or_specialisation']; ?></td>
								<td><?php echo $value['vol_mob']; ?></td>
								<td><?php echo $value['vol_emailid']; ?></td>


								<td><a href="admin/viewvol/<?php echo indexMe($value['vol_id']); ?>"  class="btn btn-sm btn-success "  > <i  class=" fa fa-eye"></i></a>
									
								</td>
							</tr>



						<?php endforeach; ?>
					<?php endif; ?>
				</tbody>
			</table>

		</div>




	</div> 
</div>








<?php include_once('includes/footer.php'); ?>
