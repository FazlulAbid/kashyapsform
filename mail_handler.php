<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		$age=$_POST['age'];
		$grade=$_POST['grade'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$place=$_POST['place'];
		$country=$_POST['country'];
		$course=$_POST['course'];

		$fathername=$_POST['fathername'];		
		$mothername=$_POST['mothername'];

		$parentphone=$_POST['fatherphone'];
		$parentjob=$_POST['fatherjob'];



		$siblingname1=$_POST['siblingname1'];
		$siblingage1=$_POST['siblingage1'];
		$siblingname2=$_POST['siblingname2'];
		$siblingage2=$_POST['siblingage2'];

		$to='fazalulabid007@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Registration Form';
		$message="Name :".$name."\n"."Date of Birth :".$dob."\n"."Gender :".$gender."\n"."Age :".$age."\n"."Grade :".$grade."\n"."Email :".$email."\n"."Phone Number :".$phone."\n"."Place :".$place."\n"."Country :".$country."\n"."Course :".$course."\n"."Father Name :".$fathername."\n"."Mother Name :".$mothername."\n"."Parent's Phone :".$parentphone."\n"."Parent's Occupation :".$parentjob."\n"."Sibling 1 Name:".$siblingname1."\n"."Sibling 1 Age :".$siblingage1."\n"."Sibling 2 Name :".$siblingname2."\n"."Sibling 2 Age :".$siblingage2."\n";
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>
