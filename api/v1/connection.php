<?php
    $hostName= "localhost";
    $userName='lockbook_israel';
    $userPass='Kehinde1.';
    $dbName='lockbook_lockbook';

    $con=mysqli_connect($hostName, $userName, $userPass, $dbName);

    if (!$con) {
        # code...
        // echo "Connection failed";

    }
    else {
        # code...
        // echo "Connection Success";
    }
?>