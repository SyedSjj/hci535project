<?php 
	if(!logged_in())
	{	
		header('Location: login.php');
	}
?>