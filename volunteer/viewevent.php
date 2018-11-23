<?php


include_once('includes/header.php');

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



		<div class="card">
			<div class="card-body"> 


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
							<th class="text-uppercase">more</th>

						</tr>
					</thead>

					<tbody>

						<?php
						$stmnt=' SELECT * FROM `nss_event_reg` WHERE event_delete = 0 ';

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


								<td>

									<a title="Image Upload" href="volunteer/imageevent/<?php echo indexMe((int)isit('event_id', $value, 0)); ?>" class="btn btn-sm btn-success ">
										<i class="ti-image"></i>
									</a>
									<a title="view" href="volunteer/viewevent/<?php echo indexMe((int)isit('event_id', $value, 0)); ?>" class="btn btn-sm btn-info ">
										<i class="ti-eye"></i>
									</a>
									<a title="edit" href="volunteer/editevent/<?php echo indexMe((int)isit('event_id', $value, 0)); ?>" class="btn btn-sm btn-warning ">
										<i class="ti-pencil-alt"></i>
									</a>
									<a title="add" href="volunteer/eventparticipant/<?php echo indexMe((int)isit('event_id', $value, 0)); ?>" class="btn btn-sm btn-primary ">
										<i class="fas fa-user-plus"></i>
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