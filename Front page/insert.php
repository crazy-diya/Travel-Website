<?php 
	$dd=mysqli_connect("Localhost","root","","infomation") or die("Not Connected");

	if (isset($_POST["submit"])) {
		$nm=$_POST["nm"];
		$eml=$_POST["email"];
		$mes=$_POST["message"];
		
		$query="INSERT into details (Name,Email,Message) values ('$nm','$eml','$mes')";

		$check=mysqli_query($dd,$query);
		if ($check) {
			echo "Connected";
		} 
		else{
			echo "Not Connected";
		}

		$to = "dimuthulakshan2012@gmail.com";
		$headers = "From: .$eml";
		$subject = "Email Submition";
		$email_body = "Haaaa";

		if(mail($to,$subject,$message,$headers)){
			header("Location: Front.html");
			
			echo "Connect";
		}
		else{
			echo "Dissconnest";
		}
		
	}
 ?>