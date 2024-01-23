<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jQuery/jQuery.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Tres Marias Website</title>
</head>
<body>

<header>
    <h1>Tres Marias Webpage</h1>
</header>

<nav class="nav-bar">
    <a href="#home">Home</a>
    <a href="#contact">Contact Us</a>
    <a href="#about">About Us</a>
    <a href="#FAQs">FAQs</a>
</nav>

<section>
    <form action="process-login.php" method="post" id="login-section">
        <h2></h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
        <p>Don't have an account? <a id="show-register">Register here</a>.</p>
    </form>

    <form action="process-register.php" method="post" id="register-section">
        <h2>Register</h2>
        <label for="regUsername">Username:</label>
        <input type="text" id="regUsername" name="regUsername" required>

        <label for="regPassword">Password:</label>
        <input type="password" id="regPassword" name="regPassword" required>

        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>

        <button type="submit">Register</button>
        <p>Already have an account? <a id="show-login">Login here</a></p>
    </form>
</section>

<script>
    $(document).ready(function() {
      $('#show-register').click(function(e) {
        e.preventDefault();
        $('#register-section').fadeToggle(1000);
        $('#login-section').fadeToggle(1);
      });
    
      $('#show-login').click(function(e) {
        e.preventDefault();
        $('#register-section').fadeToggle(1);
        $('#login-section').fadeToggle(1000);
      });
    });
</script>

</body>
</html>