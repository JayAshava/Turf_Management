<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Service</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa; /* Light gray background */
        }
        header {
            background-image: url('/xampp/htdocs/project6/photo/football2.jpg'); /* Background image for the header */
            background-size: cover;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 32px;
            text-transform: uppercase;
            margin-bottom: 30px;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            background-image: url('/xampp/htdocs/project6/photo/football2.jpg'); /* Background image for the container */
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden; /* Ensure the background doesn't overflow */
        }
        .sport {
            text-align: center;
            background-color: #fff; /* White background for each sport section */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            margin: 20px;
            width: 300px;
            overflow: hidden; /* Ensure the background doesn't overflow */
        }
        .sport:hover {
            transform: translateY(-10px);
        }
        .sport img {
            width: 100%; /* Image fills its container */
            height: 60%;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease; /* Add transition effect */
        }
        .sport:hover img {
            transform: scale(1.1); /* Enlarge image on hover */
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
            background-color: #007bff; /* Blue button */
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 16px;
        }
        .sport button:hover {
            background-color: black; /* Darker blue on hover */
        }
    </style>
</head>
<body>
    <header>
        Sports Service
    </header>
    <div class="container">
        <div class="sport">
            <h2>Cricket</h2>
            <img src="/xampp/htdocs/project6/photo/cricket.jpg" alt="Cricket">
            <p>Matches played on turf pitches tend to favor skilled batsmen 
               who can adapt to the varying conditions and make the most of the true bounce and pace of the ball.</p>
            <button>Book Now</button>
        </div>
        <div class="sport">
            <h2>Football</h2>
            <img src="/xampp/htdocs/project6/photo/football3.jpg" alt="Football">
            <p>Turf football is like playing soccer on a really nice carpet. 
                It's smooth, fast, and you can play on it no matter what the weather is like.</p>
            <button>Book Now</button>
        </div>
    </div>
</body>
</html>
