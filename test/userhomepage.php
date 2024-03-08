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
    background-color: #262626; /* Dark background */
    color: #fff; /* White text */
}
header {
    background-image: url('/xampp/htdocs/project6/photo/football2.jpg'); /* Background image for the header */
    background-size: cover;
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
    background-color: #333; /* Dark gray background for the container */
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    overflow: hidden; /* Ensure the background doesn't overflow */
}
.sport {
    text-align: center;
    background-color: #444; /* Darker gray background for each sport section */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    margin: 20px;
    width: 300px;
    overflow: hidden; /* Ensure the background doesn't overflow */
}
.sport:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.7);
}
.sport img {
    width: 100%; /* Image fills its container */
    height: 60%;
    border-radius: 10px;
    margin-bottom: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    transition: transform 0.3s ease; /* Add transition effect */
}
.sport:hover img {
    transform: scale(1.1); /* Enlarge image on hover */
}
.sport h2 {
    margin-top: 0;
    font-size: 24px;
    color: #fff; /* White text */
    transition: color 0.3s ease; /* Add transition effect */
}
.sport:hover h2 {
    color: #007bff; /* Change color on hover */
}
.sport p {
    margin: 10px 0;
    color: #ccc; /* Light gray text */
    font-size: 16px;
    transition: color 0.3s ease; /* Add transition effect */
}
.sport:hover p {
    color: #fff; /* White text on hover */
}
.sport button {
    background-color: #007bff; /* Blue button */
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease; /* Add transition effects */
    font-size: 16px;
}
.sport button:hover {
    background-color: black; /* Darker blue on hover */
    transform: translateY(-3px); /* Move button up slightly on hover */
}
footer {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
    position: fixed;
    bottom: 0;
    width: 100%;
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
            <p>Enjoy a game of cricket with friends!</p>
            <button onclick="location.href='cricket_booking.php'">Book Now</button>
        </div>
        <div class="sport">
            <h2>Football</h2>
            <img src="/xampp/htdocs/project6/photo/football3.jpg" alt="Football">
            <p>Book your football match now!</p>
            <button onclick="window.location.href = '/football_booking.php';">Book Now</button>
        </div>
    </div>
    <footer>
        <p>About Us: We provide high-quality sports services to enthusiasts, ensuring a memorable experience for all.</p>
    </footer>
</body>
</html>
