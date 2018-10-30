
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





<div class="row">
  <div class="col-sm-12 ">



    <div class="page-header">
      <div class="h3 mb-3 bg-primary text-white"><h1>Volunteer Details</h1>
      </div>
    </div>


    <table class="table table-hover bg-white">
      <thead>
        <tr>
          <th scope="col">Volunteer Id</th>
          <th scope="col">Admission Number</th>
          <th scope="col">Name</th>
          <th scope="col">Department</th>
          <th scope="col">Mobile Number</th>
          <th scope="col">Email Id</th>
          <th scope="col"></th>
        </tr>
      </thead>
      
      <tbody>

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


















<?php include_once('includes/footer.php'); ?>