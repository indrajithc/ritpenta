
<?php
 
//(?=<!--)(.*)(?=-->)(.*)(?=\n)

include_once('../global.php'); ?>
<?php include_once('../root/functions.php'); ?>
<?php include_once('../root/connection.php'); ?>
<?php  

auth_login();

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
  <div class="col-sm-9 ">


 <div class="form-group">
  <div class="h3 mb-3 font-weight-normal danger-text"><h6>Departmentwise Search</h6>

           <!-- <label class="bmd-label-floating"></label>-->
            <div class="">
              <select name="deptname" class="form-control"   required>
                <option>select</option>
                <option>COMPUTER APPLICATIONS</option>
                <option>COMPUTER SCIENCE</option>
                <option>CIVIL</option>
                <option>MECHANICAL</option>
                <option>ELECTRICAL AND ELECTRONICS</option>
                <option>ELECTRONICS AND COMMUNICATION</option>
                <option>ARCHITECTURE</option>
              
              </select>
              </div>
            </div>
          </div>

 
    </div>
  
  <div class="col-3"> 
          
      <button class="btn btn-outline-info " name="search" style="margin-top: 1.9rem;" type="submit">
        <i class="fa fa-search"></i>
      </button>
      </div>
    </div>


<div class="row">
  <div class="col-sm-12 ">



<div class="page-header">
  <div class="h3 mb-3 bg-primary text-white"><h1>Volunteer Details</h1>
    </div>
  </div>


<table class="table table-hover bg-white">
  <thead>
    <tr>
      <th scope="col">Enrollment Id</th>
      <th scope="col">Admission Number</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Alternate Mobile Number</th>
      <th scope="col">Email Id</th>
      <th scope="col"></th>
    </tr>
  </thead>
     
     <tbody>
      <?php

     if (isset($_POST['search'])) {
  


   
 $stmnt= 'select * from nss_vol_reg v,stud_details b, class_details c, current_class  where admnno=b.admissionno and c.classid=current_class.classid and nss_vol_reg.admnno=current_class.studid and LOWER(deptname) = LOWER(:deptname)';


$params=array( 
    ':deptname'    =>  trim($_POST['deptname']) 
  );




//$details = $db->display($stmnt,$params);
$data = $db->display($stmnt,$params);

  if( $data){ 

$details = $data[0];

  }
} 



?>

<?php foreach ($details as $key => $value):  ?>

      <tr>
        <td><?php echo $value['vol_id']; ?></td>
        <td><?php echo $value['admnno']; ?></td>
        <td><?php echo $value['vol_bg']; ?></td>
        <td><?php echo $value['vol_mob']; ?></td>
        <td><?php echo $value['vol_alt_mob']; ?></td>
        <td><?php echo $value['vol_emailid']; ?></td>


    </tr>


<?php endforeach; ?>
<?php } ?>  





      

<?php


   $stmnt=' SELECT * FROM `nss_vol_reg` ';
  


  $details = $db->display($stmnt);
 

?>

<?php foreach ($details as $key => $value): ?>

      <tr>
        <td><?php echo $value['vol_id']; ?></td>
        <td><?php echo $value['admnno']; ?></td>
        <td><?php echo $value['vol_bg']; ?></td>
        <td><?php echo $value['vol_mob']; ?></td>
        <td><?php echo $value['vol_alt_mob']; ?></td>
        <td><?php echo $value['vol_emailid']; ?></td>


<td><a href="admin/fulviewvol.php?id=<?php echo $value['vol_id']; ?>" class="btn btn-primary btn-sm">view</a>
      </td>
    </tr>


<?php endforeach; ?>
  </tbody>
</table>



 

  </div> 
</div>





 






        </div>








        <?php include_once('includes/footer.php'); ?>