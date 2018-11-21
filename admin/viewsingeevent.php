<?php






include_once('includes/header.php');


$id = -1;
if (isset($_GET['id'])) {
	$id = unIndexMe($_GET['id']);

}


if (   $id == -1) {

	setLocation("admin/viewevent"); 
}




?>




<div class="row">
	<div class="col-sm-12 px-3  bg-white ">


</br>
		
		<center>	<h3 class="h3 mb-3 font-weight-normal danger-text">Regular Activities</h3></center>
		

</br>


		<?php


		$stmnt=" SELECT * FROM `nss_event_reg`  c LEFT JOIN nss_eve_cordntrs d  ON c.event_id = d.eve_id WHERE c.event_id = :id ";

		$params = array (
			':id' => $id
		);


		$details = $db->display($stmnt,  $params );

		if (isset(  $details[0])) {
			$details =   $details[0];
		}  else {

			
			setLocation("admin/viewevent");
		}

		?>

		<?php if($details): ?>


			<div class="row">
				<div class="col-sm-12 col-md-8 offset-md-2">




					<table class="table table-hover w-100">
						<tbody>
							<tr>
								<th scope="col">Event key</th>
								<td>
									<?php echo  isit( 'event_key', $details); ?>
								</td>
							</tr> 
							<tr>
								<th scope="col">  Event Name</th>
								<td> 
									<?php echo  isit( 'event_name', $details); ?>
								</td>
							</tr>
							<tr>
								<th scope="col">Event On</th>
								<td> 
									<?php echo  isit( 'event_date', $details); ?>
								</td>
							</tr>
							<tr>
								<th scope="col">Total hours</th>
								<td> 
									<?php echo  isit( 'event_hrs', $details); ?>
								</td>
							</tr>
							<tr>
								<th scope="col">Event Objective</th>
								<td> 
									<?php echo  isit( 'event_dtls', $details); ?>
								</td>
							</tr>

						</tbody>


					</table>








					<?php

					$coordinator1 = selectFromTable( ' * ', '  `nss_vol_reg` v LEFT JOIN stud_details s ON v.admnno = s.admissionno   ' , " v.vol_id = ".isit( 'eve_cd_id1', $details) ."  ORDER BY s.courseid, s.branch_or_specialisation , s.name ", $db);  

					$coordinator2 = selectFromTable( ' * ', '  `nss_vol_reg` v LEFT JOIN stud_details s ON v.admnno = s.admissionno   ' , " v.vol_id = ".isit( 'eve_cd_id2', $details) ."  ORDER BY s.courseid, s.branch_or_specialisation , s.name ", $db);  

					?>





					<h5 class="text-capitalize mt-5 text-left"><strong>event coordinators</strong></h5>



					<h6 class="mt-3 text-primary">first coordinator</h6>
					<table class="table table-hover w-100">
						<tbody>
							<tr>
								<th scope="col">name</th>
								<td>
									<?php echo  isit( 'name', $coordinator1[0]); ?>
								</td>
							</tr> 
							<tr>
								<th scope="col">admissionno</th>
								<td> <?php echo  isit( 'admissionno', $coordinator1[0]); ?>
							</td>
						</tr>
						<tr>
							<th scope="col">courseid</th>
							<td> <?php echo  isit( 'courseid', $coordinator1[0]); ?>
						</td>
					</tr>
					<tr>
						<th scope="col">branch_or_specialisation</th>
						<td> <?php echo  isit( 'branch_or_specialisation', $coordinator1[0]); ?>
					</td>
				</tr>

			</tbody>	
		</table>


		<h6 class="mt-2 text-primary">second coordinator</h6>
		<table class="table table-hover w-100">
			<tbody>
				<tr>
					<th scope="col">name</th>
					<td>
						<?php echo  isit( 'name', $coordinator2[0]); ?>
					</td>
				</tr> 
				<tr>
					<th scope="col">admissionno</th>
					<td> <?php echo  isit( 'admissionno', $coordinator2[0]); ?>
				</td>
			</tr>
			<tr>
				<th scope="col">courseid</th>
				<td> <?php echo  isit( 'courseid', $coordinator2[0]); ?>
			</td>
		</tr>
		<tr>
			<th scope="col">branch_or_specialisation</th>
			<td> <?php echo  isit( 'branch_or_specialisation', $coordinator2[0]); ?>
		</td>
	</tr>

</tbody>	
</table>



</table>



</div>
</div>
<?php endif; ?>

</div> 
</div>

















<?php include_once('includes/footer.php'); ?>
