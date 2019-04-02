<?php
if(isset($_POST['submit'])){
$to   	 = 'rahulverma870@gmail.com';
$subject =  'Enquiry From http://www.musicgaana.com website';
$message = '<b>Name=</b>' . $_POST['nm'] . '<br/>; <b>Email :-</b>' . $_POST['email'] .'<br/><b>Phone :-</b>' . $_POST['phn'] .'<br/>Course:'.$_REQUEST['type'].'<br/>Msg:-' . $_REQUEST['msg'];
$headers  = "From: Enquery <".$_POST['email'].">\r\n";
       $headers = "MIME-Version: 1.0 <br/><br/> \r\n";
       $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
       // This two steps to help avoid spam
$headers .= 'From: '.$_POST['email']."\r\n".
'Reply-To: '.$_POST['email']."\r\n" .
'X-Mailer: PHP/' . phpversion();




//echo $to.'<br>'.$subject.'<br/>'.$message; die;

mail($to, $subject, $message, $headers);
header("location:http://www.musicgaana.com");
}?>