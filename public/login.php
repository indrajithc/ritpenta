

<?php



include_once('../global.php'); 


include_once('../root/functions.php'); 
include_once('../root/connection.php'); 

$db=new Database();
$error='';

$message=array(
  null,
  null
);






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

<!DOCTYPE html>
<html lang="en"  ng-app="app-admin">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Indran">
  <meta name="github" content="https://github.com/indrajithc">
  <meta name="viewport" content="width=device-width, initial-scale=1">



  <base href="<?php echo DIRECTORY ; ?>">
  <title><?php  echo DISPLAY_NAME; ?></title>

  <link rel="icon" href="assets/image/favicon/favicon.ico">

  <meta name="csrf-token" content="<?php echo $_SESSION[ SYSTEM_NAME . '_token']; ?>">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>








  <link rel="stylesheet" href="admin/css/style.css">  
  <link rel="stylesheet" href="admin/css/style_01.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->


<link rel="shortcut icon" href="assets/image/favicon/favicon.ico" /> 
<script src="assets/js/jquery.min.js"></script> 

</head>




<body class="text-center">



  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              <form action="" method="post" class="parsley" data-parsley-validate>
                <img class="mb-4" src="assets/image/logob.jpg" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

                <div class="form-group">
                  <label class="label">Username</label>
                  <div class="input-group">
                    <input type="email" class="form-control" name="username" placeholder="Username">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input type="password" name="password" class="form-control" placeholder="*********">
                    <div class="input-group-append">
                      <span class="input-group-text">
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








  <script src="assets/js/popper.min.js"></script>  
  <script src="assets/js/bootstrap-material-design.min.js"></script> 
  <script src="assets/js/jquery.slimscroll.min.js"></script> 
  <script src="assets/js/parsley.min.js"></script>
  <script src="assets/js/lobibox.min.js"></script>  


  <script src="admin/js/main.js"></script>



  <script type="text/javascript">
    $(document).ready(function($) {
      $('body').bootstrapMaterialDesign();


      $("form.parsley").parsley({
        errorClass: 'has-danger',
        successClass: 'has-success',
        classHandler: function(ParsleyField) {
          return ParsleyField.$element.parents('.form-group');
        },
        errorsContainer: function(ParsleyField) {
          return ParsleyField.$element.parents('.form-group');
        },
        errorsWrapper: '<span class="invalid-feedback d-block">',
        errorTemplate: '<div></div>',
        trigger: 'change'
      });





    });
  </script>

</body>

</html>
