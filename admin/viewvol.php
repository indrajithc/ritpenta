
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


<h1 class="h3 mb-3 font-weight-normal text-dark text-center">Volunteer Details</h1>
    



    <table class="table table-hover bg-white">
      <thead>
        <tr>
          <th scope="col">Volunteer Id</th>
      <th scope="col">Admission Number</th>
      <th scope="col">Blood grroup</th>
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


<td><a href="admin/fulviewvol.php?id=<?php echo $value['vol_id']; ?>"  class="btn btn-sm btn-success "  > <i  class=" fa fa-eye"></i></a>
<td><a href="admin/edit_vol.php?id=<?php echo $value['vol_id']; ?>"   class="btn btn-sm btn-primary "  ><i class="far fa-edit"></i></a>
      </td>
    </tr>



        <?php endforeach; ?>
      </tbody>
    </table>



    

  </div> 
</div>








<?php include_once('includes/footer.php'); ?>