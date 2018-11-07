<?php

include_once('../global.php')?>
<?php include_once('../root/functions.php')?>
<?php
auth_login();

include_once('includes/header.php'); ?>











<div class="page-header">
	<h1 class="h3 mb-3 bg-primary text-white">Blood Request</h1>
</div>







<div class="form-group">
	<label class="bmd-label-floating"> Name</label>
	<div class="">
		<input type="text" class="form-control"  placeholdera="Name" name="reqname" data-parsley-required="true" data-parsley-type="number">
	</div>
</div>



<form class="form-horizontal bordered-row" id="bldreq"  action="" method="post" data-parsley-validate>
	

	


	

	


	<div class="form-group">
		<select class="form-control" id="reqbg">
			<option>Blood Group</option>
			<option>A+</option>
			<option>A-</option>
			<option>B+</option>
			<option>B-</option>
			<option>O+</option>
			<option>O-</option>
			<option>AB+</option>
			<option>AB-</option>
		</select>
	</div>
	

	



	<div class="form-group">
		<label class="bmd-label-floating">Phone No</label>
		<div class="">
			<input type="text" class="form-control"  placeholdera="Phone No" name="req mob" data-parsley-required="true" data-parsley-type="number">
		</div>
	</div>	



	<div class="form-group">
		<label class="bmd-label-floating">Email Id</label>
		<div class="">
			<input type="email" class="form-control"  placeholdera="Email Id" name="reqmail" data-parsley-required="true"  >
		</div>
	</div>	

	





	<div class="form-group" >
		<textarea class="form-control" type="text" id="reqloc" rows="5" placeholder="Place"  ></textarea> 
	</div>





	<div class="form-group" >
		<input class="form-control" type="text" id="reqdate"  readonly>
	</div>


	<div class="container">
		<button type="button" class="btn btn-lg btn-outline-primary btn-block">Submit</button>
	</div>





</form>


<?php   include_once('includes/footer.php'); ?>