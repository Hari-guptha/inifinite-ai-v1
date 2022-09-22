	


<!DOCTYPE html>
<html>
<head>
<title>login system</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<h1 class="text-success">Enter Your Details </h1>
<form action="" method="POST">
<input style="width:240px;"type="text" name="username" class="form-control" placeholder="Enter Your Fullname" /> 
<input style="width:240px;"type="email" name="email" class="form-control " placeholder="Enter Your Email"/> 
<input style="width:240px;"type="password" name="pass" class="form-control " placeholder="Enter Your Password"/> 
<br>
<button name="submit" type="submit" class="btn btn-primary" >submit</button>
<?php
include_once 'dhex.php';
if(isset($_POST['submit']))	
{
$name=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['pass'];

$sql="INSERT INTO `userinfo`( `name`, `email`, `PASSWORD`) VALUES ('$name','$email','$pass');";
mysqli_query($connect,$sql);
}
?>
</form>



</body>
</html>

