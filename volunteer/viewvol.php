
<?php



include_once('includes/header.php');



?>


<div class="row">
  <div class="col-sm-12 ">


    <h1 class="h3 mb-3 font-weight-normal text-dark text-center">Volunteer Details</h1>
    


    <div class="table-responsive">

      <table class="table dataTable table-hover bg-white">
        <thead>
          <tr>
            <th scope="col">Vol Id</th>
            <th scope="col">Name </th>
            <th scope="col">Adm No</th>
            <th scope="col">BG</th>
            <th scope="col">Department</th>
            <th scope="col">Mobile No</th>
            <th scope="col">Email Id</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        
        <tbody>

          <?php
          $stmnt=" SELECT v.*, d.branch_or_specialisation, d.name FROM `nss_vol_reg` v LEFT JOIN  stud_details d ON v.admnno = d.admissionno  ";
          
          $details = $db->display($stmnt);
          
          ?>

          <?php if ($details ): ?>
            <?php foreach ($details as $key => $value): ?>
             <tr>
              <td><?php echo $value['vol_regid']; ?></td>
              <td><?php echo $value['name']; ?></td>
              <td><?php echo $value['admnno']; ?></td>
              <td><?php echo $value['vol_bg']; ?></td>
              <td><?php echo $value['branch_or_specialisation']; ?></td>
              <td><?php echo $value['vol_mob']; ?></td>
              <td><?php echo $value['vol_emailid']; ?></td>


              <td><a href="volunteer/viewvol/<?php echo indexMe($value['vol_id']); ?>"  class="btn btn-sm btn-success "  > <i  class=" fa fa-eye"></i></a>
                <td><a href="volunteer/edit_vol/<?php echo  indexMe($value['vol_id']); ?>"   class="btn btn-sm btn-primary "  ><i class="far fa-edit"></i></a>
                </td>
              </tr>



            <?php endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table>

    </div>


    

  </div> 
</div>








<?php include_once('includes/footer.php'); ?>
