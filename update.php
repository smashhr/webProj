<!DOCTYPE HTML>  
<html>
<head>
	<title>User Registration</title>
</head>
<body>  

<?php
$un = $_POST['un'];
$nam = $_POST['nam'];
$pw = $_POST['pw'];
$gen = $_POST['gen'];
$age = $_POST['age'];
$num = $_POST['num'];
$ex = $_POST['ex'];
$dt = $_POST['dt'];

// Create connection
include ('getConnection.php');



	//$sql = "UPDATE instructors SET un='$un' ,  pw= $pw  ,  nam='$nam' , gen='$gen'  ,  num=$num ,  age=$age ,  ex=$ex , dt='$dt' where un='$un' and  pw= $pw";
	$sql = "UPDATE instructors SET un=$_POST['un'] ,  pw= $_POST['nam']  ,  nam=$_POST['nam'] , gen=$_POST['gen']  ,  num=$_POST['num'] ,  age=$_POST['age'] ,  ex=$_POST['ex'] , dt=$_POST['dt'] where un='$un' and  pw= $pw";

	
	if ($cn->query($sql)===TRUE) 
	{
	echo "Tanc tou for updating";
	echo '<meta http-equiv="refresh" content="5;URL=instructors.php">';	
	} 
	else 
	{
    echo "noo  chaneg";
	echo "Try again";
	}

	
$cn->close();

?>

</body>
</html>
