<?php

/**
 * @Author: indran
 * @Date:   2018-11-12 22:20:20
 * @Last Modified by:   indran
 * @Last Modified time: 2018-11-13 06:37:41
 */

include_once('includes/header.php'); ?>







<?php 
$data = array();
$data = selectFromTable('*' , 'nss_camp_reg ' , '  cp_delete = 0 ', $db);

?>





<div class="row">
	<div class="col">

		<?php 





		echo show_error($message); ?>


	</div>
</div>

<div class="row flex-grow mt-3">
	<div class="col-12">



		<div class="card">
			<div class="card-body"> 


				<h4 class="card-title">Existing Departments</h4>
				<p class="card-description"> view all departments </p>


				<?php if($data): ?>
					<div class="table-responsive">

						<table class="table dataTable table-hover">
							<thead>
								<tr>
									<th class="text-uppercase">name</th>
									<th class="text-uppercase">key</th>
									<th class="text-uppercase">date from</th>
									<th class="text-uppercase">date to</th>
									<th class="text-uppercase">added time</th>  
									<th class="text-uppercase">more</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($data as $key => $value): ?>


									<tr>
										<td ><?php echo isit('cp_key', $value); ?></td>
										<td ><?php echo isit('cp_name', $value); ?></td>
										<td ><?php echo isit('cp_date_frm', $value); ?></td>
										<td ><?php echo isit('cp_date_to', $value); ?></td>
										<td >

											<time class="timeago" datetime="<?php echo isit('cp_date', $value); ?>" title="<?php echo isit('cp_date', $value); ?>">1 hour ago</time>



										</td>

										<td>
											<a title="edit" href="volunteer/imagecamp/<?php echo indexMe((int)isit('cp_id', $value, 0)); ?>" class="btn btn-sm btn-success ">
												<i class="ti-image"></i>
											</a>
											<a title="edit" href="volunteer/viewcamp/<?php echo indexMe((int)isit('cp_id', $value, 0)); ?>" class="btn btn-sm btn-info ">
												<i class="ti-eye"></i>
											</a>
											<a title="edit" href="volunteer/editcamp/<?php echo indexMe((int)isit('cp_id', $value, 0)); ?>" class="btn btn-sm btn-warning ">
												<i class="ti-pencil-alt"></i>
											</a>
										</td>
									</tr>



								<?php endforeach; ?>
							</tbody>
						</table>

					</div>
					<?php else: ?>
						<div class="alert alert-warning text-center text-capitalize">
							<p>no camp added</p>
						</div>


					<?php endif; ?>




				</div>
			</div>



		</div>

	</div>




	<?php include_once('includes/footer.php'); ?>