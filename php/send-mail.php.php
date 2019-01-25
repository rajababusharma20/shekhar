<?php
	if(isset($_POST['sendenq']))
	{
		$name=$_POST['name'];
		$mobileno=$_POST['phone'];
		$email=$_POST['email'];
		$mess=$_POST['mess'];
		
		$to = "rajababusharma20@gmail.com ";
		$subject = "Boarding Pass";
		$message = " Name: " . $name ."\r\n Mobile No: " . $mobileno . "\r\n Address: " . $email."\r\n Message: " . $mess;
		
		$from = $email;
		$headers = "From:" . $from . "\r\n";
		$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
		
		
		if(@mail($to,$subject,$message,$headers))
		{
			echo "<script>alert('Your Message was sent successfully !')</script>";
			echo "<script>window.location='$_SERVER[HTTP_REFERER]'</script>";
		}
		else
		{
			echo "<script>alert('Error! Please try again.')</script>";	
			echo "<script>window.history.back()</script>";
		}
	}
?>