
<?php
    // $today = date("Y-m-d H:i:s");   
    // echo $today;
    
    // $request = array(
    //         "user"=>"Ojsholly",
    //         "pass"=>"07041999",
    //         "from"=>"LockBook Li",
    //         "to"=>"2348074141143",
    //         "msg"=>"Hello Enoch, This is a test Message from Hollatags",
    // );
    
    // $url = 'https://sms.hollatags.com/api/send/'; //this is the url of the gateway's interface
    
    // $ch = curl_init(); //initialize curl handle
    // curl_setopt($ch, CURLOPT_URL, $url); //set the url
    // curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($request)); //set the POST variables
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //return as a variable
    // curl_setopt($ch, CURLOPT_POST, 1); //set POST method
    
    
    // $response = curl_exec($ch); // grab URL and pass it to the browser. Run the whole process and return the response
    // curl_close($ch); //close the curl handle
    
    // echo "Hhmm " . $response;
    
    // echo "It must have sent";




	include "config.php";
    $mysqli=new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    //date_default_timezone_set('Africa/Lagos'); //Note we are running an hr behind
	//$today = date("Y-m-d H:i:s");   
	//echo $today;
	//$yesterday = new DateTime('yesterday');
	//$yesterday = date("Y-m-d H:i:s", strtotime("-5 minutes")) ; 
	$yesterday = date("Y-m-d H:i", strtotime("-2 minutes")) ;
	//$newnote= readfile("/home2/lockbook/public_html/cron_sms.log");
	echo $yesterday;
	echo "\r\n ";
	echo "About to begin ";
	echo "\r\n ";
	$data= array();
    $query= mysqli_query($mysqli, "SELECT oc_order.firstname, oc_order.lastname, oc_order.total, oc_order.order_id, oc_order.date_added, oc_lts_vendor.vendor_id, oc_lts_product.product_id, oc_lts_vendor.store_owner, oc_lts_vendor.telephone, oc_lts_vendor.banner, oc_order_product.name FROM oc_order, oc_lts_vendor, oc_lts_product, oc_order_product WHERE DATE_FORMAT(oc_order.date_added, '%Y-%m-%d %H:%i') = '$yesterday'  AND  oc_order.order_id = oc_order_product.order_id AND oc_order_product.product_id= oc_lts_product.product_id AND oc_lts_product.vendor_id= oc_lts_vendor.vendor_id");
    
    $check= mysqli_num_rows($query);
    echo "This is the check: " . $check . "\n";
    if ($check==0)
    {
        echo "\r\n ";
        echo "\r\n ";
        echo "\r\n ";
    }
    if($query === FALSE) { 
        
        echo $query;
        echo $yesterday;
        die(mysql_error()); // TODO: better error handling
    }

    
    while ($row= mysqli_fetch_array($query))
    {
        //echo $query . "Works";
        echo $yesterday  . "Works";
        # code...
        $data[]=array(
            'firstname'=> $row['firstname'],
            'lastname'=> $row['lastname'],
            'total'=> $row['total'],
            'name'=> $row['name'],
            'order_id'=> $row['order_id'],
            'date_added'=> $row['date_added'],
            'vendor_id'=> $row['vendor_id'],
            'telephone'=> $row['telephone'],
            'product_id'=> $row['product_id'],
            'store_owner'=> $row['store_owner'],
            'banner'=> $row['banner'],
        );
        
        echo "Past date to check till:  " . $yesterday;
        echo "Time of purchase: " . $row['date_added'];
        echo "name of purchase: " . $row['firstname'];
        echo "lastname of purchase: " . $row['lastname'];
        echo "Store_owner: " . $row['store_owner'];
        
        echo "Got data, About to send Email";
        $request = array(
	        "user"=>user,
	        "pass"=>pass,
	        "from"=>"LockBookLTD",
	        "to"=>$row['telephone'],
	        "msg"=>"CONGRATULATIONS " . $row['store_owner'] . "!!! " . $row['firstname'] ." ". $row['lastname'] . " just purchased your Book- " . $row['name'] . " at the price of ". $row['total'] . ". Please visit https://www.lockbook.org/index.php?route=account/login for your total earning.",
		);

		$url = 'https://sms.hollatags.com/api/send/'; //this is the url of the gateway's interface

		$ch = curl_init(); //initialize curl handle
		curl_setopt($ch, CURLOPT_URL, $url); //set the url
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($request)); //set the POST variables
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //return as a variable
		curl_setopt($ch, CURLOPT_POST, 1); //set POST method


		$response = curl_exec($ch); // grab URL and pass it to the browser. Run the whole process and return the response
		curl_close($ch); //close the curl handle

		echo "Hhmm " . $response;

		$savelog= mysqli_query($mysqli, "INSERT INTO `lockbook_lockbook`.`sms` (`firstname`, `lastname`, `total`, `order_id`, `name`, `date_added`, `vendor_id`, `telephone`, `product_id`, `store_owner`, `banner`, `response`) VALUES ('$row[firstname]', '$row[lastname]', '$row[total]', '$row[order_id]', '$row[name]', '$row[date_added]', '$row[vendor_id]', '$row[telephone]', '$row[product_id]', '$row[store_owner]', '$row[banner]', '$response');
        ");
        $idcust=mysqli_insert_id($mysqli);

        if ($savelog)
        {
        	echo "DONE";
        	echo "\r\n ";
        	echo "\r\n ";
        	echo "\r\n ";
        }
    }
?>
