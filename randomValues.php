<?php
// ===== COIN TOSS SIMULATION =====
$heads = 0;
$tails = 0;

for ($i = 1; $i <= 100; $i++) {
    $toss = rand(0, 1);
    if ($toss == 1) {
        $heads++;
    } else {
        $tails++;
    }
}

// ===== RANDOM NUMBER GENERATION =====
$random1 = rand(1, 27);
$random2 = rand(1, 178);
$random3 = rand(1, 600);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Random Values | Strong Together</title>

<style>
/* ===== GLOBAL STYLES ===== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background: #f0fdf4;
    color: #14532d;
}

/* ===== WRAPPER ===== */
.wrapper {
    max-width: 1200px;
    margin: auto;
    padding: 20px;
}

/* ===== HEADER / NAVIGATION ===== */
.site-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    border-bottom: 3px solid #22c55e;
    padding: 15px 0;
    background: transparent;
}

.brand {
    font-size: 28px;
    font-weight: bold;
}

.brand span {
    color: #22c55e;
}

.main-nav {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    list-style: none;
    padding: 0;
    margin: 0;
}

.main-nav li {
    list-style: none;
}

.main-nav a {
    text-decoration: none;
    padding: 10px 15px;
    border-radius: 25px;
    color: #166534;
    font-weight: bold;
    display: inline-block;
    transition: all 0.3s ease;
}

.main-nav a:hover {
    background: #22c55e;
    color: white;
}

.main-nav a.active {
    background: #22c55e;
    color: white;
}

/* ===== CONTENT ===== */
h1 {
    margin: 25px 0;
    color: #0f7a3a;
    font-size: 32px;
}

.section {
    background: white;
    padding: 25px;
    margin: 20px 0;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    border-left: 6px solid #22c55e;
}

.section h2 {
    color: #15803d;
    margin-bottom: 15px;
}

.section p {
    margin: 10px 0;
    font-size: 16px;
}

.section strong {
    color: #0f7a3a;
}

/* ===== FOOTER ===== */
.footer {
    text-align: center;
    padding: 15px;
    margin-top: 30px;
    background: #14532d;
    color: white;
    font-weight: bold;
    border-top: 3px solid #22c55e;
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
        <li><a href="signup.html">Sign Up</a></li>
        <li><a href="phploops.html">PHP Loops</a></li>
        <li><a href="randomvalues.php" class="active">Random Values</a></li>
        <li><a href="styled-invoice.html">Invoice</a></li>
        <li><a href="salary-calculator.html">Salary Calc</a></li>
    </ul>
</header>

<h1>PHP Simulation Program</h1>

<div class="section">
    <h2>Part 1: Coin Toss Simulation (100 Tosses)</h2>
    <p><strong>Total Tosses:</strong> 100</p>
    <p><strong>Heads:</strong> <?php echo $heads; ?></p>
    <p><strong>Tails:</strong> <?php echo $tails; ?></p>
</div>

<div class="section">
    <h2>Part 2: Random Number Generation</h2>
    <p><strong>Range 1–27:</strong> <?php echo $random1; ?></p>
    <p><strong>Range 1–178:</strong> <?php echo $random2; ?></p>
    <p><strong>Range 1–600:</strong> <?php echo $random3; ?></p>
</div>

</div>

<footer class="footer">
    Strong Together - Designed by Medede Kanaza.
</footer>

</body>
</html>