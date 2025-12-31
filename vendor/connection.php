<?php
    $hostName= "localhost";
    $userName='lockbook_israel';
    $userPass='Kehinde1.';
    $dbName='lockbook_lockbook';

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