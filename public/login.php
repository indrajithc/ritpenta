

<?php



// include_once('../global.php'); 


// include_once('../root/functions.php'); 
// include_once('../root/connection.php'); 

// $db=new Database();
// $error='';

// $message=array(
//   null,
//   null
// );


include_once('includes/header.php');





auth_use();


if(isset($_POST['login'])){

  $username = $_POST['username'];
  $password = $_POST['password'];
  

  $stmnt='select * from nss_log where user_id = :username and user_pwd = :password';
  $params=array( 
   ':username'  =>  $username,
   ':password'  =>  $password
 );

  $user = $db->display($stmnt,$params);
  if($user){

   $_SESSION[SYSTEM_NAME . 'userid']=$username;
   $_SESSION[SYSTEM_NAME . 'userid0']=$db->display($stmnt,$params)[0]['usr_id'];


   if($user[0]['user_type'] == 'admin'){

     $_SESSION[SYSTEM_NAME . 'type']='admin'; 
     setLocation(  DIRECTORY_ADMIN );

   } else {

    $_SESSION[SYSTEM_NAME . 'type']='vsecretary'; 
    setLocation(  DIRECTORY_VOLUNTEER );

  }





  exit();
} else{ 

  $message [0] = 3;
  $message [1] = 'Incorrect username or password'; 


}


}



?>



<div class="" >



  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-md-4 col-sm-12 col-md-offset-4"  style=" margin-top: 13rem; margin-bottom: 4rem; ">
            <div class="auto-form-wrapper text-center">
              <form action="" method="post" class="parsley" data-parsley-validate>
                <img class="mb-4" src="assets/image/logob.jpg" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

                <div class="form-group">
                  <label class="form-label pull-left">Username</label>
                  <div class="form-group">
                    <input type="email" class="form-control" name="username" placeholder="Username" required value="<?php echo isit('username', $_POST); ?>">
                    <div class="form-group-append">
                      <span class="form-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-label pull-left">Password</label>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="*********" required>
                    <div class="form-group-append">
                      <span class="form-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>



















                <?php 





                echo show_error($message); ?>


                <div class="form-group">
                  <button class="btn btn-dark submit-btn btn-block" name="login">Login</button>
                </div>

              </form>
            </div>




            <span class="text-muted pt-5 mt-5 d-block text-center text-sm-left d-sm-inline-block"> Copyright © <?php echo THEME_OWN_BY; ?>
            <a href="<?php echo TERMS__CONDITIONS; ?>" target="_blank">read</a>. All rights reserved.</span>



          </div>
        </div>
      </div> 
    </div> 
  </div>




</div>

<?php 

include_once('includes/footer.php');
exit();
?>

