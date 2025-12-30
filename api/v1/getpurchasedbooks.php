<?php

    header("Access-Control-Allow-Origin: *");
    
    require 'connection.php';
    require 'connectionlms.php';
    $_POST = json_decode(file_get_contents('php://input'), true);
    $email=$_POST['email'];
    if (isset($_POST['password'])) {
        $passkeyy = $_POST['password'];
    } else {
        $passkeyy = "dummy_password";
    }
    // $passkeyy=$_POST['password'];
    
    
    
    $checkBooks="SELECT `oc_order_product`.`product_id` AS productid, `oc_order_product`.`name` AS title, `oc_product`.`picture` AS image , `oc_product`.`url`, `oc_product`.`product_owner` AS author FROM `oc_order` INNER JOIN `oc_order_product` ON `oc_order`.`order_id`=`oc_order_product`.`order_id` JOIN `oc_product` ON `oc_order_product`.`product_id` = `oc_product`.`product_id` WHERE `email`= '$email' AND `order_status_id`=5";
    //echo $checkBooks;
    $check=mysqli_query($con, $checkBooks);

    if (mysqli_num_rows($check)>=0) {
        # code...
        while ($row=$check->fetch_assoc()) {
            # code...
            $response[]=$row;
            //$response['code']="200";
        }
        
        // Add a new row
        $newRow = [
            'productid' => '900',
            'title' => 'GEDS 200',
            'image' => 'https://dev.altarbell.com/css/alter/1042II147i849828OO0OOO44378B8/13837rghe1fuh27si0100o0oo898I/GEDS.jpg',
            'url' => 'https://dev.altarbell.com/css/alter/1042II147i849828OO0OOO44378B8/13837rghe1fuh27si0100o0oo898I/GEDS%20200.pdf',
            'author' => 'LockBook LTD',
        ];

        $newRows = [
            'productid' => '901',
            'title' => 'GEDS 280',
            'image' => 'https://dev.altarbell.com/css/alter/1042II147i849828OO0OOO44378B8/13837rghe1fuh27si0100o0oo898I/GEDS.jpg',
            'url' => 'https://dev.altarbell.com/css/alter/1042II147i849828OO0OOO44378B8/13837rghe1fuh27si0100o0oo898I/GEDS%20280.pdf',
            'author' => 'LockBook LTD',
        ];
        
        $newRowss = [
            'productid' => '902',
            'title' => 'GEDS 307',
            'image' => 'https://dev.altarbell.com/css/alter/1042II147i849828OO0OOO44378B8/13837rghe1fuh27si0100o0oo898I/GEDS.jpg',
            'url' => 'https://dev.altarbell.com/css/alter/1042II147i849828OO0OOO44378B8/13837rghe1fuh27si0100o0oo898I/GEDS%20307.pdf',
            'author' => 'LockBook LTD',
        ];
        
        $response[] = $newRow;
        $response[] = $newRows;
        $response[] = $newRowss;
        
        
        //Connection to LOCKBOOK LMS
        $getdetails="SELECT firstname, lastname, password, salt, withdrawaccess, telephone FROM `oc_customer` WHERE `email`= '$email'";
        $getdet=mysqli_query($con, $getdetails);
        if (mysqli_num_rows($getdet)>0) {
            while ($row=$getdet->fetch_assoc()) {
                $firstname=$row["firstname"];
                $lastname=$row["lastname"];
                $password=$row["password"];
                $salt=$row["salt"];
                $withdrawaccess=$row["withdrawaccess"];
                $telephone=$row["telephone"];
                $timee=date("Y-m-d h:i:s");
                //echo "New record created successfully";
                
                $lmsquery="INSERT INTO `savsoft_users` (password, email, first_name, last_name, contact_no, connection_key, gid, su, subscription_expired, inserted_by, verify_code, wp_user, registered_date, photo, user_status, web_token, android_token, skype_id, time_zone) VALUES ('" . MD5($passkeyy) . "', '$email', '$firstname', '$lastname', '$telephone', NULL, '10', '2', '1974306600', '0', '0', NULL, '$timee', NULL, 'Active', NULL, NULL, NULL, 'Asia/Kolkata')";
                //$getdet=mysqli_query($con, $getdetails);
                try {
                    if (mysqli_query($conn, $lmsquery)) {
                      //echo "New record created successfully";
                      $logss="User:".$email." with Password:".$password. " with First and Lastname of ".$firstname." and ".$lastname." tried registering SUCCESSFULLY at date: ". date("Y.m.d") ." ". date("h:i:s");
                      file_put_contents('./logs/old/log_ASlms.txt', trim($logss).PHP_EOL, FILE_APPEND);
                    } else {
                      //echo "Error: " . $lmsquery . "<br>" . $conn->error;
                      //$logss="User:".$email." with Password:".$password. " with First and Lastname of ".$firstname." and ".$lastname." tried registering FAILLED at date: ". date("Y.m.d") ." ". date("h:i:s"). ". Error: " . $lmsquery . "<br>" . $conn->error;
                      //file_put_contents('./logs/old/log_AFlms.txt', trim($logss).PHP_EOL, FILE_APPEND);
                    }
                }
                
                catch(Exception $e) {
                  //echo 'Message: Hi';
                  $logss="User:".$email." with Password:".$password. " with First and Lastname of ".$firstname." and ".$lastname." tried registering FAILLED at date: ". date("Y.m.d") ." ". date("h:i:s");
                  file_put_contents('./logs/old/log_AFlms.txt', trim($logss).PHP_EOL, FILE_APPEND);
                }
                
                
            }
        }
        

        
    }
    else{
        $response['error']=true;
        $response['code']="404";
        $response['message']="You have not purchased a book successfully yet, Please purchase a book at the store or contact our support at support@lockbook.org for help.";
        $response['email']=$_POST['email'];
        $response['check']=$check;
    }
    
    
    // $data = [
        
    //     [
    //         "productid"=>"100",
    //         "title"=>"ENHANCED CURRICULUM TO HEALTH PRINCIPLES",
    //         "author"=>"Public Health Dept, BU",
    //         "url"=>"https://www.lockbook.org/api/v1/books/book.pdf",
    //         "image"=>"https://www.lockbook.org/image/cache/catalog/product/Book/B9BF8013-A9CB-4A6D-9AE7-33DE5BC09466-600x770.png"
    //     ],

    //     [
    //         "productid"=>"101",
    //         "title"=>"Object Oriented Programming for software Engineering Sophomore",
    //         "author"=>"Adekola Bukola",
    //         "url"=>"https://www.lockbook.org/api/v1/books/CSSEWebsite.pdf",
    //         "image"=>"https://www.lockbook.org/image/cache/catalog/product/Book/22F279C3-90C8-4273-A113-0AB764911A63-600x770.png"
    //     ],

    //     [
    //         "productid"=>"102",
    //         "title"=>"Peace and Conflict Resolution",
    //         "Author"=>"Political Science Dept, BU",
    //         "url"=>"https://www.lockbook.org/api/v1/books/bowie-state.pdf",
    //         "image"=>"https://www.lockbook.org/image/cache/catalog/product/Book/Intro%20to%20Leadership%20Skills-600x770.png"
    //     ]
        
    // ];


    header("Content-Type: application/json");
    
    echo json_encode($response);
?>