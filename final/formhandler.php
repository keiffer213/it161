<?php

ob_start();

$name = '';
$email = '';
$subject = '';
$message = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(isset($_POST['name'],
$_POST['email'],
$_POST['subject'],
$_POST['message'])) {

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];



$to = 'keiffer.tan@gmail.com';
$subject = 'Test Email on ' .date('m/d/y, h i A');
$body = '
Name : '.$name.'  '.PHP_EOL.'
Email : '.$email.'  '.PHP_EOL.'
Subject : '.$subject.'  '.PHP_EOL.' 
message : '.$message.'  '.PHP_EOL.'
';

$headers = array(
'From' => 'noreply@mystudentswa.com'  
);

if(!empty($name && $email && $subject && $message)) {

mail($to, $subject, $body, $headers);
header('Location:thx.html');

}


}



}