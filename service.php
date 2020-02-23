<?php
$host_name="localhost";
$user="root";
$password="";
$database_name="acweb";
$con=mysqli_connect($host_name,$user,$password,$database_name);
if(!$con)
	{
		echo"Something went to wrong";
	}
$name=$_POST["name"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$service=$_POST["service"];
$address=$_POST["address"];
$sql="INSERT into acwebtable(name,email,mobile,service,address)value('$name','$email','$mobile','$service','$address')";
if(mysqli_query($con,$sql))
{
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1 style="text-align: center;"> Thanks for join us</h1><br>
		<h2 style="text-align: center;">we will contact you shortly</h2>
		 <h3 style="text-align: center;">GO</h3><a style="text-align: center;" href="http://localhost/noorphpacweb/"><h3>Home</h3></a>
	</body>
	</html>

<?php
	$to_email = 'nalam9257@gmail.com';
	$subject = "test";
	$message = "check your data base ".$name." contact you mobile and email is ".$mobile." ".$email;
	//mail($to_email,$subject,$message);
	
	
}

?>