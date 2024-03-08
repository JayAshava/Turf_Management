<?php
include "config.php";
session_start();
$fname = isset($_SESSION['name']) ? $_SESSION['name'] : 'GUEST';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            margin: 0;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: flex-end;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li:first-child {
            margin-left: 0;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        main {
            padding: 10px;
        }

        section {
            margin-bottom: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        
        /* Additional styles for the second section */
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .sport {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            margin: 20px;
            width: 300px;
            overflow: hidden;
        }
        
        .sport:hover {
            transform: translateY(-10px);
        }
        
        .sport img {
            width: 100%;
            height: 60%;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        
        .sport:hover img {
            transform: scale(1.1);
        }
        
        .sport h2 {
            margin-top: 0;
            font-size: 24px;
            color: #333;
        }
        
        .sport p {
            margin-bottom: 20px;
            color: #666;
            font-size: 16px;
        }
        
        .sport button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 16px;
        }
        
        .sport button:hover {
            background-color: black;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome!<?php echo $fname !== 'GUEST' ? ' ' . $fname : ''; ?></h1>
        <nav>
            <ul>
                <li><a href="userhomedemo.php">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="about_us.php">Contact Us / About Us</a></li>
                <li><a href="index.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <!-- This section can be used for other content -->
        </section>
        <div class="container">
            <div class="sport">
                <h2>Cricket</h2>
                <img src="/xampp/htdocs/project6/photo/cricket.jpg" alt="Cricket">
                <p>Matches played on turf pitches tend to favor skilled batsmen who can adapt to the varying conditions and make the most of the true bounce and pace of the ball.</p>
                <button>Book Now</button>
            </div>
            <div class="sport">
                <h2>Football</h2>
                <img src="/xampp/htdocs/project6/photo/football3.jpg" alt="Football">
                <p>Turf football is like playing soccer on a really nice carpet. It's smooth, fast, and you can play on it no matter what the weather is like.</p>
                <button>Book Now</button>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Our Website. All rights reserved.</p>
    </footer>
</body>
</html>
