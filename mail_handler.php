
<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$dob=$_POST['dob'];
		$gender=$_POST['sex'];
		// echo $gender;
		
		$age=$_POST['age'];
		$grade=$_POST['grade'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$alterphone=$_POST['alterphone'];
		$currentlevel=$_POST['currentlevel'];
		$place=$_POST['place'];
		$country=$_POST['country'];
		$parentname=$_POST['parentname'];		

		$parentphone=$_POST['parentphone'];
		$parentjob=$_POST['parentjob'];
		$siblingname1=$_POST['siblingname1'];
		$siblingage1=$_POST['siblingage1'];
		$siblingname2=$_POST['siblingname2'];
		$siblingage2=$_POST['siblingage2'];
		
		
		
		$Vadic=false;
		$Abacus=false;
		$Personal=false;
		$Handwriting=false;	


			
		
		
		if(isset($_POST["Vadic"]))
       {
           $Vadic=TRUE; 
            $Vadic = $_POST['Vadic'];
           
       }
          
       if(isset($_POST["Abacus"]))
        {
            $Abacus=TRUE;
             $Abacus =  $_POST['Abacus']; 
            
        }
       if(isset($_POST["Personal"]))
        {
            $Personal=TRUE;
             $Personal =  $_POST['Personal'];
        }
		if(isset($_POST["Handwriting"]))
        {
            $Handwriting=TRUE;
             $Handwriting =  $_POST['Handwriting'];
        }
    
        $course = $Vadic." | ".$Abacus." | ".$Personal." | ".$Handwriting;

        $to='fazalulabid007@gmail.com'; 
        $subject='Registration Form';
        $message="Name :".$name."\n"."Date of Birth :".$dob."\n"."Gender :".$gender."\n"."Age :".$age."\n"."Grade :".$grade."\n"."Email :".$email."\n"."Phone Number :".$phone."\n"."Phone Number (Optional):".$alterphone."\n"."Current Level (Existing Students Only):".$currentlevel."\n"."Place :".$place."\n"."Country :".$country."\n"."Course :".$course."\n"."Parent Name :".$parentname."\n"."Parent's Phone :".$parentphone."\n"."Parent's Occupation :".$parentjob."\n"."Sibling 1 Name:".$siblingname1."\n"."Sibling 1 Age :".$siblingage1."\n"."Sibling 2 Name :".$siblingname2."\n"."Sibling 2 Age :".$siblingage2."\n";
        $headers="From: ".$email;
    
        if(mail($to, $subject, $message, $headers)){
          echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
        }
        else{
          echo "Something went wrong!";
        }



		

		
	}
?>
