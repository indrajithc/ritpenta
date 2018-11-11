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

setLocation("viewevent.php");
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


   $stmnt=' SELECT * FROM `nss_event_reg` WHERE event_id = :id ';
  
  $params = array (
':id' => $id
  );


  $details = $db->display($stmnt,  $params );
 
 if (isset(  $details[0])) {
     $details =   $details[0];
 }  else {

setLocation("viewevent.php");
 }

?>
 









<?php
if(isset($_POST['submit-btn'])){


    
	$event_name       =  $_POST['event_name'];
	$event_date         =  $_POST['event_date'];
	$event_hrs             =  $_POST['event_hrs'];
	$event_dtls       =  $_POST['event_dtls'];
	$stmnt='select * from nss_event_reg where event_id= :id';




	$params=array(


		':id'        =>  $id

	);














if($db->display($stmnt,$params)){




	$params=array(


		':event_name'         =>  $event_name,
		':event_date'            =>  $event_date,
		':event_hrs'         =>  $event_hrs,
		':event_dtls'         =>  $event_dtls,
		':id'        =>  $id

	);

		$stmnt = 'UPDATE `nss_event_reg` SET event_name=:event_name, event_date=:event_date, event_hrs=:event_hrs, event_dtls   =:event_dtls WHERE event_id =:id';
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
             		
			<form  id="edit_event"  action="" method="post" data-parsley-validate class="form-horizontal borderd-row" align="center">
							
							

   <div class="page-header">
   <h3 class="h3 mb-3 font-weight-normal danger-text">Update Event Details</h3>
  </div>
						

					
		<?php 


  
 echo show_error($message); ?>


                  
                  <div class="form-group">
					<div class="input-group">
						<input type="text" class="form-control text-danger"  placeholder="Event Id" name="event_id"  style=" "data-parsley-type="text"
						disabled value="<?php if(isset($details['event_key'])) echo $details['event_key'];  ?>" >

					</div>
				 </div>
                           
                

					<div class="form-group"> 
                         <div class="input-group">
                           <input type="text" class="form-control" name="event_name" placeholder="  Event Name" data-parsley-required="true" data-parsley-type="true" value="<?php if(isset($details['event_name'])) echo $details['event_name'];  ?>">
                  </div>
                </div>
	            		


					<div class="form-group"> 
                         <div class="input-group">
                           <input type="text" class="form-control" name="event_date" placeholder="  Date" data-parsley-required="true" data-parsley-type="true" value="<?php if(isset($details['event_date'])) echo $details['event_date'];  ?>">
                  </div>
                </div>



                <div class="form-group"> 
                         <div class="input-group">
                           <input type="text" class="form-control" name="event_hrs" placeholder="  Total Hours" data-parsley-required="true" data-parsley-type="true" value="<?php if(isset($details['event_hrs'])) echo $details['event_hrs'];  ?>">
                  </div>
                </div>





					


                <div class="form-group"> 
                         <div class="input-group">
                           <input type="text" class="form-control" name="event_dtls" placeholder="  Event Details" data-parsley-required="true" data-parsley-type="true" value="<?php if(isset($details['event_dtls'])) echo $details['event_dtls'];  ?>">
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







