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
    <a id="logout-btn" href="#">Logout</a>
</nav>

<section>
    <div class="cstm-section-1">
        <h2>You Have Logged in Successfully</h2>
    </div>
</section>

<script>
    document.getElementById('logout-btn').addEventListener('click', function() {
  // Send an AJAX request to logout.php
  var xhr = new XMLHttpRequest();
  xhr.open('GET', 'process-logout.php', true);
  xhr.onload = function() {
    if (this.status == 200) {
      // Redirect to the login page
      window.location.href = 'index.php';
    }
  };
  xhr.send();
});
</script>


</body>
</html>