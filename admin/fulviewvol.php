
<?php

//(?=<!--)(.*)(?=-->)(.*)(?=\n)






include_once('../global.php'); ?>
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




<div class="row">
  <div class="col-sm-12 px-3  bg-white ">



    <div class="page-header">
      <div class="h3 mb-3 bg-primary text-white"><h1> Complete Details</h1>
      </div>
    </div>




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

















  <table class="table table-hover w-50">
    <tbody>
      <tr>
        <th scope="col">Volunteer Id</th>
        <td>
          <?php echo  $details['vol_id']; ?>
        </td>
      </tr>
      <tr>
        <th scope="col">Admission Number</th>
        <td></td>
      </tr>
      <tr>
        <th scope="col">Name</th>
        <td></td>
      </tr>
      <tr>
        <th scope="col">DOB</th>
        <td></td>
      </tr>
      <tr>
        <th scope="col">Gender</th>
        <td></td>
      </tr>
      <tr>
        <th scope="col">Religion</th>
        <td></td>
      </tr>
      <tr>
        <th scope="col">Caste</th>
        <td></td>
      </tr>

      <tr>

        <th scope="col">Address</th>
        <td></td>
      </tr>
      <tr>
        <th scope="col">Year of Admission</th>
        <td></td>
      </tr>
      <tr>
        <th scope="col">Course</th>
        <td></td>
      </tr>
      <tr>
        <th scope="col">Branch</th>
        <td></td>
      </tr>
      <tr>
        <th scope="col">Semester</th>
        <td></td>
      </tr>
      <tr>
        <th scope="col">Department</th>
      </tr>
      <tr>
        <th scope="col">Blood Group</th>
      </tr>
      <tr>
        <th scope="col">Mobile Number</th>
      </tr>
      <tr>
        <th scope="col">Alternate Mobile Number</th>
      </tr>
      <tr>
        <th scope="col">Email Id</th>
        <th scope="col"></th>
      </tr>
    </tbody>


  </table>





</div> 
</div>

















<?php include_once('includes/footer.php'); ?>
