<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Strong Together - Salary Calculation Result</title>
    <style>
        /* ===== GLOBAL STYLES (Matching Strong Together) ===== */
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

        /* ===== HEADER / NAVIGATION (Matching Strong Together) ===== */
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

        /* ===== PAGE CONTENT ===== */
        .page {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 10px;
            color: #14532d;
            font-size: 2rem;
        }

        .section-title span {
            border-bottom: 3px solid #22c55e;
            padding-bottom: 5px;
        }

        .section-sub {
            text-align: center;
            color: #166534;
            margin-bottom: 30px;
        }

        .calc-container {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border: 1px solid #bbf7d0;
        }

        .calc-container h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #166534;
        }

        .result-container {
            background: #f0fdf4;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            border-left: 5px solid #22c55e;
        }

        .result-container.success {
            border-left-color: #22c55e;
        }

        .result-container.error {
            border-left-color: #ef4444;
            background: #fef2f2;
        }

        .result-container h3 {
            margin-bottom: 15px;
            color: #14532d;
        }

        .result-line {
            padding: 8px 0;
            font-size: 16px;
        }

        .result-line.total {
            font-size: 20px;
            margin-top: 10px;
        }

        .salary-amount {
            color: #22c55e;
            font-size: 24px;
            font-weight: bold;
        }

        .motivation-message {
            background: #e0f2fe;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            font-weight: bold;
            margin-top: 20px;
            color: #0369a1;
        }

        .error-list {
            margin-top: 10px;
            margin-left: 20px;
            color: #b91c1c;
        }

        .button-group {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 25px;
        }

        .calc-button {
            background: #22c55e;
            color: white;
            border: none;
            padding: 10px 25px;
            font-size: 14px;
            font-weight: bold;
            border-radius: 25px;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .calc-button:hover {
            background: #16a34a;
        }

        .btn-secondary-calc {
            background: #3b82f6;
        }

        .btn-secondary-calc:hover {
            background: #2563eb;
        }

        hr {
            margin: 15px 0;
            border-color: #bbf7d0;
        }

        /* ===== FOOTER (Matching Strong Together) ===== */
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
    <!-- HEADER / NAVIGATION - Matching Strong Together -->
    <header class="site-header">
        <div class="brand">Strong <span>Together</span></div>
        <ul class="main-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="feedback.html">Feedback</a></li>
            <li><a href="paycheck.html">Salary Calculator</a></li>
            <li><a href="mortgage.html">Mortgage Calculator</a></li>    
        </ul>
    </header>

    <!-- MAIN CONTENT -->
    <div class="page">
        
        <h1 class="section-title"><span>Paycheck</span> Result</h1>
        
        <div class="calc-container">
            <h2>Salary Calculation Result</h2>
            
            <?php
            // Check if the form was submitted via POST method
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                
                // Retrieve input values
                $hours = isset($_POST['hours']) ? $_POST['hours'] : '';
                $rate = isset($_POST['rate']) ? $_POST['rate'] : '';
                
                // Validate that both fields contain numeric values
                if (is_numeric($hours) && is_numeric($rate) && $hours >= 0 && $rate >= 0) {
                    
                    // Convert to float for calculation
                    $hours = (float)$hours;
                    $rate = (float)$rate;
                    
                    // Calculate salary
                    $salary = $hours * $rate;
                    
                    // Format values
                    $formatted_hours = number_format($hours, 2);
                    $formatted_rate = number_format($rate, 2);
                    $formatted_salary = number_format($salary, 2);
                    
                    // Display the result
                    echo '<div class="result-container success">';
                    echo '<h3> Salary Breakdown</h3>';
                    echo '<div class="result-line"><strong> Hours Worked:</strong> ' . $formatted_hours . ' hours</div>';
                    echo '<div class="result-line"><strong> Rate of Pay:</strong> $' . $formatted_rate . ' per hour</div>';
                    echo '<hr>';
                    echo '<div class="result-line total"><strong> Total Salary:</strong> <span class="salary-amount">$' . $formatted_salary . '</span></div>';
                    echo '</div>';
                    
                                       
                } else {
                    // Display error message for invalid input
                    echo '<div class="result-container error">';
                    echo '<h3> Error</h3>';
                    echo '<p>Please enter valid positive numbers for both hours worked and rate of pay.</p>';
                    echo '<p><strong>Requirements:</strong></p>';
                    echo '<ul class="error-list">';
                    echo '<li>Hours must be 0 or greater</li>';
                    echo '<li>Rate must be 0 or greater</li>';
                    echo '<li>Only numeric values are accepted</li>';
                    echo '<li>No empty fields allowed</li>';
                    echo '</ul>';
                    echo '</div>';
                }
                
            } else {
                // If someone tries to access this file directly without submitting the form
                echo '<div class="result-container error">';
                echo '<h3> Error</h3>';
                echo '<p>No form data received. Please go back and submit the form.</p>';
                echo '<p><strong>Tip:</strong> Use the form on the Paycheck Calculator page to calculate your salary.</p>';
                echo '</div>';
            }
            ?>
            
            <div class="button-group">
                <a href="paycheck.html" class="calc-button"> Calculate Another</a>
                
            </div>
        </div>
    </div>

    <!-- FOOTER - Matching Strong Together -->
    <footer class="footer">
        Strong Together - Designed by Medede Kanaza.
    </footer>
</div>

</body>
</html>