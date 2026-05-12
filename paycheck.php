<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Salary Result | Strong Together</title>

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

/* ===== RESULT STYLES ===== */
.result-container {
    max-width: 550px;
    margin: 40px auto;
    background: white;
    padding: 35px;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

h1 {
    color: #15803d;
    text-align: center;
    margin-bottom: 25px;
}

.result-box {
    background: #e8f5e9;
    padding: 20px;
    border-radius: 12px;
    margin: 20px 0;
    text-align: center;
}

.salary-amount {
    font-size: 36px;
    font-weight: bold;
    color: #2e7d32;
    margin: 10px 0;
}

.details {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 12px;
    margin: 20px 0;
}

.details p {
    margin: 10px 0;
    font-size: 16px;
}

.error {
    background: #ffebee;
    color: #c62828;
    padding: 20px;
    border-radius: 12px;
    margin: 20px 0;
    text-align: center;
}

.back-link {
    display: inline-block;
    padding: 12px 25px;
    background: #22c55e;
    color: white;
    text-decoration: none;
    border-radius: 10px;
    text-align: center;
    font-weight: bold;
    transition: 0.3s;
}

.back-link:hover {
    background: #16a34a;
}

.note {
    font-size: 12px;
    color: #666;
    margin-top: 20px;
    text-align: center;
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
        <li><a href="randomvalues.php">Random Values</a></li>
        <li><a href="styled-invoice.html">Invoice</a></li>
        <li><a href="salary-calculator.html">Salary Calc</a></li>
    </ul>
</header>

<div class="result-container">
    <h1>Salary Calculation Result</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hours = isset($_POST['hours']) ? $_POST['hours'] : '';
        $rate = isset($_POST['rate']) ? $_POST['rate'] : '';
        
        if (empty($hours) || empty($rate)) {
            echo '<div class="error"><strong>Error:</strong> Please enter both hours worked and rate of pay.</div>';
        } elseif (!is_numeric($hours) || !is_numeric($rate)) {
            echo '<div class="error"><strong>Error:</strong> Hours and rate must be numeric values.</div>';
        } elseif ($hours < 0 || $rate < 0) {
            echo '<div class="error"><strong>Error:</strong> Hours and rate cannot be negative.</div>';
        } else {
            $hours = floatval($hours);
            $rate = floatval($rate);
            $gross_salary = $hours * $rate;
            
            echo '<div class="result-box">';
            echo '<h3>Gross Salary</h3>';
            echo '<div class="salary-amount">$' . number_format($gross_salary, 2) . '</div>';
            echo '</div>';
            
            echo '<div class="details">';
            echo '<h3>Calculation Details</h3>';
            echo '<p><strong>Hours Worked:</strong> ' . number_format($hours, 2) . ' hours</p>';
            echo '<p><strong>Rate of Pay:</strong> $' . number_format($rate, 2) . ' per hour</p>';
            echo '<p><strong>Gross Salary:</strong> ' . number_format($hours, 2) . ' hours × $' . number_format($rate, 2) . ' = <strong>$' . number_format($gross_salary, 2) . '</strong></p>';
            echo '</div>';
        }
    } else {
        echo '<div class="error"><strong>Access Error:</strong> Please submit the form from the <a href="salary-calculator.html" style="color: #c62828;">salary calculator page</a>.</div>';
    }
    ?>
    
    <div style="text-align: center;">
        <a href="salary-calculator.html" class="back-link">Calculate Another Salary</a>
    </div>
    
    <div class="note">
        <small>Gross salary is calculated before taxes and deductions. Hours × Rate = Gross Salary</small>
    </div>
</div>

</div>

<footer class="footer">
    Strong Together - Designed by Medede Kanaza.
</footer>

</body>
</html>