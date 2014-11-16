<?php
	//we starting a session in every page so we know if the user is logged in or not
	session_start();
	error_reporting(0);
	
	require('database/connect.php');
	require('functions/general.php');
	require('functions/users.php');
	
	if(logged_in())
	{
		$session_user_id = $_SESSION['user_id'];
		$user_data = user_data($session_user_id, 'user_typeid', 'user_name', 'user_firstname', 'user_lastname', 'user_email', 'user_password');
	}
	
	//array to save all the errors in it
	$errors = array();
?>