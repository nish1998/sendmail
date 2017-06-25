<?php
$to= 'nishantthakur.iit@gmail.com';
$subject= 'this is test email';
$body='hello saar.';

$header= 'From: nishantthegreat1@gmail.com';

if(mail($to, $subject, $body, $header)){
   echo 'mail sent';
}
else{
   echo 'error 123';
}

?>
