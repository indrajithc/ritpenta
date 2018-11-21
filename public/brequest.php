

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





if(isset($_POST['blored'])){

  var_dump($_POST);

  $params = array(

    'req_name' => isit('reqname', $_POST) ,
    'req_email' => isit('reqmail', $_POST) ,
    'req_mob' => isit('reqmob', $_POST) ,
    'req_bg' => isit('reqbg', $_POST) ,
    'req_loc' => isit('reqloc', $_POST)  
  );


  $result = insertIntoTable( 'nss_bg_reqst' ,  $params ,$db);



  if ($result) {
    $message [0] = 1;
    $message [1] = ' request added '; 
    $_POST = array();

  } else {

    $message [0] = 4;
    $message [1] = ' request error'; 
  } 


}



?>





<style type="text/css">
footer {
  position: fixed;
  bottom: 0;
  width: 100%;
}
</style>





<div class="container"> 
  <div class="row w-100">
    <div class="col-md-6 col-sm-12 col-md-offset-3"  style=" margin-top: 1rem; margin-bottom: 5rem; ">





      <div class="page-header">
        <h1 class="h3 mb-3 bg-primary text-white" style="padding: 1rem;">Blood Request</h1>
      </div>

      <?php  echo show_error($message); ?>
      <form method="get" action="">
        <?php 
        // if (isset($_POST)) {
        //   foreach ($_POST as $key => $value) {
        //     echo "<input type='hidden' name='$key' value='$value'>";
        //   }
        // } 
        ?>



        <div class="form-group">
          <label class="bmd-label-floating">Blood Group</label>
          <div class="">
            <select name="vol_bg" class="form-control"  onchange="this.form.submit();" required>

              <option  value="" disabled selected  >Select</option>
              <option  value="O+" <?php if( strtolower( isit('vol_bg', $_GET) ) == "o+" ) echo " selected "; ?> >O+ve</option>
              <option  value="O-" <?php if( strtolower( isit('vol_bg', $_GET) ) == "o-" ) echo " selected "; ?> >O-ve</option>
              <option  value="B+" <?php if( strtolower( isit('vol_bg', $_GET) ) == "b+" ) echo " selected "; ?> >B+ve</option>
              <option  value="B-" <?php if( strtolower( isit('vol_bg', $_GET) ) == "b-" ) echo " selected "; ?> >B-ve</option>
              <option  value="A+" <?php if( strtolower( isit('vol_bg', $_GET) ) == "a+" ) echo " selected "; ?> >A+ve</option>
              <option  value="A-" <?php if( strtolower( isit('vol_bg', $_GET) ) == "a-" ) echo " selected "; ?> >A-ve</option>
              <option  value="AB+" <?php if( strtolower( isit('vol_bg', $_GET) ) == "ab+" ) echo " selected "; ?> >AB+ve</option>
              <option  value="AB-" <?php if( strtolower( isit('vol_bg', $_GET) ) == "ab-" ) echo " selected "; ?> >AB-ve</option>



            </select>
          </div>
        </div>

        <?php
        $blg = isit('vol_bg', $_GET, 0) ;
        if (isset($_GET['vol_bg'])) {
          // $result = selectFromTable( ' COUNT(*) AS count ', 'nss_blood_donation',  "bd_group = '$blg' " , $db);

          $result = selectFromTable( ' COUNT( DISTINCT(admissionno) ) AS count ', '  stud_details ',  "   admissionno IN ( SELECT bd_admno FROM nss_blood_donation WHERE bd_group = '$blg'  ) OR admissionno IN ( SELECT admnno FROM nss_vol_reg WHERE vol_bg = '$blg'  )    " , $db);


            
          $blg =  $result;
          if (isset($blg[0]['count'])) {
            $blg = $blg[0]['count'];
          }
        }


        ?>

        <?php if (isset($_GET['vol_bg'])): ?>
          <div class="form-group" >
            <input class="form-control" style=" color: red; font-size: 2rem; " type="text" id="reqdate" value="<?php echo $blg . '     Blood Donor Available '; ?>" readonly >
          </div>
        <?php endif; ?>
      </form>

      <?php if( $blg  > 0 ): ?>

        <form class="form-horizontal bordered-row" id="bldreq"  action="" method="post" data-parsley-validate>

          <input type="hidden" name="reqbg" value="<?php echo isit('vol_bg', $_GET); ?>" required>







          <div class="form-group">
            <label class="bmd-label-floating"> Name</label>
            <div class="">
              <input type="text" class="form-control" value="<?php echo isit('reqname', $_POST); ?>" placeholdera="Name" name="reqname" data-parsley-required="true"  required>
            </div>
          </div>










          <div class="form-group">
            <label class="bmd-label-floating">Phone No</label>
            <div class="">
              <input type="text" class="form-control"  value="<?php echo isit('reqmob', $_POST); ?>"  placeholdera="Phone No" name="reqmob" data-parsley-required="true" data-parsley-type="number" minlength="10" maxlength="10" required>
            </div>
          </div>  



          <div class="form-group">
            <label class="bmd-label-floating">Email Id</label>
            <div class="">
              <input type="email" class="form-control"  placeholdera="Email Id"  value="<?php echo isit('reqmail', $_POST); ?>" name="reqmail" data-parsley-required="true" >
            </div>
          </div>  







          <div class="form-group" >
            <label class="bmd-label-floating">Place</label>
            <div class="">
              <textarea class="form-control" type="text" id="reqloc" rows="5" placeholder="Place" name="reqloc"  required><?php echo isit('reqloc', $_POST); ?></textarea> 
            </div>
          </div>







          <div class="">
            <button  type="submit" name="blored" class="btn btn-lg btn-outline-primary btn-block">Submit</button>
          </div>





        </form>
        <?php else: ?>
          <?php $message[0] = 0; ?>
          <?php $message[1] = "  "; ?>


          <?php  echo show_error($message); ?>

        <?php endif; ?>



      </div>

    </div>

  </div>

  <?php 

  include_once('includes/footer.php');
  exit();
  ?>

