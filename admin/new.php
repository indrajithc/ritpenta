<?php



include_once('../global.php'); ?>
<?php include_once('../root/functions.php'); ?>
<?php  

auth_login();

include_once('includes/header.php'); ?>





<div class="row">
  <div class="col-md-8 col-lg-7 col-sm-12 ">






    <form>


      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1"   placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>



      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>



      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>



      <button type="submit" class="btn btn-primary">Submit</button>


    </form>









  </div> 
</div>








<div class="row">
	
	<div class="col-12">
		



    <table class="table table-hover bg-white">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>


      <tbody>


        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>

            <a href="admin/new.php?id=12&" class="btn btn-primary btn-sm">view</a>
          </td>
        </tr>



        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>












  </div>


</div>













<?php include_once('includes/footer.php'); ?>