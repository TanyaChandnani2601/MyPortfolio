<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
// $phoneno= $_POST['phoneno'];
// $city = $_POST['city'];
// $school_name = $_POST['school_name'];

$to = "tanya.r.chandnani@gmail.com";

$subject = "Form submission from CyBoard LMS";
$txt ="Name = ". $name . "\r\n  Email = " . $email;

$headers = "From: noreply@cyboardlms.com";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

header("Location: index.html");

?>
