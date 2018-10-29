
<?php
 
//(?=<!--)(.*)(?=-->)(.*)(?=\n)

include_once('../global.php'); ?>
<?php include_once('../root/functions.php'); ?>
<?php include_once('../root/connection.php'); ?>
<?php  



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
                     <div class="col-sm-12 ">
                        <div class="page-header">
                            <h3 class="h3 mb-3 font-weight-normal danger-text">Volunteer Secretary Selection</h3>
                          </div>
                     
                            <form class="form-horizontal bordered-row" id="add-volunteer-0"  action="" method="post" data-parsley-validate>
                                 <div class="col-9 ">
                                    <div class="form">
                                       <div class="col-3"> 
                                          
                                          <button name="find-vol" class="btn btn" >
                                         <i class="fas fa-th-list  pr-4"></i>
                                          <span class="menu-title">Get Volunteers</span></button>
 
                                      </div>
                                    </div>
                                  </div>
                            
                        <br>
                        <br>



 <table class="table table-hover">
  <thead>
    <tr>
  
  
    <th scope="col"></th>
      <th scope="col">Volunteer Id</th>
      <th scope="col">Admission Number</th>
      <th scope="col">Name</th>
        <th scope="col">Semester</th>
          <th scope="col">Department</th>
  </thead>
     
     <tbody>

       
       
              
     

<?php



    $details = array();

     if (isset($_POST['find-vol'])) {


          $stmnt='SELECT v.vol_id,v.admnno,s.name,c.semid,c.deptname FROM nss_vol_reg v,stud_details s,class_details c, current_class d WHERE s.admissionno =v.admnno AND c.classid= d.classid AND s.admissionno= d.studid ORDER BY v.vol_id';

  $details = $db->display($stmnt);
 


?>

<?php foreach ($details as $key => $value): ?>

      <tr>
       <td><button name="select" class=" btn btn-sm " value="<?php echo $value['vol_id'];?>">
                                         <i class="fa fa-eye"></i></button></td>
        <td><?php echo $value['vol_id']; ?></td>
        <td><?php echo $value['admnno']; ?></td>
        <td><?php echo $value['name']; ?></td>
        <td><?php echo $value['semid']; ?></td>
         <td><?php echo $value['deptname']; ?></td>
      </tr>


<?php endforeach; ?>
  </tbody>
</table>
  </form>
  <?php   echo show_error($message); ?>

     </div>
      </div>
       </div>

<?php } ?>
