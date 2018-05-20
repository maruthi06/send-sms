<?php
    include('way2sms-api.php');
    $mobile = $_GET['mobile'];
    $message = $_GET['message'];
    sendWay2SMS ( $mobile , $message);
?>