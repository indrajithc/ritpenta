
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
  <div class="h3 mb-3 bg-primary text-white"><h1>Event Details</h1>
    </div>
  </div>


<table class="table table-hover bg-white">
  <thead>
    <tr>
      <th scope="col">Event name</th>
      <th scope="col">Event date</th>
      <th scope="col">Event working hours</th>
      <th scope="col">Event details</th>
    </tr>
  </thead>
     
     <tbody>

<?php


   $stmnt=' SELECT * FROM `nss_event_reg` ';
  


  $details = $db->display($stmnt);
 

?>

<?php foreach ($details as $key => $value): ?>

      <tr>
        
        <td><?php echo $value['event_name']; ?></td>

        <td><?php echo $value['event_date']; ?></td>

        <td><?php echo $value['event_hrs']; ?></td>
        
        <td><?php echo $value['event_dtls']; ?></td>
        



  <td><a href="admin/edit_event.php?id=<?php echo $value['event_id']; ?>"   class="btn btn-sm btn-primary "  ><i class="far fa-edit"></i></a>
      </td>
    </tr>


<?php endforeach; ?>
  </tbody>
</table>



 

  </div> 
</div>





 






        </div>








        <?php include_once('includes/footer.php'); ?>