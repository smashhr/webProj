<html>
    <head>
    <style>
        * {box-sizing: border-box}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px){
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}

        
</style>
</head>
<?php
session_start();
$un = $_POST['un'];
$pw = $_POST['pw'];

// Create connection
include ('getConnection.php'); 

//Prepare the query
$sql = "SELECT * from instructors where un = '$un' and pw = '$pw'";

//Execute the query
$result = $cn->query($sql);

//Check if there is one row, which means the login is OK
if ($row = $result->fetch_assoc()) 
{
    //Save the name into a session
    $_SESSION ['un'] = $row['un'];
    $_SESSION ['pw'] = $row['pw'];
    $_SESSION ['nam'] = $row['nam'];
    $_SESSION ['gen'] = $row['gen'];
    $_SESSION ['num'] = $row['num'];
    $_SESSION ['age'] = $row['age'];
    $_SESSION ['ex'] = $row['ex'];
    $_SESSION ['dt'] = $row['dt'];

   // echo '<body onLoad="alert(\'Welcom.. move to Home page\')">';
    //echo '<meta http-equiv="refresh" content="0;URL=index.html">';
}
 else
 {
    echo '<body onLoad="alert(\'can not update...\')">';
    echo '<meta http-equiv="refresh" content="0;URL=ubdat.php">';
 }
$cn->close();
?>
 
<body class="fontg bcolor">
<form action="update.php" method="POST" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    
    <label for="un"><b>User Name:</b></label>
    <input type="text" placeholder="Enter A User Name" name="un" value="<?php echo  $_SESSION ['un'] ?>" required>

    <label for="name"><b>Full Name:</b></label>
    <input type="text" placeholder="Enter Your Full Name" name="nam" value="<?php echo  $_SESSION ['nam'] ?>" required>

    <label for="pw"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="pw" value="<?php echo $_SESSION ['pw'] ?>" required>
      
    <label for="gen"><b>Gender:</b></label>
    <?php 
    if ($_SESSION ['gen']=="Male")
    {
    ?>
        <input type="radio" value="Male" name="gen" required>Male 
    <?php   
    }
    else
     { 
    ?>
    <input type="radio" value="Female" name="gen" required>Female
    <?php
     }
    ?>
    <hr>

    <label for="age"><b>Age:</b></label>
    <input type="number" placeholder="Enter Age" name="age" value="<?php echo  $_SESSION ['age'] ?>" required>
    <hr>
    
    <label for="num"><b>Phone Number:</b></label>
    <input type="text" placeholder="Enter Your Phone Number" name="num" value="<?php echo  $_SESSION ['num'] ?>" required>

    <label for="ex"><b>Experience:</b></label>
    <input type="text" placeholder="Enter Your Experience" name="ex" value="<?php echo  $_SESSION ['ex'] ?>" required>

    <label for="dt"><b>Drive Type:</b></label>
    <input type="text" placeholder="Enter Drive Type" name="dt" value="<?php echo  $_SESSION [ 'dt'] ?>" required>
    
    <br><br><br>
    
    

    <p>Updating your account <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn" onclick="goForward()" >Cancel</button>
      <button type="submit" class="signupbtn" onclick="newAccount()">Update</button>
    </div>
  </div>
</form>
<script>
  function newAccount() {
      alert("Thank you for  Updating");
      window.location.href = "update.php";
      }
  function goForward() {
      window.history.go(-1);
      }
      
  </script>
    </body>
    </html>