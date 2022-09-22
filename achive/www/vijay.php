

<?php 
include_once 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>login system</title>
</head>
<body>
<form action="" method="POST">
<input type="text" name="username"/> 
<button name="submit" type="submit"  >submit</button>
<?php 
if(isset($_POST['submit']))
{$name=$_POST['username'];


$sql="select * from userinfo where name='$name';";
$result=mysqli_query($connect,$sql);
$resultcheck=mysqli_num_rows($result);
if($resultcheck>0)
{
while($row=mysqli_fetch_assoc($result))
{echo "<br>";
echo  "Your Email Id is : ".$row['email']."<br>";	
echo "Your Password is :  ".$row['PASSWORD']."<br>";
}
}
else
{
	echo "your info  wrong ";
	 
}
}

?>
</form>

<h1>This is a Heading</h1>

</body>
</html>

