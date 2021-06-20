<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$text = $_POST['text'];
// $phoneno= $_POST['phoneno'];
// $city = $_POST['city'];
// $school_name = $_POST['school_name'];

$to = "tanya.r.chandnani@gmail.com";

$subject = "Form submission from my Portfolio";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Text = " . $text;

$headers = "From: myportfolio@lala.com";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
echo '<script>alert("Submitted")</script>';
header("Location: index.html");


?>
