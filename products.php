<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clothing Products</title>
  <link rel="stylesheet" href="style/Products.css">

</head>
<body>
<div class="content">
        <div class="top-bar">
            <a href="#">
                <p><strong><u>Ready to Wear Collection</u></strong></p>
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
<script >function toggleSearchBar() {
    var searchBar = document.getElementById("searchBar");
    searchBar.classList.toggle("active");
}

function search() {
    // Your search functionality here
}

</script>

    <a href="#" style="color: #FD6500;">SALE</a>
    <a href="#">NEW IN</a>
    <a href="#"><strong>#INSTAKHAADI</strong></a>
    <a href="#">FABRICS</a>
    <a href="#">READY TO WEAR</a>
</div>
<div style="border-top: 1px solid white; margin-top: 0;"></div>
<div class="container">
  <h1>𝖪𝗁𝖺𝖺𝖽𝗂 𝖫𝖺𝗍𝖾𝗌𝗍 𝖯𝗋𝗈𝖽𝗎𝖼𝗍𝗌</h1>
  <div class="product">
    <div class="product-item">
      <img src="images/41.jpg" alt="Product 1">
      <div class="info">
        <h3>Striped Oxford Shirt</h3>
        <p>Casual yet refined look.</p>
        <p>$44.99</p>
        <button>Add to Cart</button>
      </div>
       <div class="wishlist-icon" onclick="openWishlistPrompt('Product 1')">❤</div>
    </div>
    <div class="product-item">
      <img src="images/1.jpg" alt="Product 2">
      <div class="info">
        <h3>Jogger Sweatpants</h3>
        <p>Comfort meets style.</p>
        <p>$34.99</p>
        <button>Add to Cart</button>
      </div>
       <div class="wishlist-icon" onclick="openWishlistPrompt('Product 2')">❤</div>
    </div>
    <div class="product-item">
      <img src="images/42.jpg" alt="Product 3">
      <div class="info">
        <h3>Denim Button-Up Shirt</h3>
        <p>Casual cool, everyday style.</p>
        <p>$49.99</p>
        <button>Add to Cart</button>
      </div>
       <div class="wishlist-icon" onclick="openWishlistPrompt('Product 3')">❤</div>
    </div>
    <div class="product-item">
      <img src="images/02.jpg" alt="Product 4">
      <div class="info">
        <h3>Plaid Flannel Shirt</h3>
        <p>Comfortable and cozy.</p>
        <p>$34.99</p>
        <button>Add to Cart</button>
      </div>
      <div class="wishlist-icon" onclick="openWishlistPrompt('Product 4')">❤</div>
    </div>
    <div class="product-item">
      <img src="images/4.jpg" alt="Product 5">
      <div class="info">
        <h3>Linen Summer Shirt</h3>
        <p> Lightweight and breathable.</p>
        <p>$29.99</p>
        <button>Add to Cart</button>
      </div>
       <div class="wishlist-icon" onclick="openWishlistPrompt('Product 5')">❤</div>
    </div><div class="product-item">
      <img src="images/5.jpg" alt="Product 6">
      <div class="info">
        <h3>Printed Hawaiian Shirt</h3>
        <p>Fun and vibrant design.</p>
        <p> $54.99</p>
        <button>Add to Cart</button>
      </div>
      <div class="wishlist-icon" onclick="openWishlistPrompt('Product 6')">❤</div>
    </div><div class="product-item">
      <img src="images/6.jpg" alt="Product 7">
      <div class="info">
        <h3>Stretch Twill Pants</h3>
        <p>Move with ease.</p>
        <p> $49.99</p>
        <button>Add to Cart</button>
      </div>
       <div class="wishlist-icon" onclick="openWishlistPrompt('Product 7')">❤</div>
    </div><div class="product-item">
      <img src="images/7.jpg" alt="Product 8">
      <div class="info">
        <h3>Chambray Work Shirt</h3>
        <p> Durable and versatile.</p>
        <p>$39.99</p>
        <button>Add to Cart</button>
      </div>
       <div class="wishlist-icon" onclick="openWishlistPrompt('Product 8')">❤</div>
    </div><div class="product-item">
      <img src="images/8.jpg" alt="Product 9">
      <div class="info">
        <h3>Slim Fit Dress Shirt</h3>
        <p>Sleek and sophisticated.</p>
        <p>$49.99</p>
        <button>Add to Cart</button>
      </div>
       <div class="wishlist-icon" onclick="openWishlistPrompt('Product 9')">❤</div>
    </div><div class="product-item">
      <img src="images/9.jpg" alt="Product 10">
      <div class="info">
        <h3>Classic White Shirt</h3>
        <p>Timeless elegance, crisp cotton.</p>
        <p>$39.99</p>
        <button>Add to Cart</button>
      </div>
       <div class="wishlist-icon" onclick="openWishlistPrompt('Product 10')">❤</div>
    </div><div class="product-item">
      <img src="images/10.jpg" alt="Product 11">
      <div class="info">
        <h3>Classic Chino Pants</h3>
        <p>Versatile and comfortable.</p>
        <p>$49.99</p>
        <button>Add to Cart</button>
      </div>
       <div class="wishlist-icon" onclick="openWishlistPrompt('Product 11')">❤</div>
    </div>
    <div class="product-item">
      <img src="images/11.jpg" alt="Product 12">
    $59.99  <div class="info">
        <h3>Slim Fit Denim Jeans</h3>
        <p>Modern and stylish.</p>
        <p>$59.99</p>
        <button>Add to Cart</button>
      </div>
       <div class="wishlist-icon" onclick="openWishlistPrompt('Product 12')">❤</div>
    </div>
    <div class="product-item">
      <img src="images/12.jpg" alt="Product 13">
      <div class="info">
        <h3>Tailored Wool Trousers</h3>
        <p>Sharp and refined look.</p>
        <p>$69.99</p>
        <button>Add to Cart</button>
      </div>
       <div class="wishlist-icon" onclick="openWishlistPrompt('Product 13')">❤</div>
    </div>
    <div class="product-item">
      <img src="images/13.jpg" alt="Product 14">
      <div class="info">
        <h3>Cargo Utility Pants</h3>
        <p>Functional and rugged.</p>
        <p>$44.99</p>
        <button>Add to Cart</button>
      </div>
       <div class="wishlist-icon" onclick="openWishlistPrompt('Product 14')">❤</div>
    </div><div class="product-item">
      <img src="images/14.jpg" alt="Product 15">
      <div class="info">
        <h3>Linen Drawstring Pants</h3>
        <p>Relaxed beach vibes.</p>
        <p>$39.99</p>
        <button>Add to Cart</button>
      </div>
       <div class="wishlist-icon" onclick="openWishlistPrompt('Product 15')">❤</div>
    </div><div class="product-item">
      <img src="images/15.jpg" alt="Product 16">
      <div class="info">
        <h3>Corduroy Casual Pants</h3>
        <p>Move with ease.</p>
        <p>$49.99</p>
        <button>Add to Cart</button>
      </div>
       <div class="wishlist-icon" onclick="openWishlistPrompt('Product 16')">❤</div>
    </div>

    <!-- Add more product items as needed -->
  </div>
</div>

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
                <div class="Info-block" style="font-size: 13px; ">
                <h5>GET THE LATEST NEWS</h5>
                <p>Email Address</p>
<div class="email-input">
    <input type="email" placeholder="Enter your email">
    <button>Confirm</button>
</div>

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
    document.addEventListener("DOMContentLoaded", function () {
        const dots = document.querySelectorAll(".dot");

        function updateScrollIndicators() {
            let scrollPercentage = (document.documentElement.scrollTop / (document.documentElement.scrollHeight - window.innerHeight)) * 100;

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
            dot.addEventListener("click", function () {
                let scrollPosition = index * (document.documentElement.scrollHeight - window.innerHeight) / (dots.length - 1);
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
