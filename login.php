<?php
	session_start();
	$un = $_POST['un'];
    $pw = $_POST['pw'];
    
	// Create connection
    include ('getConnection.php'); 
    
	//Prepare the query
    $sql = "SELECT un, pw from instructors where un = '$un' and pw = '$pw'";
    
	//Execute the query
    $result = $cn->query($sql);
    
	//Check if there is one row, which means the login is OK
	if ($row = $result->fetch_assoc()) 
	{
		//Save the name into a session
		// $_SESSION ['un'] = $row['un'];
		echo '<body onLoad="alert(\'Welcom.. move to Home page\')">';
		echo '<meta http-equiv="refresh" content="0;URL=index.html">';
	}
	 else
	 {
		echo '<body onLoad="alert(\'Unknown Member...\')">';
		echo '<meta http-equiv="refresh" content="0;URL=signup.html">';
	 }
	$cn->close();
?>