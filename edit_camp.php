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

setLocation("viewcamp.php");
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


   $stmnt=' SELECT * FROM `nss_camp_reg` WHERE cp_id = :id ';
  
  $params = array (
':id' => $id
  );


  $details = $db->display($stmnt,  $params );
 
 if (isset(  $details[0])) {
     $details =   $details[0];
 }  else {

setLocation("viewcamp.php");
 }

?>
 









<?php
if(isset($_POST['submit-btn'])){


    
	$cp_name       =  $_POST['cp_name'];
	$cp_date_frm         =  $_POST['cp_date_frm'];
	$cp_date_to             =  $_POST['cp_date_to'];
	$cp_details       =  $_POST['cp_details'];
	$stmnt='select * from nss_camp_reg where cp_id= :id';




	$params=array(


		':id'        =>  $id

	);














if($db->display($stmnt,$params)){




	$params=array(


		':cp_name'         =>  $cp_name,
		':cp_date_frm'            =>  $cp_date_frm,
		':cp_date_to'            =>  $cp_date_to,
		':cp_details'         =>  $cp_details,
		':id'        =>  $id

	);

		$stmnt = 'UPDATE `nss_camp_reg` SET cp_name=:cp_name, cp_date_frm=:cp_date_frm,  cp_date_to=:cp_date_to, cp_details=:cp_details WHERE cp_id=:id';
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

















<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   





    <base href="<?php echo DIRECTORY ; ?>">
  <title><?php  echo DISPLAY_NAME; ?></title>

  <link rel="icon" href="assets/image/favicon/favicon.ico">

 
  <link rel="stylesheet" href="assets/css/style.css">  
</head>



<body class="hm-gradient" >
 




     <div class="container mt-4">
       <div class="darken-grey-text mb-4"">
          <div class="row">
           <div class="col-md-6 mb-4">
             <div class="card">
             	<div class="card-body">
             		
			<form  id="edit_camp"  action="" method="post" data-parsley-validate class="form-horizontal borderd-row" align="center">
							
							

   <div class="page-header">
   <h3 class="h3 mb-3 font-weight-normal danger-text">Update camp Details</h3>
  </div>
						

					
		<?php 


  
 echo show_error($message); ?>


                  
                  <div class="form-group">
					<div class="input-group">
						<input type="text" class="form-control text-danger"  placeholder="Camp Id" name="cp_id"  style=" "data-parsley-type="text"
						disabled value="<?php if(isset($details['cp_id'])) echo $details['cp_id'];  ?>" >

					</div>
				 </div>
                           
                

					<div class="form-group"> 
                         <div class="input-group">
                           <input type="text" class="form-control" name="cp_name" placeholder="  Camp Name" data-parsley-required="true" data-parsley-type="true" value="<?php if(isset($details['cp_name'])) echo $details['cp_name'];  ?>">
                  </div>
                </div>
	            		


					<div class="form-group"> 
                         <div class="input-group">
                           <input type="text" class="form-control" name="cp_date_frm" placeholder="  Date From" data-parsley-required="true" data-parsley-type="true" value="<?php if(isset($details['cp_date_frm'])) echo $details['cp_date_frm'];  ?>">
                  </div>
                </div>



                         <div class="form-group"> 
                         <div class="input-group">
                           <input type="text" class="form-control" name="cp_date_to" placeholder="  Date To" data-parsley-required="true" data-parsley-type="true" value="<?php if(isset($details['cp_date_to'])) echo $details['cp_date_to'];  ?>">
                  </div>
                </div>



					


                <div class="form-group"> 
                         <div class="input-group">
                           <input type="text" class="form-control" name="cp_details" placeholder="  Camp Details" data-parsley-required="true" data-parsley-type="true" value="<?php if(isset($details['cp_details'])) echo $details['cp_details'];  ?>">
                  </div>
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
</body>
</html>
	 <?php
  include_once('includes\footer.php');
  ?>       		







