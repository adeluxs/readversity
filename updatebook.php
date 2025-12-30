<?php
// Start session to access session variables
session_start();

/* Check if the user is authenticated in OpenCart Admin
if (!isset($_COOKIE['nopassword'])) {
    header("Location: https://www.lockbook.org/admin");
    exit;
}
*/
$message = "";

// Database connection
$servername = "localhost";
$username = "lockbook_israel";
$password = "Kehinde1.";
$dbname = "lockbook_lockbook";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch dashboard statistics
$query1 = "SELECT COUNT(*) AS total FROM oc_product WHERE shipping = 0 AND url = ''";
$query2 = "SELECT COUNT(*) AS total FROM oc_product WHERE shipping = 0";
$query3 = "SELECT COUNT(*) AS total FROM oc_product WHERE shipping = 0 AND url != ''";
// $query4 = "SELECT COUNT(*) AS total FROM oc_product WHERE shipping = 0 AND url != '' AND name LIKE '%study set%'";
// $query5 = "SELECT COUNT(*) AS total FROM oc_product WHERE shipping = 0 AND url = '' AND name LIKE '%study set%'";

$total_no_file = $conn->query($query1)->fetch_assoc()["total"];
$total_no_shipping = $conn->query($query2)->fetch_assoc()["total"];
$total_with_file = $conn->query($query3)->fetch_assoc()["total"];
// $total_studyset_with_file = $conn->query($query4)->fetch_assoc()["total"];
// $total_studyset_no_file = $conn->query($query5)->fetch_assoc()["total"];

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['product_id'], $_POST['author'], $_POST['image_link'], $_POST['url'])) {
        $product_id = $_POST['product_id'];
        $author = $_POST['author'];
        $image_link = $_POST['image_link'];
        $url = $_POST['url'];
        
        $sql = "UPDATE oc_product SET url = '$url', product_owner = '$author', picture = '$image_link' WHERE product_id = $product_id";
        
        if ($conn->query($sql) === TRUE) {
            $message = "Your book has been published successfully!";
            $type = "success";
        } else {
            $message = "Error uploading book: something went wrong! " . $conn->error;
            $type = "error";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Book</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f8f9fa; padding: 20px; background-image: url('https://themetamodernist.files.wordpress.com/2017/12/library-wallpaper-50371-52062-hd-wallpapers.jpg');
            }
        .container { max-width: 600px; margin: auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
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
            .flash-message {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 15px;
    font-weight: bold;
    font-size: 16px;
    text-align: center;
    border-radius: 0;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    z-index: 9999;
    display: none; /* Initially hidden */
}

.success {
    background: #28a745;
    color: #fff;
}

.error {
    background: #dc3545;
    color: #fff;
}

    </style>
</head>
<body>
    <div class="container">
        <img style="margin-left: auto; display: block; margin-right: auto; height:150px; margin-bottom: 10px" src="https://www.lockbook.org/lockbook.jpeg">
        <ul>
            <li>Unuploaded: <?= $total_no_file ?></li>
            <li>Total: <?= $total_no_shipping ?></li>
            <li>Uploaded: <?= $total_with_file ?></li>
<!--            <li>Total "Study Set" products without shipping and with files: <?= $total_studyset_with_file ?></li>
            <li>Total "Study Set" products without shipping and no files: <?= $total_studyset_no_file ?></li>-->
        </ul>

            
            <h2>Update Book</h2>
            <form id="upload_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="step_one"><span style="color:#007bff; font-weight:bold;">Step 1: </span>Publish the updated book as a non-shippable product on the Admin Site</label>
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
                    <label for="pdf_file"><span style="color:#007bff; font-weight:bold;">Step 3: </span>Browse and Select the PDF/ePub to be published:</label>
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
            <!--<h3><?php// echo $message; ?></h3>-->
        </div>
        <script>
        
        function showFlashMessage(type, message) {
    let flashMessage = document.createElement("div");
    flashMessage.className = `flash-message ${type}`;
    flashMessage.textContent = message;

    // Remove existing flash message before adding a new one
    let existingMessage = document.querySelector(".flash-message");
    if (existingMessage) {
        existingMessage.remove();
    }

    document.body.prepend(flashMessage);
    flashMessage.style.display = "block";

    // Auto-hide after 5 seconds
    setTimeout(() => {
        flashMessage.style.opacity = "0";
        setTimeout(() => flashMessage.remove(), 500);
    }, 5000);
}

        
            // Function to fetch products and populate the dropdown
            function fetchProducts() {
                let xhr = new XMLHttpRequest();
                xhr.open('GET', 'get_updates.php', true);
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
                            console.log("Uploaded PDF/ePub URL:", data.secure_url);
                            bookurl.value=data.secure_url;
                            document.getElementById("upload_form").submit();
                            // Update database with the uploaded PDF/ePub link using AJAX or fetch
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
        <script>
    showFlashMessage("<?php echo $type; ?>", "<?php echo $message; ?>");
</script>
    </div>
    
</body>

</html>
