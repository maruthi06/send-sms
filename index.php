<?php
    include('way2sms-api.php');
    $uid = $_GET['uid'];
    $pwd = $_GET['pwd'];
    $mobile = $_GET['mobile'];
    $message = $_GET['message'];
    sendWay2SMS ($uid, $pwd, $mobile , $message);
?>