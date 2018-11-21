<?php


include_once('includes/header.php');

?>
<?php

if (isset($_POST['make_delete'])) {
	$action = 0;


	$id = isit('id', $_POST, 0 );
	$id = unIndexMe((int) $id );

	if($_POST['make_delete'] == 1)
		$action = 1;


	$params = array(
		'event_delete' => $action
	); 

	$istrue = updateTable( 'nss_event_reg', $params, ' event_id = ' . $id , $db);

	if($istrue){

		$message [0] = 1;
		$message [1] = ' updated ';  

	}  else {

		$message [0] = 4;
		$message [1] = ' update error ';  
	}

}

?>



<div class="content-wrapper">


	<div class="row">
		<div class="col">

			<?php 





			echo show_error($message); ?>


		</div>
	</div>

	<div class="row bg-white">
		<div class="col-sm-12">



			
</br>
		
		<center>	<h3 class="h3 mb-3 font-weight-normal danger-text">Regular Activities</h3></center>
		

</br>



			<div class="table-responsive">
				
				<table class="table dataTable table-hover ">
					<thead>
						<tr>
							<th scope="col">Event Key</th>
							<th scope="col">Event name</th>
							<th scope="col">Event date</th>
							<th scope="col">Event working hours</th> 
							<th class="text-uppercase">added time</th> 
							<th class="text-uppercase">delete</th>
							<th class="text-uppercase">more</th>

						</tr>
					</thead>

					<tbody>

						<?php
						$stmnt=' SELECT * FROM `nss_event_reg` ';

						$details = $db->display($stmnt);

						?>

						<?php foreach ($details as $key => $value): ?>

							<tr>

								<td><?php echo $value['event_key']; ?></td>
								<td><?php echo $value['event_name']; ?></td>

								<td><?php echo $value['event_date']; ?></td>

								<td><?php echo $value['event_hrs']; ?></td>




								<td >

									<time class="timeago" datetime="<?php echo isit('event_ddate', $value); ?>" title="<?php echo isit('event_ddate', $value); ?>">1 hour ago</time>



								</td>

								<td >
									<form accept="" method="post">
										<input type="hidden" name="id" value="<?php echo indexMe( (int) isit('event_id', $value, 0)); ?>">
										<?php if( isit('event_delete', $value) == 0 ): ?>
											<button class="btn btn-sm btn-danger" name="make_delete" value="1">delete</button>
											<?php else: ?>
												<button class="btn btn-sm btn-success" name="make_delete" value="0">active</button>
											<?php endif; ?>
										</form>


									</td>
									<td>
										<a title="edit" href="admin/viewevent/<?php echo indexMe((int)isit('event_id', $value, 0)); ?>" class="btn btn-sm btn-info ">
											<i class="ti-eye"></i>
										</a>
										<a title="edit" href="admin/editevent/<?php echo indexMe((int)isit('event_id', $value, 0)); ?>" class="btn btn-sm btn-warning ">
											<i class="ti-pencil-alt"></i>
										</a>
									</td>



								</tr>


							<?php endforeach; ?>
						</tbody>
					</table>


				</div>





			</div> 
		</div>












	</div>








	<?php include_once('includes/footer.php'); ?>