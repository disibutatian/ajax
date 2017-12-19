<?php
	
	$username = $_GET['username'];
	$password= $_GET['password'];

	$result = array();

	if(empty($username) || empty($password)) {
		$result['success'] = false;	
	} else {
		$result['success'] = true;	
	}

	echo json_encode($result);



