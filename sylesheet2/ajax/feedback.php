<?php
$name =htmlspecialchars($_POST['name']);
$email =htmlspecialchars($_POST['email']);
$subject =htmlspecialchars($_POST['subject']);
$message =htmlspecialchars($_POST['message']);
 if($name == '' || $email == '' || $subject == '' ||$message == ''){
     echo 'Заполните все паля';
     exit;
 }
 //отправка
$subject = "=?utf-8?B?".base64_decode($subject)."?=";
 $headers="from: $email/r/nRopty-to:$email/r/nContent-type:text/html; caeset=utf-8/r/n";
 if(mail("kiler.deientor@mail.ru",$subject,$message,$headers))
     echo "Соощение отправлино";
 else
     echo "Соощение не отправлино";
?>