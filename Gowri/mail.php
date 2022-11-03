<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$sub= $_POST['sub'];
$message= $_POST['message'];
$to = "yvgowrishankar@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email .  "\r\n. Message =" . $message. "\r\n. Sub = " . $sub;
$headers = "From: noreplyjnfgroup.in/" . "\r\n" .
"CC: brahmamguru142@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>