<?php
if(isset($_POST['sub'])){
$to   = 'bhullarbeejfarm@gmail.com';
$subject =  'Enquiry From http://www.bhullarbeejfarm.com website';
$message = '<b>Name=</b>' . $_POST['name'] . '<br/>; <b>Email :-</b>' . $_POST['email'] .'<br/><b>Message :-</b>' . $_POST['message'];
$headers  = "From: Enquery <".$_POST['email'].">\r\n";
       $headers = "MIME-Version: 1.0 <br/><br/> \r\n";
       $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
       // This two steps to help avoid spam
$headers .= 'From: '.$_POST['email']."\r\n".
'Reply-To: '.$_POST['email']."\r\n" .
'X-Mailer: PHP/' . phpversion();




//echo $to.'<br>'.$subject.'<br/>'.$message; die;

mail($to, $subject, $message, $headers);
header("location:http://www.zurisalon.in");
}?>