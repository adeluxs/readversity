<?php
    $hostName= "132.145.25.224"; // old linode nqb8 server "176.58.122.103";
    $userName='root';
    $userPass='34L0HSSdUL2LCNg61..2';
    $dbName='lb_savs241';
    
    // $hostName= "localhost";
    // $userName='lockbook_israel';
    // $userPass='Kehinde1.';
    // $dbName='lockbook_savs241';

    $conn=mysqli_connect($hostName, $userName, $userPass, $dbName);

    if (!$conn) {
        # code...
        // echo "Connection failed";

    }
    else {
        # code...
        // echo "Connection Success";
    }
?>