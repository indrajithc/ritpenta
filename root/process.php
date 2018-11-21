<?php 

include_once('connection.php'); 

try { 
	global $db;
	$db = new Database();
} catch (Exception $e) {
}
try {
	date_default_timezone_set("Asia/Kolkata");
} catch (Exception $e) {
}





function imageToCamp ($post, $files) {

	global $db;

	$destination = 'files/camp';

	$filename = "no";

	if(!empty($files))
	{
		if(is_uploaded_file($files['croppedImage']['tmp_name']))
		{ 
			$source_path = $files['croppedImage']['tmp_name'];
			$filename =  $files['croppedImage']['name'];
			$filename = md5($filename . microtime());
			$ext = 'png';
			if( strtolower( pathinfo( $filename , PATHINFO_EXTENSION) )) {
				$ext =  strtolower( pathinfo( $filename , PATHINFO_EXTENSION) );
			}
			$revFilename = $filename . '.' . $ext;
			$target_path = $destination.'/' . $revFilename;
			if(move_uploaded_file($source_path, $target_path)) {
				$filename =  $revFilename;
			}
		}
	} else  {
		return -1;
	}


	$cp_pht_id = unIndexMe( isit('camp', $post, 0) );
	$cp_pht_desc =  $post['desc'];
	$cp_pht_path =  $destination;
	$cp_pht_name =  $filename;

	$params = array(
		'cp_pht_id' => $cp_pht_id,
		'cp_pht_desc' => $cp_pht_desc,
		'cp_pht_path' => $cp_pht_path,
		'cp_pht_name' => $cp_pht_name
	);

	$result = insertIntoTable ('nss_camp_photo', $params, $db);

	if ($result) {
		return 1;
	} else {
		return 0;
	}




}





function imageToEvent ($post, $files) {

	global $db;

	$destination = 'files/event';

	$filename = "no";

	if(!empty($files))
	{
		if(is_uploaded_file($files['croppedImage']['tmp_name']))
		{ 
			$source_path = $files['croppedImage']['tmp_name'];
			$filename =  $files['croppedImage']['name'];
			$filename = md5($filename . microtime());
			$ext = 'png';
			if( strtolower( pathinfo( $filename , PATHINFO_EXTENSION) )) {
				$ext =  strtolower( pathinfo( $filename , PATHINFO_EXTENSION) );
			}
			$revFilename = $filename . '.' . $ext;
			$target_path = $destination.'/' . $revFilename;
			if(move_uploaded_file($source_path, $target_path)) {
				$filename =  $revFilename;
			}
		}
	} else  {
		return -1;
	}


	$ev_pht_id = unIndexMe( isit('event', $post, 0) );
	$ev_pht_desc =  $post['desc'];
	$ev_pht_path =  $destination;
	$ev_pht_name =  $filename;

	$params = array(
		'ev_pht_id' => $ev_pht_id,
		'ev_pht_desc' => $ev_pht_desc,
		'ev_pht_path' => $ev_pht_path,
		'ev_pht_name' => $ev_pht_name
	);

	$result = insertIntoTable ('nss_event_photo', $params, $db);

	if ($result) {
		return 1;
	} else {
		return 0;
	}




}




function imageToAward ($post, $files) {

	global $db;

	$destination = 'files/award';

	$filename = "no";

	if(!empty($files))
	{
		if(is_uploaded_file($files['croppedImage']['tmp_name']))
		{ 
			$source_path = $files['croppedImage']['tmp_name'];
			$filename =  $files['croppedImage']['name'];
			$filename = md5($filename . microtime());
			$ext = 'png';
			if( strtolower( pathinfo( $filename , PATHINFO_EXTENSION) )) {
				$ext =  strtolower( pathinfo( $filename , PATHINFO_EXTENSION) );
			}
			$revFilename = $filename . '.' . $ext;
			$target_path = $destination.'/' . $revFilename;
			if(move_uploaded_file($source_path, $target_path)) {
				$filename =  $revFilename;
			}
		}
	} else  {
		return -1;
	}


	$awrd_id = unIndexMe( isit('award', $post, 0) );
	$awrdp_desc =  $post['desc'];
	$awrdp_path =  $destination;
	$awrdp_name =  $filename;

	$params = array(
		'awrd_id' => $awrd_id,
		'awrdp_desc' => $awrdp_desc,
		'awrdp_path' => $awrdp_path,
		'awrdp_name' => $awrdp_name
	);

	$result = insertIntoTable ('nss_awards_photo', $params, $db);

	if ($result) {
		return 1;
	} else {
		return 0;
	}




}





?>