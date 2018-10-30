
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



<div class="content-wrapper">



<div class="row">
  <div class="col-sm-12 px-3  bg-white ">



<div class="page-header">
  <div class="h3 mb-3 bg-primary text-white"><h1> Complete Details</h1>
    </div>
  </div>


 

<?php


   //$stmnt=' SELECT * FROM `nss_vol_reg` WHERE vol_id = :id ';
  $stmnt='select *,b.name,b.image , b.name , b.gender , b.address , b.courseid , b.branch_or_specialisation,c.semid,c.deptname FROM nss_vol_reg, stud_details b, class_details c, current_class where admnno=b.admissionno and c.classid=current_class.classid and nss_vol_reg.admnno=current_class.studid order by vol_id;
;';
   //$params = array (
   //':admnno' => $id
  //);


  $details = $db->display($stmnt);
 
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
      <td>
         <?php echo  $details['admnno']; ?>
      </td>
    </tr>
    <tr>
      <th scope="col">Photo</th>
      <td>
         <?php echo  $details['image']; ?>
      </td>
    </tr>
    <tr>
      <th scope="col">Name</th>
      <td>
         <?php echo  $details['name']; ?>
      </td>
    </tr>
    
    <tr>
      <th scope="col">Gender</th>
      <td>
         <?php echo  $details['gender']; ?>
      </td>
    </tr>

      <tr>

      <th scope="col">Address</th>
      <td>
         <?php echo  $details['address']; ?>
      </td>
    </tr>
    
<tr>
      <th scope="col">Course</th>
      <td>
         <?php echo  $details['courseid']; ?>
      </td>
    </tr>
    <tr>
      <th scope="col">Branch</th>
      <td>
         <?php echo  $details['branch_or_specialisation']; ?>
      </td>
    </tr>
    
    <tr>
      <th scope="col">Semester</th>
      <td>
         <?php echo  $details['semid']; ?>
      </td>
    </tr>
    <tr>
      <th scope="col">Department</th>
      <td> <?php echo  $details['deptname']; ?></td>
    </tr>
    <tr>
      <th scope="col">Blood Group</th>
      <td> <?php echo  $details['vol_bg']; ?></td>
    </tr>
    <tr>
      <th scope="col">Mobile Number</th>
      <td> <?php echo  $details['vol_mob']; ?></td>
    </tr>
    <tr>
      <th scope="col">Alternate Mobile Number</th>
      <td> <?php echo  $details['vol_alt_mob']; ?></td>
    </tr>
    <tr>
      <th scope="col">Email Id</th>
      <td> <?php echo  $details['vol_emailid']; ?></td>
      <th scope="col"></th>
    </tr>
  </tbody>
     
     
</table>



 

  </div> 
</div>





 






        </div>








        <?php include_once('includes/footer.php'); ?>
