<?php

$data = [
	"status"=>200,
	"message"=>"allow",
    "version"=>1
];

    header("Content-Type: application/json");
    echo json_encode($data);
?>