<?php
$name = $_REQUEST['name'];
$email = $_REQUESt['email'];
$_message = $_REQUEST['message'];
if (empty($name) || empty($email) || empty($message))
{
    echo"please fill all required fields";
}
else
{
    mail("hammadbashir850@gmail.com",webtech,$message,"from: $name <$email>");
    echo"<script type='text/javqascript'>alert('your message send successfully')</script>;
}
?>