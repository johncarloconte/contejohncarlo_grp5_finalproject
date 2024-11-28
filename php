<?php
// Start the PHP session if needed
session_start();

// Define page title
$title = "FIXEDGEAR";

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bike_shop_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data exists to avoid Undefined Array Key warnings
$fullName = isset($_POST['fullname']) ? $_POST['fullname'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';
$product = isset($_POST['product']) ? $_POST['product'] : '';
$quantity = isset($_POST['quantity']) ? $_POST['quantity'] : '';
$payment = isset($_POST['payment_method']) ? $_POST['payment_method'] : '';

// SQL query to insert data into the transactions table
$sql = "INSERT INTO transactions (fullname, email, phone, address, product, quantity, payment_method) 
VALUES ('$fullName', '$email', '$phone', '$address', '$product', '$quantity', '$payment')";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        /* Centering the success message on the screen */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4; 
        }

        .message-container {
            width: 90%;
            max-width: 600px;
        }

        .success-message {
            background-color: #28a745; 
            color: white;
            padding: 25px;
            border-radius: 8px;
            border: 1px solid #218838; 
            text-align: center;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); 
            animation: fadeIn 1s ease-out; 
        }

        .success-message p {
            font-size: 18px;
            margin: 10px 0;
        }

        .success-message strong {
            font-weight: bold;
            font-size: 22px;
        }

        /* Transaction Receipt Styles */
        .transaction-receipt {
            margin-top: 30px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .transaction-receipt h3 {
            margin-bottom: 20px;
            color: #333;
        }

        .transaction-receipt .receipt-item {
            margin-bottom: 15px;
            font-size: 16px;
        }

        .transaction-receipt .receipt-item strong {
            font-weight: bold;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Navbar styles */
        .navbar {
            background-color: #333;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }

        .navbar-container {
            display: flex;
            justify-content: center; 
            align-items: center; 
            padding: 20px;
        }

        .menu-items {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        .menu-items li {
            margin-left: 20px;
        }

        .menu-items li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        .menu-items li a:hover {
            color: #f05e8a;
        }


    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar">
    <div class="navbar-container">
        <ul class="menu-items">
            <li><a href="index1.php">Home</a></li>
            <li><a href="shoes.php">CleatShoes</a></li>
            <li><a href="helmet.php">Headgear</a></li>
            <li><a href="smf.php">Framesets</a></li>
        </ul>
    </div>
</nav>

<?php
echo "<div class='message-container'>";

// Check if the query is successful
if ($conn->query($sql) === TRUE) {
    // Transaction was successful, show success message
    echo "<div class='success-message'>
            <p><strong>Transaction submitted successfully!</strong></p>
            <p>Thank you for your purchase, <strong>$fullName</strong>. We will process your order shortly.</p>
          </div>";

    // Display the transaction receipt
    echo "<div class='transaction-receipt'>
            <h3>Transaction Receipt</h3>
            <div class='receipt-item'><strong>Full Name:</strong> $fullName</div>
            <div class='receipt-item'><strong>Email:</strong> $email</div>
            <div class='receipt-item'><strong>Phone Number:</strong> $phone</div>
            <div class='receipt-item'><strong>Address:</strong> $address</div>
            <div class='receipt-item'><strong>Product:</strong> $product</div>
            <div class='receipt-item'><strong>Quantity:</strong> $quantity</div>
          </div>";

} else {
    // There was an error with the transaction
    echo "<div class='error-message'>Error: " . $sql . "<br>" . $conn->error . "</div>";
}

echo "</div>";

// Close connection
$conn->close();
?>

</body>
</html>
