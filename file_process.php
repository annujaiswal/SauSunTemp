<?php


$name_error=$email_error=$phone_error=$urlerror="";
$name=$email=$phone=$url="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(empty($_POST["name"])){
		$name_error="Name is required";
	} else{
		$name=test_input($_POST["name"]);
		if(!preg_match("/^[a-zA-Z ]*$/",$name)){
			$name_error="Only letters and white space allowed";
		}
	}
	if(empty($_POST["email"])){
		$email_error="Email is required";
	} else{
		$email=test_input($_POST["email"]);
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$email_error="Invalid Email Format";
		}
	}
	if(empty($_POST["message"])){
		$message="";
	} else{
		$message=test_input($_POST["message"]);
		
	}
}
if ($name_error=="" and $email_error=="" and $phone_error=="" and urlerror=="") {
	$message_body="";
	unset($_POST as $key => $value){
		$message_body="$key: $value\n";
	}
	
}
function test_input($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}