<!DOCTYPE HTML>  
<html>
<head>
	<title>User Registration</title>
</head>
<body>  

<?php
$un = $_POST['un'];
$name = $_POST['nam'];
$pw = $_POST['pw'];
$gen = $_POST['gen'];
$age = $_POST['age'];
$num = $_POST['num'];
$ex = $_POST['ex'];
$dt = $_POST['dt'];

// Create connection
include ('getConnection.php');

	$sql = "INSERT into instructors (un, pw, nam, gen, num, age, ex, dt) values ('$un', '$pw', '$name', '$gen', $num, $age, $ex, '$dt')";
	if ($cn->query($sql)===TRUE) 
	{
    echo "Your registration has been created successfully";	
	} 
	else 
	{
    echo "User already Registered.";
	echo "Try again";
	}

	
$cn->close();

?>

</body>
</html>
