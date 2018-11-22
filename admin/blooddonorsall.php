<?php

/**
 * @Author: indran
 * @Date:   2018-11-22 06:42:46
 * @Last Modified by:   indran
 * @Last Modified time: 2018-11-22 07:16:39
 */ 

include_once('includes/header.php'); ?>


<?php


$reqGruop =  isit('group', $_GET);

if ($reqGruop) {
	$reqGruop = strtolower($reqGruop); 
	$reqGruop = trim($reqGruop);
	$ggRios = array('a+', 'a-');


	if (!in_array($reqGruop, $ggRios)) {
		$reqGruop = '';
	}
}

$details = array();

$details = selectFromTable( ' * ', '  stud_details ',  "   admissionno IN ( SELECT bd_admno FROM nss_blood_donation WHERE bd_group != ''  ) OR admissionno IN ( SELECT admnno FROM nss_vol_reg WHERE vol_bg != ''  )    " , $db);

if ($reqGruop && $reqGruop != '' ) {

	$details = selectFromTable( ' * ', '  stud_details ',  "   admissionno IN ( SELECT bd_admno FROM nss_blood_donation WHERE bd_group = '$reqGruop'  ) OR admissionno IN ( SELECT admnno FROM nss_vol_reg WHERE vol_bg = '$reqGruop'  )    " , $db);
}



?>


<?php

?>







<div class="card">
	<div class="card-body">

		<div class="row">
			<div class="col">

				<?php 





				echo show_error($message); ?>


			</div>
		</div>





		<div class="row">
			<div class="col-sm-12 ">


				<h1 class="h3 mb-3 font-weight-normal text-dark text-center">blood donors Details 

					<?php
					if ($reqGruop && $reqGruop != '' ) {
						echo strtoupper($reqGruop);
					}

					?>
				</h1>


				<div class="table-responsive">

					<table class="table dataTable table-hover bg-white">
						<thead>
							<tr> 
								<th scope="col">Name </th>
								<th scope="col">Adm No</th>
								<th scope="col">BG</th>
								<th scope="col">Department</th>
								<th scope="col">Mobile No</th>
								<th scope="col">Email Id</th>
								<th scope="col"></th>
								<th scope="col"></th>
							</tr>
						</thead>

						<tbody>

							<?php


							?>

							<?php if ($details ): ?>
								<?php foreach ($details as $key => $value): ?>
									<?php 

									$reqGruop = selectFromTable( 'bd_group',  'nss_blood_donation', "bd_admno = '".$value['admissionno']."'", $db);

									if ($reqGruop == '') { 
										$reqGruop = selectFromTable( 'vol_bg',  'nss_vol_reg', "admnno = '".$value['admissionno']."'", $db);

									}


									?>
									<tr> 
										<td><?php echo $value['name']; ?></td>
										<td><?php echo $value['admissionno']; ?></td>
										<td><?php echo $reqGruop; ?></td>
										<td><?php echo $value['branch_or_specialisation']; ?></td>
										<td><?php echo $value['mobile_phno']; ?></td>
										<td><?php echo $value['email']; ?></td>


										<td><a href="admin/viewvol/<?php echo indexMe($value['vol_id']); ?>"  class="btn btn-sm btn-success "  > <i  class=" fa fa-eye"></i></a>
											<td><a href="admin/edit_vol/<?php echo  indexMe($value['vol_id']); ?>"   class="btn btn-sm btn-primary "  ><i class="far fa-edit"></i></a>
											</td>
										</tr>



									<?php endforeach; ?>
								<?php endif; ?>
							</tbody>
						</table>

					</div>




				</div> 
			</div>




			<?php

			include_once("includes/footer.php");

			?>

















































