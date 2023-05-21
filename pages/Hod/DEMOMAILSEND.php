<?php
$to = "nehagolhar10@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$sender = "From: ganesh.golhar35@gmail.com";


// mail($to,$subject,$txt,$sender);

if(mail($to,$subject,$txt,$sender)){
    echo "send email";
}

?>