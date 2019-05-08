<!doctype html>
<html>
<head>
<title>Instructors</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.css">
<style>
	/* Remove the navbar's default margin-bottom and rounded borders */ 
	.navbar {
		margin-bottom: 0;
		border-radius: 0;
	}
	
	/* Add a gray background color and some padding to the footer */
	footer {
		background-color: #262626;
		padding: 25px;
		color: #a6a6a6;
	}
	
.carousel-inner img {
		width: 100%; /* Set width to 100% */
		margin: auto;
		min-height:200px;
}

/* Hide the carousel text when the screen is less than 600 pixels wide */
@media (max-width: 600px) {
	.carousel-caption {
		display: none; 
	}
}
</style>
</head>
<body class="fontg bcolor">


<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
		</button>
		<a class="navbar-brand icon-bar" href="index.html"><img src="images/logos-1.png" class="img-circle" alt="LOGO" width="40px" height="30"></a>
	</div>
	<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav">
			<li><a href="index.html">Home</a></li>
			<li class="active"><a href="instructors.php">Instructors</a></li>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="instructions.html">Instructions<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="DrivigLaws.html">Driving Laws</a></li>
					<li><a href="RoadInst.html">Road Instructions</a></li>
					<li><a href="Driverlicense.html">Driver license</a></li>
				</ul>
			</li>
			<li><a href="aboutUs.html">About Us</a></li>
			<li><a href="mailto: omandhp@gmail.com">Contact</a></li>
			<li><a href="help.html">Help</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		</ul>
	</div>
</div>

<form action="" method="post">
    <table width="100%" border="0" style="border:none;">
      <tr>
        <td><label>Name &nbsp;</label><input type="text" name="by_name" /></td>
		<td><label>Gender &nbsp;</label><br>
		<input type="radio" value="Male" name="by_gen" required>Male <br> 
		<input type="radio" value="Female" name="by_gen" required>Female</td>
		<td><label>Drive Type &nbsp;</label><br>
		<input type="radio" value="Automatic" name="by_dt" required>Automatic <br>
		<input type="radio" value="Manual" name="by_dt" required>Manual</td></td>
        <td><input class="button" type="submit" name="submit" value="Search" /></td>
      </tr>
    </table>
	</form>
<?php
 $sql = "Select * from instructors";
if(isset($_POST['submit'])) {

    $result = $sql->search_inst($_POST);

}

?>
</nav>


<?php
	session_start();
// Create connection
    include ('getConnection.php');
//Prepare the query
    $sql = "Select * from instructors";
//Execute teh query
	$result = $cn->query($sql);
	if($result){
    while ($row = $result->fetch_assoc()){
?>


<div class="container" style="margin: 200px">
	<div class="row" style="padding-bottom: 20px">
		<div class="col-sm-6" style="left:130px">
            <div class="card" style="width:400px">
            <?php
                if ($row['gen']=="Male"){
            ?>
				<img class="card-img-bottom" src="images/male.jpg" alt="Card image" style="">
				<div class="card-body">
                    <h4 class="card-title"><?php echo $row['nam'];?></h4>
                    <p class="card-text"><?php echo $row['gen'];?></p>
                    <p class="card-text">Age: <?php echo $row['age'];?></p>
                    <p class="card-text">Experience <?php echo $row['ex'];?> Years</p>
                    <p class="card-text">Drive Type: <?php echo $row['dt'];?></p>
                    <p class="card-text">Phone Number: <?php echo $row['num'];?></p>
                </div>
            <?php
                }
                else{		
			?>
				<img class="card-img-bottom" src="images/female.jpg" alt="Card image" style="
				">	
				<div class="card-body">
                    <h4 class="card-title"><?php echo $row['nam'];?></h4>
                    <p class="card-text"><?php echo $row['gen'];?></p>
                    <p class="card-text">Age: <?php echo $row['age'];?></p>
                    <p class="card-text">Experience <?php echo $row['ex'];?> Years</p>
                    <p class="card-text">Drive Type: <?php echo $row['dt'];?></p>
										<p class="card-text">Phone Number: <?php echo $row['num'];?></p>
										<button type="submit" class="signupbtn" onclick="newAccount()">Update</button>
                </div>
			</div>
		</div>
	</div>
		
 

				 

<?php
			}
	    }
	}
$cn->close();

function search_inst($POST) {

	$by_name = $POST['by_name'];
	$by_gen = $POST['by_gen'];
	$by_dt = $POST['by_dt'];

	$search_query = "SELECT * FROM instructors WHERE";
	if($by_name !="") {
	  $search_query .= " name='$by_name'";
	}
	if($by_gen !="") {
	  $search_query .= " gen='$by_gen'";
	}
	if($by_dt !="") {
	  $search_query .= " dt='$by_dt'";
	}
	
	$search_query;
	$result = mysql_query($search_query);

	return $result;
}	
?>
 
<footer class="container-fluid text-center">
  <div>
    <h1>ODHP</h1>
    <h4>Oman Drive Helper Platform</h4>
  </div>
  <li><a href="aboutUs.html">About Us</a></li>
  <li><a href="mailto: omandhp@gmail.com">Contact</a></li>
  <li><a href="help.html">Help</a></li>
  <li>All copyrights &copy; are saved</li>
</footer>
<script>
  function newAccount() {
      window.location.href = "supdate.html";
      }
  </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="script/myScript.js"></script>
</body>
</html>