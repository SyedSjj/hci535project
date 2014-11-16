<?php

	//functions related to the users
	function user_exists($username)
	{
		$username = sanitize($username);
		$query = mysql_query("SELECT COUNT(`user_id`) FROM user WHERE user_name = '$username'");
		return (mysql_result($query, 0) == 1) ? true : false;
	}
	
	function email_exists($email)
	{
		$username = sanitize($email);
		$query = mysql_query("SELECT COUNT(`user_id`) FROM user WHERE user_email = '$email'");
		return (mysql_result($query, 0) == 1) ? true : false;
	}
	
	/* function user_active($username)
	{
		$username = sanitize($username);
		$query = mysql_query("SELECT COUNT(`user_id`) FROM user WHERE user_name = '$username' AND user_active = 1");
		return (mysql_result($query, 0) == 1) ? true : false;
	} */

	function user_id_from_username($username)
	{
		//if login success, I am gonna return the user_id in a session
		$username = sanitize($username);
		$query = mysql_query("SELECT `user_id` FROM user WHERE user_name = '$username'");
		while($row = mysql_fetch_array($query))
		{
			return $row['user_id'];
		}
	}
	
	function login($username, $password)
	{
		$user_id = user_id_from_username($username);
		$username = sanitize($username);
		$password = md5($password);
		
		$query = mysql_query("SELECT COUNT(`user_id`) FROM user WHERE user_name = '$username' AND user_password = '$password'");
		return (mysql_result($query, 0) == 1) ? $user_id : false;
	}
	
	function logged_in()
	{
		return isset($_SESSION['user_id']) ? true : false;
	}
	
	function user_data($user_id)
	{
		$data = array();
		$user_id = (int)$user_id;
		
		$func_num_args = func_num_args();
		$func_get_args = func_get_args();
		
		if($func_num_args > 1)
		{
			unset($func_get_args[0]);
			$fields = '`' . implode('`, `', $func_get_args) . '`';
			$data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM user WHERE `user_id` = $user_id "));
			return $data;
		}
	}
	
	function register_user($register_data)
	{
		array_walk($register_data, 'array_sanitize');
		$register_data['user_password'] = md5($register_data['user_password']);
		
		$fields = '`' . implode('`, `', array_keys($register_data)) . '`';
		$data = '\'' . implode('\', \'', $register_data) . '\'';
		
		mysql_query("INSERT INTO `user` ($fields) VALUES ($data)");
                echo "Register";
	}
?>