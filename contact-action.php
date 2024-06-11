<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
   
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
	$message=$_POST['message'];
    
    
    $body='<p>Request project details</p><p>Name: '.$name.' </p><p>Phone: '.$phone.'</p><p>Email: '.$email.'</p><p>Message: '.$message.'</p>';
    
// print_r($_POST);
// exit();

      $to='omrana06@gmail.com';
   $headers = "MIME-Version: 1.0" . "\r\n";
   $headers .="Content-type: text/html\r\n";
    
    $headers .= 'From: <'.$email.'>' . "\r\n";
    //$headers .= 'Cc: omrana06@gmail.com' . "\r\n";
  
  if(mail('omrana06@gmail.com','Contact Us',$body,$headers))
    {
        //echo 'Mail sent';
        $_SESSION['info']="Your message is sent successfully. Thank You";
        header('Location:/');
        //exit();
    }
    else
    {
        $_SESSION['info']="Sorry try again...";
        //echo $errorMessage = error_get_last()['message'];
        header('Location:404.html');
        exit();
    }
}
