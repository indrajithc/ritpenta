<?php






include_once('includes/header.php');


$id = -1;
if (isset($_GET['id'])) {
	$id = unIndexMe($_GET['id']);

}


if (   $id == -1) {

	setLocation("admin/viewaward"); 
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


			<div class="row">
				<div class="col-sm-12 col-md-8 offset-md-2">




					<table class="table table-hover w-100">
						<tbody>

							<tr>
								<th scope="col">Name</th>
								<td> 
									<?php echo  isit( 'awrd_name', $details); ?>
								</td>
							</tr>
							<tr>
								<th scope="col">Date</th>
								<td> 
									<?php echo  isit( 'awrd_date', $details); ?>
								</td>
							</tr>
							<tr>
								<th scope="col">Name</th>
								<td> 
									<?php echo  isit( 'awrd_date', $details); ?>
								</td>
							</tr>
							<tr>
								<th scope="col">Name</th>
								<td> 
									<?php echo  isit( 'awrd_date', $details); ?>
								</td>
							</tr>

						</tbody>


					</table>











				</div>
			</div>
		<?php endif; ?>

	</div> 
</div>

















<?php include_once('includes/footer.php'); ?>
