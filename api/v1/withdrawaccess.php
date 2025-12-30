<?php

    header("Access-Control-Allow-Origin: *");
    
    require 'connection.php';
    $_POST = json_decode(file_get_contents('php://input'), true);
    $email=$_POST['email'];
    
    
    
    $checkAccess="SELECT withdrawaccess, email FROM `oc_customer` WHERE email= '$email' AND `withdrawaccess`=1";
    //echo $checkBooks;
    $check=mysqli_query($con, $checkAccess);

    if (mysqli_num_rows($check)>0) {
        # code...
        while ($row=$check->fetch_assoc()) {
            # code...
            $response[]=$row;
        }

        
    }
    else{
        $response['error']=true;
        $response['code']="404";
        $response['message']="The users access has not been withdrawn.";
        $response['email']=$_POST['email'];
        $response['check']=$check;
    }
    

    header("Content-Type: application/json");
    
    echo json_encode($response);
?>