<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Form</title>
    <style>
        /* Base styles */
        body {
            font-family: Arial, sans-serif;
            background-image: url('pic/d1.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            color: #333;
        }
        .navbar {
            position: sticky;
            top: 0;
            background: #fff;
            color: #333;
            z-index: 100;
            width: 100%;
        }
        .navbar-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 64px;
            padding: 0 2rem;
        }
        .navbar img {
            height: 50px;
        }
        .menu-items {
            display: flex;
            margin-right: 3rem;
        }
        .menu-items li {
            list-style: none;
            margin-left: 1.5rem;
            font-size: 1.2rem;
        }
        .navbar-container ul a {
            text-decoration: none;
            color: #333;
            font-size: 18px;
            position: relative;
        }
        .navbar-container ul a:after {
            content: "";
            position: absolute;
            background: #4CAF50;
            height: 3px;
            width: 0;
            left: 0;
            bottom: -10px;
            transition: 0.3s;
        }
        .navbar-container ul a:hover:after {
            width: 100%;
        }

        /* Responsive Navbar for mobile view */
        @media (max-width: 768px) {
            .navbar-container input[type="checkbox"],
            .navbar-container .hamburger-lines {
                display: block;
            }
            .navbar-container {
                display: block;
                position: relative;
                height: 64px;
            }
            .navbar-container input[type="checkbox"] {
                position: absolute;
                display: block;
                height: 32px;
                width: 30px;
                top: 20px;
                left: 20px;
                z-index: 5;
                opacity: 0;
                cursor: pointer;
            }
            .navbar-container .hamburger-lines {
                display: block;
                height: 28px;
                width: 35px;
                position: absolute;
                top: 20px;
                left: 20px;
                z-index: 2;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }
            .navbar-container .hamburger-lines .line {
                display: block;
                height: 4px;
                width: 100%;
                border-radius: 10px;
                background: #333;
            }
            .navbar .menu-items {
                padding-top: 100px;
                background: #fff;
                height: 100vh;
                max-width: 100%;
                transform: translate(-150%);
                display: flex;
                flex-direction: column;
                text-align: center;
                transition: transform 0.5s ease-in-out;
                overflow: auto;
            }
            .navbar .menu-items li {
                margin-bottom: 2rem;
                font-size: 1.1rem;
                font-weight: 500;
            }
            .navbar-container input[type="checkbox"]:checked ~ .menu-items {
                transform: translateX(0);
            }
            .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line1 {
                transform: rotate(45deg);
            }
            .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line2 {
                transform: scaleY(0);
            }
            .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line3 {
                transform: rotate(-45deg);
            }
        }

        /* Form styles */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: flex-start;
        }
        h2 {
            text-align: center;
            color: #333;
            width: 100%;
            margin-bottom: 20px;
        }
        .form-group {
            flex: 1;
            margin: 5px;
        }
        label {
            margin-top: 5px;
            font-weight: bold;
            font-size: 1em;
            display: block;
        }
        input, select, textarea {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%; 
            box-sizing: border-box;
            font-size: 0.95em; 
        }
        textarea {
            height: 80px; 
        }
        .button-container {
            text-align: center;
            margin-top: 20px; 
            width: 100%; 
        }
        button {
            padding: 10px 20px;
            color: #fff;
            background-color: #4CAF50; 
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #45a049;
        }
        /* Product Image Styles */
        .product-image {
            margin-left: 20px; 
            max-width: 1000px; 
            height: auto;
            display: none; 
            border-radius: 8px; 
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); 
            object-fit: cover; 
            max-height: 600px; 
        }
    </style>
</head>
<body>
    <!-- Navbar Section -->
    <nav class="navbar">
        <div class="navbar-container">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="index1.php">Home</a></li>
                <li><a href="shoes.php">Shop</a></li>
            </ul>
        </div>
    </nav>

    <!-- Transaction Form Section -->
    <div class="container">
        <form action="bike_transaction.php" method="POST">
            <h2>Transaction Form</h2>
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" required></textarea>
            </div>
            <div class="form-group">
                <label for="product">Product:</label>
                <select id="product" name="product" required onchange="showProductImage()">
                    <option value="" disabled selected>Select a product</option>
                    <option value="Aries Spherical Helmet">Aries Spherical Helmet</option>
                    <option value="Eclipse Spherical Helmet">Eclipse Spherical Helmet</option>
                    <option value="Vanquish Mips Helmet">Vanquish Mips Helmet</option>
                    <option value="S-Works Evade 3">S-Works Evade 3</option>
                    <option value="S-Works Prevail 3">S-Works Prevail 3</option>
                    <option value="S-Works Propero III">S-Works Propero III</option>
                    <option value="Z1 KINETICORE TOUR DE FRANCE + AEROSHELL">Z1 KINETICORE TOUR DE FRANCE + AEROSHELL</option>
                    <option value="LAZER Z1 KINETICORE">LAZER Z1 KINETICORE</option>
                    <option value="LAZER VENTO KINETICORE">LAZER VENTO KINETICORE</option>
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" min="1" required>
            </div>
            <div class="form-group">
                <label for="payment_method">Payment Method:</label>
                <select id="payment_method" name="payment_method" required>
                    <option value="Credit Card">Credit Card</option>
                    <option value="Bank Transfer">Bank Transfer</option>
                    <option value="Cash on Delivery">Cash on Delivery</option>
                </select>
            </div>
            <div class="button-container">
                <button type="submit">Submit Transaction</button>
            </div>
        </form>
        <div>
            <img id="productImage" class="product-image" src="" alt="Product Image">
        </div>
    </div>

    <script>
        function showProductImage() {
            const productSelect = document.getElementById("product");
            const productImage = document.getElementById("productImage");
            const selectedProduct = productSelect.value;

            const productImages = {
                "Aries Spherical Helmet": "pic/h1.jpg", 
                "Eclipse Spherical Helmet": "pic/h2.jpg",
                "Vanquish Mips Helmet": "pic/h3.jpg",
                "S-Works Evade 3": "pic/sh1.webp",
                "S-Works Prevail 3": "pic/sh2.webp",
                "S-Works Propero III": "pic/sh3.webp",
                "Z1 KINETICORE TOUR DE FRANCE + AEROSHELL": "pic/lz1.webp",
                "LAZER Z1 KINETICORE": "pic/lz2.webp",
                "LAZER VENTO KINETICORE": "pic/lz3.webp",
            };

            if (productImages[selectedProduct]) {
                productImage.src = productImages[selectedProduct];
                productImage.style.display = "block"; // Show the image
            } else {
                productImage.src = "";
                productImage.style.display = "none"; // Hide the image
            }
        }
    </script>
</body>
</html>
