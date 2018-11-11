

<?php include_once('../global.php'); ?>
<?php include_once('../root/functions.php'); ?>
<?php include_once('../root/connection.php'); ?>
<?php  

auth_login();

$id = -1;
if (isset($_GET['id'])) {
$id = $_GET['id'];

}


if (   $id == -1) {

setLocation("viewvol.php");
}


include_once('includes/header.php');


 $db=new Database();
$error='';

$message=array(
  null,
  null
);


 ?>









  <?php


   $stmnt=' SELECT * FROM `nss_vol_reg` WHERE vol_id = :id ';
  
  $params = array (
':id' => $id
  );


  $details = $db->display($stmnt,  $params );
 
 if (isset(  $details[0])) {
     $details =   $details[0];
 }  else {

setLocation("viewvol.php");
 }

?>
 









<?php
if(isset($_POST['submit-btn'])){


    
	$vol_bg       =  $_POST['vol_bg'];
	$vol_mob         =  $_POST['vol_mob'];
	$vol_alt_mob            =  $_POST['vol_alt_mob'];
	$vol_emailid      =  $_POST['vol_emailid'];
	$stmnt='select * from nss_vol_reg where vol_= :id';




	$params=array(


		':id'        =>  $id

	);





	if(!$db->display($stmnt,$params)){




	$params=array(


		':vol_bg'         =>  $vol_bg,
		':vol_mob'            =>  $vol_mob,
		':vol_alt_mob'         =>  $vol_alt_mob,
		':vol_emailid'         =>  $vol_emailid,
		':id'        =>  $id

	);

		$stmnt = 'UPDATE `nss_vol_reg` SET vol_bg =:vol_bg, vol_mob=:vol_mob, vol_alt_mob=:vol_alt_mob, vol_emailid=:vol_emailid WHERE vol_id=:id';
		$istrue=$db->execute_query($stmnt,$params);

		if($istrue){

					// $message=' UPDATED!';

					   $message [0] = 1;
   $message [1] = ' UPDATED '; 



				}else{

			// $message=$istrue;

				}	
	}else{
		// $message=' value already exists';

		   $message [0] = 3;
   $message [1] = ' value already exists'; 


	}
}

?>




















     <div class="container mt-4">
       <div class="darken-grey-text mb-4"">
          <div class="row">
           <div class="col-md-8 mb-4">
             <div class="card">
             	<div class="card-body">
             		
			<form  id="edit_vol"  action="" method="post" data-parsley-validate class="form-horizontal borderd-row" align="center">
							
							

   <div class="page-header">
   <h3 class="h3 mb-3 font-weight-normal danger-text">Update Volunteer Details</h3>
  </div>
						

					
		<?php 


  
 echo show_error($message); ?>


                  <div class="form-group">
					<div class="input-group">
						<input type="text" class="form-control text-danger"  placeholder="Admission No" name="admnno"  style=" "data-parsley-type="text"
						disabled value="<?php if(isset($details['admnno'])) echo $details['admnno'];  ?>" >

					</div>
				 </div>
                  <div class="form-group">
					<div class="input-group">

	            	<input id="vol_id" type="text" class="form-control text-danger"  placeholder="Volunteer Id..." name="vol_id"   data-parsley-type="number" disabled value="<?php if(isset($details['vol_id'])) echo $details['vol_id'];  ?>" >
					</div>	
					</div>

			
                           
                

					<div class="form-group"> 
                         <div class="input-group">
                           <input type="text" class="form-control" name="vol_mob" placeholder="  Mobile No" data-parsley-required="true" data-parsley-type="true" value="<?php if(isset($details['vol_mob'])) echo $details['vol_mob'];  ?>">
                  </div>
                </div>
	            		


					<div class="form-group"> 
                         <div class="input-group">
                           <input type="text" class="form-control" name="vol_alt_mob" placeholder=" Alternative Mobile No" data-parsley-required="true" data-parsley-type="true" value="<?php if(isset($details['vol_alt_mob'])) echo $details['vol_alt_mob'];  ?>">
                  </div>
                </div>





					<div class="form-group"> 
                         <div class="input-group">
                           <input type="text" class="form-control " name="vol_emailid" placeholder=" Email ID" data-parsley-required="true" data-parsley-type="true" value="<?php if(isset($details['vol_emailid'])) echo $details['vol_emailid'];  ?>">
                  </div>
                </div>

	            		
    <div class="form-group">
						
						<div class="input-group">
							<select name="vol_bg" class="form-control"   required>
								<option selected disabled > select Bloodgroup </option>
				
								<option  value="O+" <?php if( strtolower( $details['vol_bg'] ) == "a" ) echo " selected "; ?> >O+ve</option>
								<option  value="O-" <?php if( strtolower( $details['vol_bg'] ) == "a" ) echo " selected "; ?> >O-ve</option>
								<option  value="B+" <?php if( strtolower( $details['vol_bg'] ) == "a" ) echo " selected "; ?> >B+ve</option>
								<option  value="B-" <?php if( strtolower( $details['vol_bg'] ) == "a" ) echo " selected "; ?> >B-ve</option>
								<option  value="A+" <?php if( strtolower( $details['vol_bg'] ) == "a" ) echo " selected "; ?> >A+ve</option>
								<option  value="A-" <?php if( strtolower( $details['vol_bg'] ) == "a" ) echo " selected "; ?> >A-ve</option>
								<option  value="AB+" <?php if( strtolower( $details['vol_bg'] ) == "a" ) echo " selected "; ?> >AB+ve</option>
								<option  value="AB-" <?php if( strtolower( $details['vol_bg'] ) == "a" ) echo " selected "; ?> >AB-ve</option>


							</select>
					</div>
					<br>
					<br>

                      <div class="container">
							     <button class="btn btn-dark btn-block btn btn-outline-dark" name="submit-btn">Save
							     </button>
                      </div>
	            		
</form>
</div></div>
</div>
</div>
</div>
</div>
	 <?php
  include_once('includes\footer.php');
  ?>       		

