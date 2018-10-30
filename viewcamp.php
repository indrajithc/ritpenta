
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
  <div class="col-sm-12">



<div class="page-header">
  <div class="h3 mb-3 bg-primary text-white"><h1>Camp Details</h1>
    </div>
  </div>


<table class="table table-hover bg-white">
  <thead>
    <tr>
      <th scope="col">Camp name</th>
      <th scope="col">Camp start date</th>
      <th scope="col">Camp end date</th>
      <th scope="col">Camp details</th>
    </tr>
  </thead>
     
     <tbody>

<?php


   $stmnt=' SELECT * FROM `nss_camp_reg` ';
  


  $details = $db->display($stmnt);
 

?>

<?php foreach ($details as $key => $value): ?>

      <tr>
        <td><?php echo $value['cp_name']; ?></td>

        <td><?php echo $value['cp_date_frm']; ?></td>

        <td><?php echo $value['cp_date_to']; ?></td>
        
        <td><?php echo $value['cp_details']; ?></td>
        


<!--<td><a href="admin/fulviewvol.php?id=<?php echo $value['vol_id']; ?>" class="btn btn-primary btn-sm">view</a>
      </td>-->
    </tr>


<?php endforeach; ?>
  </tbody>
</table>



 

  </div> 
</div>





 






        </div>








        <?php include_once('includes/footer.php'); ?>