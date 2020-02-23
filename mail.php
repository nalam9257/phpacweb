<?php 
$name=$_POST['firstname'];
$email=$_POST['email'];  
$city=$_POST['city'];
$mssg=$_POST['subject'];  
$to_email = 'nalam9257@gmail.com';
$subject = "test";
$message = $mssg;
$headers = $email;
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
try
	{
		if (mail($to_email,$subject,$message))
		{
			 ?>
			 	<h1 style="text-align: center;"> Thanks for join us</h1><br>
				<h2 style="text-align: center;">we will contact you shortly</h2>
		 		<h3 style="text-align: center;">GO</h3><a style="text-align: center;" href="http://localhost/noorphpacweb/">
		 			<h3>Home</h3></a>
		 	<?php
		}
		throw new Exception("SOMETHING WENT TO WRONG");
	}
catch(Exception $e)
	{
		echo $e->getMessage();
	}


?>
<h3 style="text-align: center;">GO</h3><a style="text-align: center;" href="http://localhost/noorphpacweb/">
		 			<h3>Home</h3></a>