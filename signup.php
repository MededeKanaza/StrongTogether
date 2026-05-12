<?php
$errors = [];
$fullname = "";
$email = "";
$password = "";

/* Only process when form is submitted */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = htmlspecialchars(trim($_POST["fullname"] ?? ""));
    $email = htmlspecialchars(trim($_POST["email"] ?? ""));
    $password = trim($_POST["password"] ?? "");

    // VALIDATION
    if (strlen($fullname) < 2) {
        $errors[] = "Full name must contain at least 2 characters.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Enter a valid email address.";
    }

    if (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters.";
    }

} else {
    // Prevent direct access (optional but recommended)
    header("Location: signup.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Signup Result | Strong Together</title>

<style>
body{
    font-family:Arial;
    background:#f0fdf4;
    color:#14532d;
    margin:0;
}

.wrapper{
    max-width:1200px;
    margin:auto;
    padding:20px;
}

/* HEADER */
.site-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    flex-wrap:wrap;
    border-bottom:3px solid #22c55e;
    padding:15px 0;
}

.brand{
    font-size:28px;
    font-weight:bold;
}

.brand span{
    color:#22c55e;
}

/* NAV */
.main-nav{
    display:flex;
    flex-wrap:wrap;
    gap:10px;
    list-style:none;
}

.main-nav a{
    text-decoration:none;
    padding:10px 15px;
    border-radius:25px;
    color:#166534;
    font-weight:bold;
}

.main-nav a:hover{
    background:#22c55e;
    color:white;
}

/* RESULT BOX */
.container{
    max-width:600px;
    margin:40px auto;
    background:white;
    padding:30px;
    border-radius:20px;
    box-shadow:0 10px 20px rgba(0,0,0,0.08);
}

.success{color:green;}
.error{color:red;}

/* FOOTER */
.footer{
    text-align:center;
    padding:15px;
    margin-top:30px;
    background:#14532d;
    color:white;
    font-weight:bold;
    border-top:3px solid #22c55e;
}

a{
    color:#15803d;
    font-weight:bold;
    text-decoration:none;
}
</style>
</head>

<body>

<div class="wrapper">

<header class="site-header">
    <div class="brand">Strong <span>Together</span></div>

    <ul class="main-nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="aboutus.html">About Us</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="feedback.html">Feedback</a></li>

        <!-- External Links -->
        <li><a href="https://mededekanaza.github.io/phploops/" target="_blank">PHP Loops</a></li>
        <li><a href="http://randomvalues.atwebpages.com" target="_blank">Random Values</a></li>
        <li><a href="https://mededekanaza.github.io/styled-invoice-page/" target="_blank">Invoice</a></li>
        <li><a href="http://paysalary.atwebpages.com" target="_blank">Salary Calculator</a></li>

        <li><a href="signup.html">Sign Up</a></li>
    </ul>
</header>

<div class="container">

<?php
if (empty($errors)) {
    echo "<h2 class='success'>Signup Successful ✓</h2>";
    echo "<p><strong>Name:</strong> $fullname</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p>Thank you for registering.</p>";
} else {
    echo "<h2 class='error'>Signup Failed ✗</h2>";

    foreach($errors as $error){
        echo "<p class='error'>$error</p>";
    }

    echo "<br><a href='signup.html'>← Back to Signup</a>";
}
?>

</div>

</div>

<footer class="footer">
Strong Together - Designed by Medede Kanaza.
</footer>

</body>
</html>