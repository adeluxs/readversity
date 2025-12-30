<?php

$data = [
	"status"=>200,
	"message"=>"allow",
    "version"=>"2.0.0",
	"appname"=>"LockBook Reader",
    "newbooks"=>[
            [
                "id"=>"1",
                "title"=>"Footprints Of Grace",
                "Author"=>"Prof Samuel E. Alao",
                "buy"=>"https://www.lockbook.org/index.php?route=product/product&product_id=156",
                "image"=>"https://www.lockbook.org/api/v1/images/footprintsofgrace.jpg"
            ],
            
            [
                "id"=>"3",
                "title"=>"Health Principles Enhanced Curriculum",
                "Author"=>"Public Health Dept, BU",
                "buy"=>"https://www.lockbook.org/index.php?route=product/product&product_id=135",
                "image"=>"https://www.lockbook.org/api/v1/images/healthprinciples.png"
            ],

            [
                "id"=>"2",
                "title"=>"Object Oriented Programming for software Engineering Sophomore",
                "Author"=>"Adekola Bukola",
                "buy"=>"https://www.lockbook.org/index.php?route=product/product&product_id=149",
                "image"=>"https://www.lockbook.org/image/cache/catalog/product/Book/22F279C3-90C8-4273-A113-0AB764911A63-600x770.png"
            ],

            [
                "id"=>"4",
                "title"=>"Peace and Conflict Resolution",
                "Author"=>"Political Science Dept, BU",
                "buy"=>"https://www.lockbook.org/index.php?route=product/product&product_id=146",
                "image"=>"https://www.lockbook.org/image/cache/catalog/product/Book/Intro%20to%20Leadership%20Skills-600x770.png"
            ],

            [
                "id"=>"5",
                "title"=>"Introduction to Leadership Skills",
                "Author"=>"Political Science Dept, BU",
                "buy"=>"https://www.lockbook.org/index.php?route=product/product&product_id=145",
                "image"=>"https://www.lockbook.org/image/cache/catalog/product/Book/E99AE46D-6742-4A2B-8F07-1C792F3DCCF5-600x770.png"
            ],

            [
                "id"=>"6",
                "title"=>"Introduction to General Agriculture",
                "Author"=>"Agric Science Dept, BU",
                "buy"=>"https://www.lockbook.org/index.php?route=product/product&product_id=148",
                "image"=>"https://www.lockbook.org/image/cache/catalog/product/Book/25DE5EC0-5E13-4E61-9503-D104DB5A851A-600x770.png"
            ],

            [
                "id"=>"7",
                "title"=>"Inspired to Success-Graduating with a First class",
                "Author"=>"Oluwaseyi Olayemi",
                "buy"=>"https://www.lockbook.org/index.php?route=product/product&product_id=151",
                "image"=>"https://www.lockbook.org/image/cache/catalog/product/Book/76576243-6B94-442E-9A1E-60F9A6C281DA-600x770.png"
            ],

            [
                "id"=>"8",
                "title"=>"Inspired to Success-Graduating with a First class",
                "Author"=>"Oluwaseyi Olayemi",
                "buy"=>"https://www.lockbook.org/index.php?route=product/product&product_id=151",
                "image"=>"https://www.lockbook.org/image/cache/catalog/product/Book/76576243-6B94-442E-9A1E-60F9A6C281DA-600x770.png"
            ],

            [
                "id"=>"9",
                "title"=>"Omoladun",
                "Author"=>"Fatade Adeboye",
                "buy"=>"https://www.lockbook.org/index.php?route=product/product&product_id=153",
                "image"=>"https://www.lockbook.org/image/cache/catalog/product/Book/C40DC01C-04AE-4B2B-B872-046A428749B2-600x770.png"
            ]
        ],
	"message"=>"allow",
    "status"=>true,
	"lcpssl"=>"https://lcp.lockbook.com.ng",
    "lsdssl"=>"https://lsd.lockbook.com.ng",
	"frontendssl"=>"https://frontend.lockbook.com.ng",
    "lcp"=>"http://lockbook.com.ng:8989",
	"lsd"=>"http://lockbook.com.ng:8990",
    "frontend"=>"http://lockbook.com.ng:8991"
];

    header("Content-Type: application/json");
    echo json_encode($data);
?>