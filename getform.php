<?php
if ( isset( $_POST['submit'] ) ) {
$fname=$_POST['fname'];
$email=$_POST['email'];
$title=$_POST['title'];
$message=$_POST['message'];

echo "Your name is " . $fname ."<br>" ; 
echo "Sender email is " . $email ."<br>" ; 
echo "Title of the message is " . $title ."<br>" ; 
echo  . $message ."<br>" ; 

}
?>