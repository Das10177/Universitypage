<?php
$name= $_post['name'];
$visitor_email=$_post['email'];
$sbject = $_post['Subject'];
$message= $_post['Message'];
 
$email_from ='it Website Email id';
$email_Subject='New From Submission';
$email_body="user Name:$name.\n".
"user Email:$visitor_email.\n".
"user Email:$visitor_email.\n".
"user Email:$visitor_email.\n";


$to='sfafafs@gmail.com';
$headers="From:$email_from\r\n";
$headers.= "reply-To: $visitor_email\r\n";
mail($to,$email_Subject,$email_body,$headers);
header("loaction:contact.html");
exit();