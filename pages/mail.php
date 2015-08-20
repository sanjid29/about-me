

<?php
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$contact=$_POST['telephone'];
$message= $_POST['message'];
$header= 'From: '.$email. "\r\n"."Name : ".$name. "\r\n"."Contact Number :" .$contact;
if ((empty($_POST["name"])) || (empty($_POST["email"])) || (empty($_POST["subject"])) ||(empty($_POST["telephone"])) || (empty($_POST["message"]) ))
{

	$var_value= "Please Fill Up The Whole Form";
	$_SESSION['varname'] = $var_value;
	$_SESSION['var']='1'; 
 	header('Location: http://practice.stage0615.activationltd.com/main?id=contactme');

}
else
{
	if (!filter_var($email,FILTER_VALIDATE_EMAIL)==false) 
	{
		if(mail("sanjid.habib@gmail.com",$subject,$message,$header))
		{
	
			$var_value= "Your Mail is sent to <br /> Sanjid Habib <br/> Thank You ";
			$_SESSION['varname'] = $var_value;
			$_SESSION['var']='1'; 
		 	header('Location: http://practice.stage0615.activationltd.com/?id=contactme');
		 	
 		}
 		else
 		{
			$var_value= "Mail Sending Failed ";
			$_SESSION['var']='1'; 
			 $_SESSION['varname'] = $var_value;
			
		 	header('Location: http://practice.stage0615.activationltd.com/?id=contactme');
 	
		} 
	}
	else
	{
		 $var_value= "Invalid Email Format. <br/> Please Give a correct Mail Address.";
		 $_SESSION['varname'] = $var_value;
		 $_SESSION['var']='1'; 
		
	 	header('Location: http://practice.stage0615.activationltd.com/?id=contactme');
	}
}

?>