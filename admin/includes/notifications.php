<?php

/**
 * @Author: indran
 * @Date:   2018-11-22 05:34:25
 * @Last Modified by:   indran
 * @Last Modified time: 2018-11-22 06:09:29
 */


include('../../global.php');  
?><?php  

if (isset($_POST['action'])  &&   isset($_SESSION[ SYSTEM_NAME . 'userid'])  && $_SESSION[ SYSTEM_NAME . 'type'] == 'admin') {


	include_once('../../root/connection.php'); 
	include_once('../../root/functions.php');



	$db=  new Database();
	$message=array(null,null);











	if ($_POST['action'] == 'get-notif') { 

		





		?>


		<a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
			<i class="mdi mdi-bell-outline"></i>
			<span class="count bg-success">0</span>
		</a>
		<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
			<a class="dropdown-item py-3 border-bottom">
				<p class="mb-0 font-weight-medium float-left">You have 0 new notifications </p>
				<span class="badge badge-pill badge-primary float-right">View all</span>
			</a>
										<!-- <a class="dropdown-item preview-item py-3">
											<div class="preview-thumbnail">
												<i class="mdi mdi-alert m-auto text-primary"></i>
											</div>
											<div class="preview-item-content">
												<h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
												<p class="font-weight-light small-text mb-0"> Just now </p>
											</div>
										</a>
										<a class="dropdown-item preview-item py-3">
											<div class="preview-thumbnail">
												<i class="mdi mdi-settings m-auto text-primary"></i>
											</div>
											<div class="preview-item-content">
												<h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
												<p class="font-weight-light small-text mb-0"> Private message </p>
											</div>
										</a>
										<a class="dropdown-item preview-item py-3">
											<div class="preview-thumbnail">
												<i class="mdi mdi-airballoon m-auto text-primary"></i>
											</div>
											<div class="preview-item-content">
												<h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
												<p class="font-weight-light small-text mb-0"> 2 days ago </p>
											</div>
										</a> -->
									</div>


									<?php
								}









































							}



							?>