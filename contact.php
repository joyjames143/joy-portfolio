<?php

$name=$_REQUEST['name']
$companyname=$_REQUEST['companyname']
$name=$_REQUEST['name']
$subject=$_REQUEST['subject']


if (empty($name)|| empty($email) || empty($subject))
{
    echo "please fill the empty fields"
}
else
{
    mail("joyjames.work@gmail.com","message from portfolio",$subject,"From :$name<$email>");

    echo "<script type='text/javascript'>alert('your message is submited');

    window.history.log(-1)
    
    </script>";
}
?>