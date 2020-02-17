<?php
 $to = "srinivasan.may99@gmail.com";
 $from = $_POST['t1'];
 $subject = "message";
 $message = $_POST['t3'];
 $headers = "From : $from";
 if(mail($to,$subject,$message,$headers))
 {
  echo "mail sent";
 }
 else
 {
  echo "not sent";
 }
 
 
 ?>