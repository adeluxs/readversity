<?php

    header("Access-Control-Allow-Origin: *");
    
    require 'connection.php';
    $_POST = json_decode(file_get_contents('php://input'), true);
    if (!empty($_POST["email"]) and !empty($_POST['password'])) {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $macaddress=$_POST['macaddress'];
        $operatingsystem=$_POST['operatingsystem'];
        
        $emails="cto@udersalon.com";
    
        $checkUser="SELECT * FROM oc_customer WHERE email='$email'";
        $check=mysqli_query($con, $checkUser);
    
        if (mysqli_num_rows($check)>0) {
            # code...
            $checkCreds = "SELECT * FROM oc_customer WHERE email='$email' AND password=SHA1(CONCAT(salt, SHA1(CONCAT(salt, SHA1('" . $password . "')))))";
            $checkCred=mysqli_query($con, $checkCreds);
    
            if (mysqli_num_rows($checkCred)>0 && ($row = mysqli_fetch_assoc($checkCred)) && ($row['withdrawaccess'] == 0) && ($row['reader_access'] == 1 || $row['macaddress'] == $macaddress)) {
                # code...
                $logss="User:".$email." with Password:".$password. " signed in with 1, but the macaddress: ". $macaddress. " and OS: ".$operatingsystem." failed to save at date: ". date("Y.m.d") ." ". date("h:i:s");
                file_put_contents('./logs/old/log_'.date("Y.m.d").'.txt', trim($logss).PHP_EOL, FILE_APPEND);
                $zero=0;
                $updateLoginaccess="UPDATE oc_customer SET reader_access = '$zero', macaddress = '$macaddress', operatingsystem = '$operatingsystem' WHERE email ='$email'";
                $updateLogin=mysqli_query($con, $updateLoginaccess);
                // $result = mysqli_query($con, $updateLoginaccess)or die("Edit Client Query Failed: " . mysql_error());
                // echo $result;

                
                
                // if(mysqli_query($con, $checkCreds)){
                //     echo 1;
                // }else{
                //     echo 0;
                // }
    
                if ($updateLogin) {
                    $data = array(
                        'email' => $email,
                        'password' => $password
                    );
                    $url = 'https://www.lockbook.org/api/v1/getpurchasedbooks.php';
                    $options = array(
                        'http' => array(
                            'header'  => "Content-type: application/json\r\n",
                            'method'  => 'POST',
                            'content' => json_encode($data),
                        ),
                    );
                    $context  = stream_context_create($options);
                    $result = file_get_contents($url, false, $context);
                    if ($result === false) {
                        $response['error'] = true;
                        $response['code'] = "500";
                        $response['message'] = "Error occurred while fetching purchased books";
                    } else {
                        $response['error'] = false;
                        $response['code'] = "200";
                        $response['message'] = "Login successful!";
                    }
                }
                else {
                    # code...
                    $logs="User:".$email." with Password:".$password. " signed in at 2, but the macaddress: ". $macaddress. " and OS: ".$operatingsystem." failed to save at date: ". date("Y.m.d") ." ". date("h:i:s");
                    file_put_contents('./logs/log_'.date("Y.m.d").'.txt', trim($logs).PHP_EOL , FILE_APPEND);
                    $response['error']=true;
                    $response['code']="500";
                    $response['message']="Credentials correct, but invalid login. Please try again!";
                    
                }
            }
            else{
                $response['error']=true;
                $response['code']="403";
                $response['message']="Incorrect password or you have exhausted your allowed number of devices, Please try again!";
            }
        }
        else{
            $response['error']=true;
            $response['code']="404";
            $response['message']="User with the email does not exist";
            $response['email']=$_POST['email'];
        }

    } else {  
        $response['error']=true;
        $response['code']="400";
        $response['message']="Email or Password missing.";
    }
    
    header("Content-Type: application/json");
    
    echo json_encode($response);
?>