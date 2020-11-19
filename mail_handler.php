<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];
		$fathername=$_POST['fathername'];
		$fatherphone=$_POST['fatherphone'];
		$fatherjob=$_POST['fatherjob'];

		$mothername=$_POST['mothername'];
		$motherphone=$_POST['motherphone'];
		$motherjob=$_POST['motherjob'];

		$siblingname1=$_POST['siblingname1'];
		$siblingage1=$_POST['siblingage1'];
		$siblingname2=$_POST['siblingname2'];
		$siblingage2=$_POST['siblingage2'];

		$to='fazalulabid007@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Registration Form';
		$message="Name :".$name."\n"."Date of Birth :".$dob."\n"."Gender :".$gender."\n"."Email :".$email."\n"."Father Name :".$fathername."\n"."Father's Phone :".$fatherphone."\n"."Father Occupation :".$fatherjob."\n"."Mother Name :".$mothername."\n"."Mother's Phone :".$motherphone."\n"."Mother Occupation :".$motherjob."\n"."Sibling 1 Name:".$siblingname1."\n"."Sibling 1 Age :".$siblingage1."\n"."Sibling 2 Name :".$siblingname2."\n"."Sibling 2 Age :".$siblingage2."\n";
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>