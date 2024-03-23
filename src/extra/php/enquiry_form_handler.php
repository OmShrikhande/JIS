<?php

error_reporting(0);

if ( ($_POST['name']!="") && ($_POST['email']!="")){
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$to = "mukeshbarapatre@sbjit.edu.in";
$subject = "Admission Enquiry";
$message = "<p> Enquiry Received From : ".$name. ", Mobile No : ". $phone. "</p>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: <".$email.">" . "\r\n";
$sent = mail($to,$subject,$message,$headers);
if($sent){
 echo "<span style='color:green; font-size:14px;'>Dear ".$name.
 " Thank you for contacting us, we will get back to you shortly.
 </span>";
}
else{
 echo "<span style='color:red; font-size:14px;'>Dear ".$name.
 " Sorry! Your form submission is failed. </span> <br>". 
 "<span style='font-size:14px;'>Kindly contact 8390701917.
 </span>";
 }
}
?>
