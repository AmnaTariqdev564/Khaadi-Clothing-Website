<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database configuration
    $servername = "localhost";
    $username = "root";
    $password = ""; // Replace with your database password
    $dbname = "khaadi1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Collect email from form
    $email = $_POST['email'];

    // Insert email into subscribers table
    $sql = "INSERT INTO subscribers (email) VALUES ('$email')";
    if ($conn->query($sql) === TRUE) {
        // Redirect to home.php after successful insertion
        header("Location: home.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        margin: 0;
        font-family: Arial, Helvetica Neue, sans-serif;
        overflow-x: hidden;
        /* Prevent horizontal scrollbar */
        overflow-y: auto;
        /* prevent vertical scrollbar */
    }

    /* Hide scrollbar for Chrome, Safari, and Opera */
    ::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for IE, Edge, and Firefox */
    /* Note: 'scrollbar-width' is not supported in Safari */
    html {
        scrollbar-width: none;
        -ms-overflow-style: none;
    }

    /* Show scrollbar when scrolling */
    html:hover {
        scrollbar-width: auto;
        -ms-overflow-style: auto;
    }



    /* Set max-width for the content */
    .content {
        max-width: 1300px;
        margin: 0 auto;
        /* Center the content */
    }

    .top-bar {
        background-color: #AAD0D3;

        padding: 0.55rem 20px;
        text-align: center;
        position: relative;
    }

    .top-bar p {
        margin: 0;
        font-size: 0.80rem;

    }

    .track-word {
        position: absolute;
        top: 50%;
        right: 30px;
        transform: translateY(-50%);
        color: #2D2B2A;
        font-size: 0.75rem;

    }

    .navbar {
        background-color: #FFFFFF;
        color: #000;
        padding: 25px 20px;
        text-align: center;

    }

    .navbar-logo {
        position: absolute;
        top: 11%;
        left: 28px;
        transform: translateY(-50%);
        max-width: 75px;
        height: auto;
    }

    .navbar-icons {
        position: absolute;
        top: 11%;
        right: 1px;
        transform: translateY(-50%);
        padding: 8px 8px;


    }

    .navbar-icons img {
        margin-left: 10px;
        height: auto;
        padding: 2px 2px;

    }

    .navbar a {
        margin-right: 28px;
        text-decoration: none;
        color: #000;
        font-size: 13px;
    }
    /* Responsive styles for smaller screens */
@media screen and (max-width: 850px) {
    .navbar {
        flex-direction: row;
        align-items: center;
    }

    .navbar a {
        text-align: center;
        display:inline-block;
        flex-direction: ;
        align-items: center;
        width: 100%;
        padding: 10px 0;

    }

    .navbar a {
        margin: 10px 0;
    }
    
    .navbar-icons {
        padding-top: 10px;
        border-top: 1px solid #ddd;
        display: flex;
        gap: 20px;
    }
    .navbar-icons img{
        display: block;
    }
    
}

    .search-icon-container {
        position: relative;
        display: inline-block;
    }

    .search-icon {
        cursor: pointer;
    }

    .search-bar {
        position: absolute;
        top: calc(100% + 5px);
        right: 2px;
        z-index: 999;
        /* Ensure the search bar is on top */
        display: none;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 5px;
        max-width: 300px;
        /* Set a maximum width for the search bar */
        overflow: hidden;
        /* Hide any overflowing content */
    }

    .search-bar.active {
        display: flex;
        align-items: center;
    }


    .search-bar input {
        flex-grow: 1;
        border: none;
        border-radius: 5px;
        height: 40px;
        margin-right: 5px;
    }

    .search-bar button {
        margin-left: 10px;
        padding: 10px 20px;
        cursor: pointer;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    .search-bar button:hover {
        background-color: #0056b3;
    }

    .fullscreen-video,
    .fullscreen-image {
        width: 100%;
        height: auto;
        object-fit: cover;
        padding: 0;
        margin: 0;


    }

    /* Add a style for clickable elements */
    a {
        cursor: pointer;
        text-decoration: none;
        color: inherit;
    }

    /* Make images and videos responsive */
    img,
    video {
        max-width: 100%;
        height: auto;
    }

    .info-separator {
        height: 20px;
        /* Two lines of white spacing */
        background-color: #fff;
    }

    .info-blocks {
        background-color: #feede2;
        /* Light pink background */
        color: #000;
        /* Black text color */
        padding: 15px;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        flex-wrap: wrap;
        /* Allow blocks to wrap to the next line if needed */
    }

    .info-block {
        max-width: 300px;
        display: flex;
        ont-family: Arial, sans-serif;
        align-items: center;
        margin-bottom: 15px;
        font-size: 10px;
        margin-bottom: 0px;
        padding-right: 60px;
        padding-left: 50px;
        /* Three little fingers of padding in the left corner */

    }

    .info-block img {
        margin-right: 20px;
        /* Adjust margin as needed */

    }

    .contact-section {
        background-color: #fff;
        /* White background */
        color: #000;
        /* Black text color */
        padding: 10px;
        /* Adjust padding as needed */
        border-top: 1px solid #DCDBDB;
        /* Black thin line at the top */
        border-bottom: 1px solid #DCDBDB;
        /* Black thin line at the bottom */

        /* Flexbox to align blocks */
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        padding-right: 60px;
        padding-left: 50px;
        /* Three little fingers of padding in the left corner */
    }

    .contact-block {
        max-width: 200px;
        /* Adjust max-width as needed */
        font-family: Arial, sans-serif;
        /* Change font to Helvetica Neue */
        font-size: 9px;
        /* Decrease font size */
        padding-left: 100px;
        /* Three little fingers of padding in the left corner */
        margin-bottom: 0;
        padding-right: 150px;
        display: flex;
        /* Use flexbox for layout */
        align-items: center;
        /* Center items vertically */

    }

    .contact-block img {
        max-width: 19px;
        /* Set your preferred max-width for the contact icons */
        max-height: 30px;
        /* Set your preferred max-height for the contact icons */
        margin-right: 20px;
        /* Adjust margin as needed to create space between the icon and text */
    }

    .contact-block h2 {
        margin: 0;
    }

    .Info-section {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        flex-wrap: wrap;
        /* Allow blocks to wrap to the next line if needed */
        padding: 30px 15px;
        padding-right: 50px;
        padding-left: 50px;
    }

    .Info-block {
        max-width: 300px;
        display: flex;
        flex-direction: column;
        font-family: Arial, sans-serif;
        margin-bottom: 0px;
        padding-left: 15px;
        /* Adjust padding as needed */
        padding-right: 50px;
    }

    .Info-block h2 {
        font-weight: bold;
    }

    .Info-block p {
        margin: 5px;
        font-size: 12px;
        /* Adjust font size as needed */
    }

    .Contact-info {
        display: flex;
        align-items: center;
        margin-top: 10px;
    }

    .Contact-info img {
        max-width: 20px;
        /* Set your preferred max-width for the contact icons */
        max-height: 20px;
        /* Set your preferred max-height for the contact icons */
        margin-right: 5px;
        /* Adjust margin as needed to create space between the icon and text */
    }

    .email-input {
        display: flex;
        align-items: center;
        margin-top: 10px;
    }

    .email-input input {
        flex-grow: 1;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 8px;
        height: 20px;
        /* Equal height as button */
    }

    .email-input button {
        margin-left: 10px;
        padding: 10px 20px;
        cursor: pointer;
        border: none;
        border-radius: 5px;
        background-color: #FEEDE2;
        color: #000000;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    .email-input button:hover {
        background-color: #F8643C;
        color: #fcf9f9;
    }


    /* Add this to your existing styles */
    .INfo-section {
        border-top: 1px solid #DCDBDB;
        /* Black thin line at the top */
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        flex-wrap: wrap;
        /* Allow blocks to wrap to the next line if needed */
        padding: 20px;
        /* Adjust padding as needed */
    }

    .INfo-block {
        max-width: 300px;
        padding-right: 20px;
        /* Add right padding to balance the layout */
        margin-bottom: 20px;
        /* Add spacing between blocks */
        font-family: Arial, sans-serif;
    }

    .scroll-dots {
        position: fixed;
        bottom: 40px;
        right: 30px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .dot {
        height: 6px;
        width: 6px;
        margin: 3px 0;
        background-color: #f9a270;
        border-radius: 50%;
        transition: all 0.2s ease-in-out;
        transition: transform 0.2s, width 0.2s, height 0.2s;
        cursor: pointer;
    }

    /* Highlight the active dot */
    .dot.active {
        height: 10px;
        width: 10px;
        background-color: #f2650e;
        /* You can choose your desired color */
    }
    </style>
    <title>Khaadi Pakistan | Official Website</title>
</head>

<body>

    <div class="content">
        <div class="top-bar">
            <a href="#">
                <p>Style yourself this summer in our Latest Ready To Wear Collection<strong><u> Right here</u></strong>
                </p>
                <div class="track-word">TRACK</div>
            </a>
        </div>
        <div class="navbar">
            <a href="#"><img class="navbar-logo" src="images/logo.png" alt="Logo"></a>
            <div class="navbar-icons">
                <div class="search-icon-container">
                    <div class="search-icon" onclick="toggleSearchBar()">
                        <a href="#" style="margin-right: 4px; display: inline-block;">
                            <img src="images/icons/search.png" alt="Search Icon" style="max-width: 20px; height: auto;">
                        </a>
                    </div>
                    <div class="search-bar" id="searchBar">
                        <input type="text" placeholder="Search...">
                        <button onclick="search()">Search</button>
                    </div>
                </div>

                <a href="wishlist.php" style="margin-right: 4px; display: inline-block;">
                    <img src="images/icons/wishlist.png" alt="Wishlist Icon" style="max-width: 20px; height: auto;">
                </a>
                <a href="sign.php" style="margin-right: 4px; display: inline-block;">
                    <img src="images/icons/account.png" alt="Account Icon" style="max-width: 20px; height: auto;">
                </a>
                <a href="#" style="display: inline-block;">
                    <img src="images/icons/shopping.png" alt="Shopping Icon" style="max-width: 20px; height: auto;">
                </a>
            </div>
            <script>
            function toggleSearchBar() {
                var searchBar = document.getElementById("searchBar");
                searchBar.classList.toggle("active");
            }

            function search() {
                // Your search functionality here
            }
            </script>

            <a href="products.php" style="color: #FD6500;">SALE</a>
            <a href="#">NEW IN</a>
            <a href="#"><strong>#INSTAKHAADI</strong></a>
            <a href="#">FABRICS</a>
            <a href="#">READY TO WEAR</a>
        </div>
        <a href="#" class="fullscreen-image">
            <img src="images/2.jpg" alt="Your Image">
        </a>
 
        <a href="#" class="fullscreen-image">
            <img src="images/1.jpg" alt="Your Image">
        </a>
        <a href="#" class="fullscreen-image">
            <img src="images/3.jpg" alt="Your Image">
        </a>
        <a href="#" class="fullscreen-video">
            <video autoplay loop muted>
                <source src="images/video0.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </a>
        <a href="#" class="fullscreen-image">
            <img src="images/000.jpg" alt="Your Image">
        </a>
    </div>


    <!-- New Slideshow Container -->

    <div class="info-separator"></div>
    <div class="info-blocks">
        <!-- Block 1 -->
        <div class="info-block">
            <img src="images/icons/icn1.png" alt="Icon 1">
            <div class="info-text">
                <h2>SHIPPING CHARGES</h2>
                <p>Starting from Rs. 120</p>
            </div>
        </div>

        <!-- Block 2 -->
        <div class="info-block">
            <img src="images/icons/icn2.png" alt="Icon 2">
            <div class="info-text">
                <h2>CRAFTED WITH CARE</h2>
                <p>Curated with you in mind.</p>
            </div>
        </div>

        <!-- Block 3 -->
        <div class="info-block">
            <img src="images/icons/icn3.png" alt="Icon 3">
            <div class="info-text">
                <h2>FIND STORES</h2>
                <p>Stores countrywide across Pakistan, UK, UAE.</p>
            </div>
        </div>
    </div>

    <!-- Black Thin Line Separator -->
    <div style="border-top: 1px solid white; margin-top: 0;"></div>


    <div style="border-top: 1px solid white; margin-top: 0;"></div>

    <!-- Contact Blocks -->
    <div class="contact-section">
        <!-- Block 1 -->
        <div class="contact-block" style="letter-spacing: 2px;">
            <h1>NEED HELP?</h1>
        </div>

        <!-- Block 2 -->
        <div class="contact-block" style="font-size: 11px; padding-top: 11px;">
            <img src="images/icons/icn4.png" alt="Contact Icon 4">
            <h2>0800 74007</h2>
        </div>

        <!-- Block 3 -->
        <div class="contact-block" style="font-size: 11px; padding-top: 11px;">
            <img src="images/icons/icn5.png" alt="Contact Icon 5">
            <h2>EMAIL US</h2>
        </div>
    </div>

    <!-- Black Thin Line Separator -->
    <div style="border-top: 1px solid white; margin-top: 0;"></div>
    <!-- New Section with 4 Blocks -->
    <div class="Info-section">
        <!-- Block 1 -->
        <div class="Info-block">
            <h2 style="font-size: 13px;">HELP</h2>
            <p>Track Your Order</p>
            <p>Terms & Conditions</p>
            <p>Privacy Policy</p>
        </div>

        <!-- Block 2 -->
        <div class="Info-block">
            <h2 style="font-size: 13px;">CUSTOMER SUPPORT</h2>
            <p>Customer Service</p>
            <p>Store Locator</p>
            <p>Disclaimer</p>
            <p>Shipping & Handling</p>
            <p>Returns & Exchanges</p>
            <p>FAQs</p>
        </div>

        <!-- Block 3 -->
        <div class="Info-block">
            <h2 style="font-size: 13px;">MORE FROM KHAADI</h2>
            <p>About Us</p>
            <p>Contact Us</p>
            <p>Blogs</p>
        </div>

        <!-- Block 4 -->
        <div class="Info-block">
            <h2 style="font-size: 13px;">GET IN TOUCH</h2>
            <div class="Contact-info">
                <img src="images/icons/icn4.png" alt="Phone Icon"> 0800 74007
            </div>
            <div class="Contact-info">
                <img src="images/icons/icn5.png" alt="Email Icon"> customercare@khaadi.com
            </div>
            <div class="Info-block" style="font-size: 13px;">
                <h5>GET THE LATEST NEWS</h5>
                <form method="post" action="">
                    <p>Email Address</p>
                    <div class="email-input">
                        <input type="email" name="email" placeholder="Enter your email" required>
                        <button type="submit">Confirm</button>
                    </div>
                </form>
            </div>
        </div>


    </div>
    </div>

    <!-- Black Thin Line Separator -->
    <div style="border-top: 1px solid white; margin-top: 0;"></div>
    <!-- New Section with 4 Blocks -->
    <div class="INfo-section">
        <!-- Block 1 -->
        <div class="INfo-block">
            <p style="padding-left: 20px;">100% Safe Checkout</p>
            <img src="images/pay.png" alt="Payment" style="max-width: 140px; margin-top: 10px;">
        </div>

        <!-- Block 2 -->
        <div class="INfo-block">
            <p>Secured by</p>
            <img src="images/pngimg.png" alt="Secured" style="max-width: 150px; margin-top: 10px;">
        </div>

        <!-- Block 3 -->
        <div class="INfo-block">
            <img src="images/logo.png" alt="Khaadi Logo" style="max-width: 80px; margin-top: 1px;">
        </div>

        <!-- Block 4 -->
        <div class="INfo-block">
            <p>Copyright © 2023 Khaadi Pakistan (SMC-Pvt) Limited. All Rights Reserved</p>
        </div>
    </div>

    <!-- Black Thin Line Separator -->
    <div style="border-top: 1px solid white; margin-top: 0;"></div>

    </div>
    <!-- Scroll Dots -->
    <div class="scroll-dots">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
    <!-- Add this script to your HTML file -->

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const dots = document.querySelectorAll(".dot");

        function updateScrollIndicators() {
            let scrollPercentage = (document.documentElement.scrollTop / (document.documentElement
                .scrollHeight - window.innerHeight)) * 100;

            dots.forEach((dot, index) => {
                let dotSize = 6 + Math.abs(scrollPercentage - (index * 100 / (dots.length - 1))) / 4;
                dot.style.height = `${dotSize}px`;
                dot.style.width = `${dotSize}px`;

                if (dotSize > 10) {
                    dot.classList.add("active");
                } else {
                    dot.classList.remove("active");
                }
            });
        }

        window.addEventListener("scroll", updateScrollIndicators);
        updateScrollIndicators(); // Call the function initially to set the indicators correctly

        // Function to handle scroll indicator click
        dots.forEach((dot, index) => {
            dot.addEventListener("click", function() {
                let scrollPosition = index * (document.documentElement.scrollHeight - window
                    .innerHeight) / (dots.length - 1);
                window.scrollTo({
                    top: scrollPosition,
                    behavior: 'smooth'
                });
            });
        });
    });
    </script>

</body>

</html>