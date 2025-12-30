<?php

// // Start session to access session variables
// session_start();

// // Check if the user is authenticated in OpenCart Admin
// if (!isset($_COOKIE['nopassword'])) {
//     // User is not authenticated, redirect to login page or display error message
//     header("Location: https://www.lockbook.org/admin");
//     exit; // Stop further execution of the script
// }

// Check if form is submitted
$message="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // echo "Sorry, your file is too large.";
    // Check if all required fields are filled
    if (isset($_POST['product_id']) && isset($_POST['author']) && isset($_POST['image_link']) && isset($_FILES['pdf_file']) && isset($_POST['url'])) {
        // // Process file upload
        // $target_directory = "/var/www/dev.altarbell.com/public/css/lb/10124q4000o0001ii11/" . date('YmdHis') . "/";
        // $target_file = $target_directory . basename($_FILES["pdf_file"]["name"]);
        // $uploadOk = 1;
        // $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
        // // Check file size
        // if ($_FILES["pdf_file"]["size"] > 5000000) {
        //     echo "Sorry, your file is too large.";
        //     $uploadOk = 0;
        // }
        
        // // Allow certain file formats
        // if($imageFileType != "pdf") {
        //     echo "Sorry, only PDF files are allowed.";
        //     $uploadOk = 0;
        // }
        
        // // FTP server settings
        // $ftp_server = "176.58.122.103";
        // $ftp_username = "altarbell";
        // $ftp_password = "Chicken1@AlterBell";
        // $remote_directory = '/var/www/dev.altarbell.com/public/';

        // // Connect to FTP server
        // $ftp_conn = ftp_connect($ftp_server);
        // echo "Here is the conn ". $ftp_conn;
        // $login = ftp_login($ftp_conn, $ftp_username, $ftp_password);
        
        // // Check connection
        // if (!$ftp_conn || !$login) {
        //     echo "FTP connection failed!";
        //     $uploadOk = 0;
        // } else {
            // // Upload file to FTP server
            // if($uploadOk == 0){
            //     echo "Error with the PDF.";
            // }
            // else if (ftp_put($ftp_conn, $remote_directory . basename($_FILES["pdf_file"]["name"]), $_FILES["pdf_file"]["tmp_name"], FTP_BINARY)) {
                // File uploaded successfully, update database
                $product_id = $_POST['product_id'];
                $author = $_POST['author'];
                $image_link = $_POST['image_link'];
                $url = $_POST['url'];

                // Perform SQL query to update database
                // Example: UPDATE oc_product SET url = '$target_file', author = '$author', image = '$image_link' WHERE product_id = $product_id
                
                // Perform SQL query to update database
                $servername = "localhost";
                $username = "lockbook_israel";
                $password = "Kehinde1.";
                $dbname = "lockbook_lockbook";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Prepare SQL statement
                $sql = "UPDATE oc_product SET url = '$url', product_owner = '$author', picture = '$image_link' WHERE product_id = $product_id";

                // Execute SQL statement
                if ($conn->query($sql) === TRUE) {
                    // echo "Record updated successfully.";
                    $message = "Record updated successfully.";
                } else {
                    // echo "Error updating record: " . $conn->error;
                    $message = "Error updating record: " . $conn->error;
                }

                // // Close connection
                // $conn->close();

                echo "The file " . htmlspecialchars(basename($_FILES["pdf_file"]["name"])) . " has been uploaded.";
            } else {
                // echo "Sorry, there was an error uploading your file.";
                $message = "Sorry, there was an error uploading your file.";
            }

        //     // Close FTP connection
        //     ftp_close($ftp_conn);
        // }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Publish Book</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 20px;
                background-color: #f8f9fa;
                background-image: url('https://themetamodernist.files.wordpress.com/2017/12/library-wallpaper-50371-52062-hd-wallpapers.jpg');
            }
            .container {
                max-width: 600px;
                margin: 0 auto;
                background-color: #fff;
                border-radius: 8px;
                padding: 20px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            h2 {
                margin-top: 0;
                color: #007bff;
            }
            label {
                display: block;
                margin-bottom: 5px;
                color: #333;
            }
            input[type="text"], input[type="file"], select {
                width: 100%;
                padding: 8px;
                margin-bottom: 10px;
                box-sizing: border-box;
                border: 1px solid #ced4da;
                border-radius: 4px;
            }
            input[type="file"] {
                margin-bottom: 20px;
            }
            button[type="submit"] {
                padding: 10px 20px;
                background-color: #007bff;
                color: #fff;
                border: none;
                cursor: pointer;
                border-radius: 4px;
                transition: background-color 0.3s ease;
            }
            button[type="submit"]:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        
        <div class="container">
            <img style="margin-left: auto; display: block; margin-right: auto; height:150px; margin-bottom: 10px" src="https://www.lockbook.org/lockbook.jpeg">
            <h2>Publish Book</h2>
            <form id="upload_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="step_one"><span style="color:#007bff; font-weight:bold;">Step 1: </span>Publish the book as a product on the Admin Site</label>
                </div>
                <br>
                <div class="form-group">
                    <label for="product_id"><span style="color:#007bff; font-weight:bold;">Step 2: </span>Select the Book from the Drop Down:</label>
                    <select id="product_id" name="product_id">
                        <!-- Populate dropdown with products from OpenCart -->
                        <option value=""></option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="pdf_file"><span style="color:#007bff; font-weight:bold;">Step 3: </span>Browse and Select the PDF to be published:</label>
                    <input type="file" id="pdf_file" name="pdf_file">
                    <input type="hidden" id="url" name="url">
                </div>
                <br>
                <div class="form-group">
                    <label for="image_link"><span style="color:#007bff; font-weight:bold;">Step 4: </span>Link of Book Image:</label>
                    <!--<input type="text" id="image_link" placeholder="https://www.lockbook.org/image/health-principles.png" name="image_link"> -->
                    <input type="text" id="image_link" placeholder="i.e copy the link of the product image from lockbook.org" name="image_link">
                </div>
                <br>
                <div class="form-group">
                    <label for="author"><span style="color:#007bff; font-weight:bold;">Step 5: </span>Author of Book:</label>
                    <input type="text" id="author" placeholder="Prof AkinBoye Nwanburuka" name="author">
                </div>
                <br>
                <div class="form-group">
                    <button type="submit">Submit</button>
                </div>
            </form>
            <br>
            <h3><?php echo $message; ?></h3>
        </div>
        <script>
            // Function to fetch products and populate the dropdown
            function fetchProducts() {
                let xhr = new XMLHttpRequest();
                xhr.open('GET', 'get_products.php', true);
                xhr.onload = function () {
                    if (xhr.status === 200) {
                        let products = JSON.parse(xhr.responseText);
                        let productDropdown = document.getElementById('product_id');
                        // Clear existing options
                        productDropdown.innerHTML = '';
                        // Add new options
                        products.forEach(function (product) {
                            let option = document.createElement('option');
                            option.value = product.product_id;
                            option.text = product.product_name;
                            productDropdown.appendChild(option);
                        });
                    } else {
                        alert('Failed to fetch products. Please try again later.');
                    }
                };
                xhr.send();
            }
            
            
            window.addEventListener("DOMContentLoaded", (event) => {
                const url = "https://api.cloudinary.com/v1_1/dezti7ski/upload"; // Replace with your Cloudinary upload URL
                const form = document.getElementById("upload_form");
                let bookurl = document.getElementById("url");
            
                form.addEventListener("submit", (e) => {
                    e.preventDefault();
                    const files = document.getElementById("pdf_file").files;
                    const formData = new FormData();
                    for (let i = 0; i < files.length; i++) {
                        let file = files[i];
                        formData.append("file", file);
                        formData.append("upload_preset", "lockbook"); // Replace with your Cloudinary unsigned preset
            
                        fetch(url, {
                            method: "POST",
                            body: formData
                        })
                        .then((response) => {
                            return response.json();
                        })
                        .then((data) => {
                            // Handle response data
                            console.log("Uploaded PDF URL:", data.secure_url);
                            bookurl.value=data.secure_url;
                            document.getElementById("upload_form").submit();
                            // Update database with the uploaded PDF link using AJAX or fetch
                            // Example:
                            // fetch("update_database.php", {
                            //     method: "POST",
                            //     body: JSON.stringify({ pdf_url: data.secure_url }),
                            //     headers: {
                            //         "Content-Type": "application/json"
                            //     }
                            // })
                            // .then((response) => response.json())
                            // .then((data) => {
                            //     console.log("Database updated:", data);
                            // })
                            // .catch((error) => {
                            //     console.error("Error updating database:", error);
                            // });
                        })
                        .catch((error) => {
                            console.error("Error uploading file:", error);
                        });
                    }
                });
            });
            
    
            // Call fetchProducts function when the page loads
            window.onload = function () {
                fetchProducts();
            };
        </script>
    </body>
</html>