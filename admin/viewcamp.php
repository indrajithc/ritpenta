<?php

/**
 * @Author: indran
 * @Date:   2018-11-07 06:49:44
 * @Last Modified by:   indran
 * @Last Modified time: 2018-11-07 11:54:17
 */


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



$data = array();
$data = selectFromTable('*' , 'nss_camp_cordntrs' , ' 1 ', $db);

?>




<div class="row flex-grow mt-3">
	<div class="col-12">



		<div class="card">
			<div class="card-body"> 


				<h4 class="card-title">Existing Departments</h4>
				<p class="card-description"> view all departments </p>


				<?php if($data): ?>
					<div class="table-responsive">

						<table class="table  table-hover">
							<tr>
								<th class="text-uppercase">name</th>
								<th class="text-uppercase">caption</th>
								<th class="text-uppercase">description</th>
								<th class="text-uppercase">added time</th>
								<th class="text-uppercase">public</th>
								<th class="text-uppercase">delete</th>
								<th class="text-uppercase">more</th>
							</tr>
							<?php foreach ($data as $key => $value): ?>


								<tr>
									<td ><?php echo isit('dpt_name', $value); ?></td>
									<td ><?php echo isit('dpt_caption', $value); ?></td>
									<td ><?php echo isit('dpt_description', $value); ?></td>
									<td ><?php echo isit('dpt_date', $value); ?></td>
									<td > 
										<form accept="" method="post">
											<input type="hidden" name="id" value="<?php echo indexMe(isit('dpt_id', $value)); ?>">
											<?php if( isit('dpt_public', $value) == 0 ): ?>
												<button class="btn btn-sm btn-success" name="make_public" value="1">make public</button>
												<?php else: ?>
													<button class="btn btn-sm btn-danger" name="make_public" value="0">hide</button>
												<?php endif; ?>
											</form>


										</td>
										<td >
											<form accept="" method="post">
												<input type="hidden" name="id" value="<?php echo indexMe(isit('dpt_id', $value)); ?>">
												<?php if( isit('dpt_delete', $value) == 0 ): ?>
													<button class="btn btn-sm btn-danger" name="make_delete" value="1">delete</button>
													<?php else: ?>
														<button class="btn btn-sm btn-success" name="make_delete" value="0">active</button>
													<?php endif; ?>
												</form>


											</td>
											<td>
												<a title="edit" href="admin/department/<?php echo indexMe(isit('dpt_id', $value)); ?>" class="btn btn-sm btn-info ">
													<i class="ti-pencil-alt"></i>
												</a>
											</td>
										</tr>



									<?php endforeach; ?>

								</table>

							</div>
							<?php else: ?>
								<div class="alert alert-warning text-center text-capitalize">
									<p>no department added</p>
								</div>


							<?php endif; ?>




						</div>
					</div>



				</div>

			</div>




			<?php include_once('includes/footer.php'); ?>