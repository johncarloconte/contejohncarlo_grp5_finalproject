<?php
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

// Check if form was submitted
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

$sql = "INSERT INTO contact_tbl (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    // Success message with styling
    echo "
    <div class='success-message'>
        <p><strong>Message sent successfully!</strong></p>
        <p>Your message has been received. We will get back to you shortly.</p>
    </div>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<style>
    /* Centering the success message on the screen */
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4; /* Light gray background */
    }

    .success-message {
        background-color: #28a745; /* Success green */
        color: white;
        padding: 25px;
        border-radius: 8px;
        border: 1px solid #218838; /* Slightly darker green border */
        text-align: center;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Drop shadow */
        max-width: 500px;
        width: 100%;
        animation: fadeIn 1s ease-out; /* Animation for fade-in effect */
    }

    .success-message p {
        font-size: 18px;
        margin: 10px 0;
    }

    .success-message strong {
        font-weight: bold;
        font-size: 22px;
    }

    /* Optional: Adding animation for the message */
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

    /* Additional small style tweaks */
    .success-message p:last-child {
        font-size: 16px;
        font-style: italic;
    }

    .success-message:before {
        content: "✓"; /* Adding checkmark symbol before the text */
        font-size: 30px;
        margin-right: 10px;
        vertical-align: middle;
        color: white;
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
</body>
