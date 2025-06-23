<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khaadi</title>
    <link rel="stylesheet" href="style/styles.css"> <!-- Linking the external CSS file -->
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('images/intro-img.jpg');
    background-size: cover;
    background-position: top;
}
</style>
<body>

    <div class="container">
        <div class="logo">
            <img src="images/splash-logo.png" alt="Your Logo"> <!-- Replace 'logo.png' with the path to your logo -->
        </div>
        <div class="form-container">
            <form action="home.php">
                <div class="form-group">
                    <input type="text" list="Countries" placeholder="Select Country" required>
                    <datalist id="Countries">
                        <option value="Pakistan"></option>
                        <option value="India"></option>
                        <option value="United States of America"></option>
                        <option value="United Kingdom"></option>
                        <option value="Turkey"></option>
                    </datalist>
                </div>
                <input type="submit" value="Continue">
            </form>
        </div>
    </div>

</body>

</html>
