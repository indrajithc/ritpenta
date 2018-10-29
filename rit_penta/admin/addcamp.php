 <?php

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














if(isset($_POST['submit'])){

	$cp_name         =  $_POST['cp_name'];
	$cp_date_frm        =  $_POST['cp_date_frm'];
	$cp_date_to      =  $_POST['cp_date_to'];
	$cp_details         =  $_POST['cp_details'];
	







	$stmnt=" SELECT * FROM nss_camp_reg WHERE cp_name= '" . $cp_name ."' ";





$result = $db->display( $stmnt);
	if( $result ){

		$message [0] = 2;
		$message [1] = 'already exists'; 

	} else {


$stmnt =  'insert into nss_camp_reg(cp_name,cp_date_frm,cp_date_to,cp_details) values(:cp_name,:cp_date_frm,:cp_date_to,:cp_details)';





$params=array(

         
		':cp_name'        =>  $cp_name,
		':cp_date_frm'       =>  $cp_date_frm,
		':cp_date_to'         =>  $cp_date_to,
		':cp_details'            =>  $cp_details

	);


		$istrue=$db->execute_query($stmnt,$params);

		if($istrue){
					//$message=' added!';

					   $message [0] = 1;
                      $message [1] = ' added '; 



				}
				else
				{
			//$message=$istrue;	
	
		// $message=' value already exists';

		   $message [0] = 3;
           $message [1] = ' something is wrong'; 
       }

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
             		<div class="col-sm-10 form-group-lg">

							<form  id="addcamp"  action="" method="post" data-parsley-validate class="form-horizontal borderd-row" align="center">
							
							<h3 class="h3 mb-3 font-weight-normal danger-text">Add Camp Activities</h3>
							</div>


						

								

 <!--

								<div class="form-group">
									<label for="campid" class="bmd-label-floating">Camp Id</label>
									<div class="">
										<input id="vol_id" type="text" class="form-control"  placeholdera="Camp Id..." name="cp_id" data-parsley-required="true" data-parsley-type="number">
									</div>
								</div>
-->



					<div class="form-group"> 
                         <div class="input-group">
                           <input type="text" class="form-control" name="cp_name" placeholder="Camp Name" data-parsley-required="true" data-parsley-type="">
                  </div>
                </div>



								<div class="form-group"> 
                         <div class="input-group">
                           <input type="date" class="form-control" name="cp_date_frm" placeholder=" Start On" data-parsley-required="true" data-parsley-type="number">
                      
                  </div>
                </div>




                         <div class="form-group">
                       
                         <div class="input-group">
                           <input type="date" class="form-control" name="cp_date_to" placeholder="End On" data-parsley-required="true" data-parsley-type="number">
                        
        
                   
                  </div>
                </div>






                         <div class="form-group">
                    
                         <div class="input-group">
                           <input type="textarea" class="form-control" name="cp_details" placeholder="Objective Of Camp" data-parsley-required="true" data-parsley-type="" style="height: 100px">
                       
                  </div>
                </div>








                                

								





							    <!--
								<div class="form-group">	                                
								<label class="bmd-label-floating">Select Files</label>
							    <form method="POST" action="#" enctype="multipart/form-data">
										<!-- COMPONENT START 
										
											<div class="input-group input-file" name="Fichier1">
									    		<input type="text" class="form-control" placeholder="" />			
									            <span class="input-group-btn">
									        		<button class="btn btn-default btn-choose" type="button">Choose</button>
									    		</span>


											</div>
										</div>
										 
										<div class="form-group">
											
											<button type="reset" class="btn btn-danger">Reset</button>
										</div></form>
									
									           
									           -->
									
				
                      <div class="container">
							     <button class="btn btn-dark submit-btn btn-block btn btn-outline-dark" name="submit-btn">Submit
							     </button>
                      </div>


</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</section>
										
			</html>						
	            		
	            		
        
    