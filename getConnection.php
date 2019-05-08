<?php
    
	//Create a connection
	$cn = new mysqli ('localhost', 'root', '','odhp');
	// Check connection
	if ($cn->connect_error) 
		{
			die("Connection failed: " . $cn->connect_error);
		} 
		
?>
