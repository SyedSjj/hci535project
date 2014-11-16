<?php
	function sanitize($data)
	{
		return mysql_real_escape_string($data);
	}
	
	function array_sanitize(& $item)
	{
		$item = mysql_real_escape_string($item);
		mysql_real_escape_string($data);
	}
?>