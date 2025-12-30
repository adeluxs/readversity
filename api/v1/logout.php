<?php

    header("Access-Control-Allow-Origin: *");
    
    require 'connection.php';
    $_POST = json_decode(file_get_contents('php://input'), true);
    $email=$_POST['email'];
    
    
    
    $giveAccess="UPDATE oc_customer SET reader_access = 1 WHERE email ='$email'";
    //echo $checkBooks;
    $check=mysqli_query($con, $giveAccess);

    if (mysqli_affected_rows($con) >= 0) {
        # code...
        $response['error']=false;
        $response['code']="200";
        $response['message']="logout successful!";
        
        
    }
    else {
        # code...
        $logs="User:".$email." tried logging out, but it failed to save at date: ". date("Y.m.d") ." ". date("h:i:s");
        file_put_contents('./logs/logout/log_'.date("Y.m.d").'.txt', trim($logs).PHP_EOL , FILE_APPEND);
        $response['error']=true;
        $response['code']="500";
        $response['message']="Error logging out!";
        
    }

    header("Content-Type: application/json");
    
    echo json_encode($response);
?>