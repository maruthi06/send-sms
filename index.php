<?php
    include('way2sms-api.php');
    
    if(!isset($_GET['uid']) || !isset($_GET['pwd']) || !isset($_GET['mobile']) || !isset($_GET['message'])){
        echo "<h4>Enter username / password of Way2Sms<br> And Message and mobile number to send Message</h4>";
        echo "<h4>Url Pttern https://send-sms-way2sms.herokuapp.com/?uid=USERNAME&pwd=PASSWORD&mobile=MOBILENUMBER&message=MESSAGE</h4>";
    } else {
        $uid = $_GET['uid'];
        $pwd = $_GET['pwd'];
        $mobile = $_GET['mobile'];
        $message = $_GET['message'];
        sendWay2SMS ($uid, $pwd, $mobile , $message);
        echo "message sent";
    }
?>
