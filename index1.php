<?php
// functions.php - Helper Function for Rendering Product Cards
function renderProductCard($image, $name, $rating, $price, $colors, $buyLink) {
    ?>
    <div class="best-p1">
        <!-- Product Image -->
        <img src="<?php echo $image; ?>" alt="img">
        <div class="best-p1-txt">
            <!-- Product Name -->
            <div class="name-of-p">
                <p><?php echo $name; ?></p>
            </div>
            <!-- Product Rating -->
            <div class="rating">
                <?php
                // Render star ratings dynamically based on the $rating parameter
                for ($i = 0; $i < 5; $i++) {
                    if ($i < $rating) {
                        echo "<i class='bx bxs-star'></i>"; // Filled star for rating
                    } else {
                        echo "<i class='bx bx-star'></i>"; // Empty star for remaining
                    }
                }
                ?>
            </div>
            <!-- Product Price and Available Colors -->
            <div class="price">
                ₱<?php echo number_format($price, 2); ?>
                <div class="colors">
                    <?php
                    // Display color options for the product
                    foreach ($colors as $color) {
                        echo "<i class='bx bxs-circle $color'></i>";
                    }
                    ?>
                </div>
            </div>
            <!-- Buy Now Button -->
            <div class="buy-now">
                <button><a href="<?php echo $buyLink; ?>">Buy Now</a></button>
            </div>
        </div>
    </div>
    <?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- HEADER SECTION -->
    <!-- Metadata and External Resources -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIXEDGEAR</title>
    <!-- jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Link to External CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
<!-- NAVIGATION BAR -->
<nav class="navbar">
    <div class="navbar-container">
        <!-- Hamburger Menu (For Mobile) -->
        <input type="checkbox" name="" id="checkbox">
        <div class="hamburger-lines">
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>
        </div>
        <!-- Menu Links -->
        <ul class="menu-items">
            <li><a href="index.php">Home</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <!-- Website Logo -->
        <div class="logo">
            <img src="https://i.postimg.cc/TP6JjSTt/logo.webp" alt="">
        </div>
    </div>
</nav>

<!-- COLLECTIONS SECTION -->
<section id="collection">
    <div class="collections container">
        <!-- Frameset Collection -->
        <div class="content">
            <img src="pic/gr2.jpg" alt="img" />
            <div class="img-content">
                <p>SEE MORE Frameset</p>
                <button><a href="smf.php">SHOP NOW</a></button>
            </div>
        </div>
        <!-- Cleat Shoes Collection -->
        <div class="content2">
            <img src="pic/shoes.jpg" alt="img" />
            <div class="img-content2">
                <p>SEE MORE CleatShoes</p>
                <button><a href="shoes.php">SHOP NOW</a></button>
            </div>
        </div>
        <!-- Headgear Collection -->
        <div class="content3">
            <img src="pic/helmet.jpg" alt="img" />
            <div class="img-content3">
                <p>SEE MORE Headgear</p>
                <button><a href="helmet.php">SHOP NOW</a></button>
            </div>
        </div>
    </div>
</section>

<!-- TOP SALES SECTION -->
<section id="sellers">
    <!-- Top Sales Wholebike -->
    <div class="seller container">
        <h2>Top Sales Wholebike</h2>
        <div class="best-seller">
            <?php
            // Array of top-selling products
            $topSales = [
                ['pic/t1.jpg', 'Tsunami SNM100', 5, 16000, ['red', 'blue', 'white'], 'bform.php'],
                ['pic/c3.jpg', 'Cinelli Vigorelli Shark', 2, 75000, ['green', 'grey', 'brown'], 'bform.php'],
                ['pic/m1.jpg', 'Manila Animal Jeprox', 4, 95000 , ['brown', 'green', 'blue'], 'bform.php'],
                ['pic/e1.jpg', 'Engine 11 Vortex', 5, 36000, ['red', 'grey', 'blue'], 'bform.php']
            ];

            // Render product cards for top-selling items
            foreach ($topSales as $product) {
                renderProductCard($product[0], $product[1], $product[2], $product[3], $product[4], $product[5]);
            }
            ?>
        </div>
    </div>

    <!-- New Arrivals Clothing -->
    <div class="seller container">
        <h2>New Arrivals Clothing</h2>
        <div class="best-seller">
            <?php
            // Array of newly arrived products
            $newArrivals = [
                ['pic/f1.jpg', 'Fixedgear vs Everybody', 5, 700, ['black', 'blue', 'brown'], 'cform.php'], 
                ['pic/f2.jpg', 'Live Fast, Die Last', 1, 700, ['brown', 'red', 'green'], 'cform.php'], 
                ['pic/f3.jpg', 'Rekta Silangan', 5, 700, ['grey', 'black', 'black'], 'cform.php'], 
                ['pic/f4.jpg', 'FXD Clothing', 5, 700, ['grey', 'red', 'blue'], 'cform.php']
            ];

            // Render product cards for new arrivals
            foreach ($newArrivals as $product) {
                renderProductCard($product[0], $product[1], $product[2], $product[3], $product[4], $product[5]);
            }
            ?>
        </div>
    </div>
</section>

<!-- CONTACT SECTION -->
<section id="contact">
    <div class="contact container">
        <div class="form">
            <!-- Contact Information -->
            <div class="form-txt">
                <h4>INFORMATION</h4>
                <h1>Contact Us</h1>
                <span>As you might expect of a company that began <br>as a high-end interiors contractor,</br> we pay strict attention.</span>
                <h3>MUNTINLUPA CITY</h3>
                <p>University Road NBP Reservation Brgy. Poblacion, <br>City of Muntinlupa. Philippines, 1776</br><br>+92828321311</p>
                <h3>PHILIPPINES</h3>
                <p>National Capital Region of the Philippines.</p>
            </div>
            <!-- Contact Form -->
            <form action="contact.php" method="POST">
                <div class="form-details">
                    <input type="text" name="name" id="name" placeholder="Name" required>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <textarea name="message" id="message" cols="52" rows="7" placeholder="Message" required></textarea>
                    <button type="submit">SEND MESSAGE</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer>
    <div class="footer-container container">
        <!-- Footer Content -->
        <div class="content_1">
            <p>This website is dedicated to educational purposes,<br>providing resources and information for school-related learning.</p>
        </div>
        <div class="content_2">
            <h4>SHOPPING</h4>
            <a href="shoes.php">Cleatshoes</a>
            <a href="smf.php">Frameset</a>
            <a href="#sellers">Accessories</a>
        </div>
    </div>
    <hr>
</footer>
</body>
</html>
