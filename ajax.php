<?php 


include_once('global.php'); 
if( isset( $_SESSION[ SYSTEM_NAME . 'userid'] )   ) {


	
	define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');

	if( isset($_POST['action']) &&  IS_AJAX  ) {

		include_once('root/process.php');

		switch ($_POST['action']) {


			case 'image-to-camp': 
			$flag = imageToCamp($_POST, $_FILES);	
			echo json_encode(array('success'=>$flag));	 
			break;

			case 'image-to-event': 
			$flag = imageToEvent($_POST, $_FILES);	
			echo json_encode(array('success'=>$flag));	 
			break;

			case 'image-to-award': 
			$flag = imageToAward($_POST, $_FILES);	
			echo json_encode(array('success'=>$flag));	 
			break;
			



			default: 
			break;
		}

	}

} else {
	echo "-1";
}
?>