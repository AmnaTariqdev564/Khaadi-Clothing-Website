<!DOCTYPE html>
<html>
<head>
    <title>Sign Up Page</title>
    <link rel="stylesheet" type="text/css" href="sign.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <a href="#"><img class="navbar-logo" src="logo.png" alt="Logo"></a>
    <div class="main">      
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form action="sign.php?msg=successful" method="POST">
                <label for="chk" aria-hidden="true">Sign up</label>
                <input type="text" name="username" placeholder="User name" required="">
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="password" placeholder="Password" required="">
                <button type="submit">Sign up</button>
            </form>
        </div>

        <div class="login">
            <form action="index.php" method="POST">
                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" name="login_email" placeholder="Email" required="">
                <input type="password" name="login_password" placeholder="Password" required="">
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Database connection details
        $servername = "localhost";
        $db_username = "root"; // default username for XAMPP
        $db_password = "";     // default password for XAMPP
        $dbname = "khaadi1";

        // Create connection
        $conn = new mysqli($servername, $db_username, $db_password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
            // Handle sign up
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password for security

            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

            if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('New record created successfully');</script>";
} else {
    $errorMessage = "Error: " . $sql . "\\n" . $conn->error;
    echo "<script type='text/javascript'>alert('$errorMessage');</script>";
}
        }

        if (isset($_POST['login_email']) && isset($_POST['login_password'])) {
            // Handle login
            $login_email = $_POST['login_email'];
            $login_password = $_POST['login_password'];

            $sql = "SELECT * FROM users WHERE email='$login_email'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if (password_verify($login_password, $row['password'])) {
                    echo "Login successful. Welcome, " . $row['username'] . "!";
                } else {
                    echo "Invalid password.";
                }
            } else {
                echo "No user found with this email.";
            }
        }

        $conn->close();
    }
    ?>
</body>
</html>
