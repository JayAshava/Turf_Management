<!DOCTYPE html>
<html>
<head>
    <title>Turf Booking System</title>
    <style>
        /* Basic CSS for styling */
        body{
            background-image: url(/xampp/htdocs/project6/photo/football2.jpg);
            background-size: cover;
            position:relative;
        }
        .booking-form {
    width: 380px;
    height: auto;
    position: relative;
    margin: 0 auto;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent white background */
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Optional: add a shadow effect */
}

.booking-form h1 {
    text-align: center;
    margin-bottom: 20px;
}

.booking-form form {
    text-align: center;
}

.booking-form label {
    display: block;
    margin-bottom:  5px;;
    margin-top: 5px;
}

.booking-form input[type="date"],
.booking-form input[type="time"],
.booking-form input[type="number"] {
    width: calc(100% - 22px); /* Adjusting input width */
    padding: 10px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

.booking-form input[type="submit"] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
    padding: 10px;
    margin: 10px;
    border-radius: 5px;
}

.booking-form input[type="submit"]:hover {
    background-color: #45a049;
}
.booking-form input[type="text"] {
    width: calc(100% - 22px); /* Adjusting input width */
    padding: 10px;
    margin-bottom: 10px; /* Add margin-bottom for spacing */
    box-sizing: border-box;
}

    </style>
</head>
<body>
    

<div class="booking-form">
    <h1>Book Turf Slot</h1>
    <form action="process_booking.php" method="post">
        <label for="booking_date">Date:</label>
        <input type="date" id="booking_date" name="booking_date" required><br>
    </br>
        <label for="start_time">Start Time:</label>
        <input type="time" id="start_time" name="start_time" required><br>
    </br>
        <label for="end_time">End Time:</label>
        <input type="time" id="end_time" name="end_time" required>
        <br></br>
        <br><label for="hours">Number of Hours:</label></br>
        <br><input type="number" id="hours" name="hours" required></br>

        <label for="total_price">Total Price:</label>
        <input type="text" id="total_price" name="total_price" readonly>

        <input type="submit" value="Book Slot">
    </form>
</div>

<script>
    // JavaScript for calculating total price based on hours
    document.getElementById("hours").addEventListener("input", function() {
        var hours = parseFloat(this.value);
        var price_per_hour = 800; // Set your price per hour here
        var total_price = hours * price_per_hour;
        document.getElementById("total_price").value = "Rs" + total_price.toFixed(2);
    });
</script>

</body>
</html>
