<!DOCTYPE html>
<html>
<head>
    <title>Turf Booking System</title>
    <style>
        /* Basic CSS for styling */
        body {
            font-family: Arial, sans-serif;
            background-color: beige;
        }
        .booking-form {
            width: 380px;
            height: 380px; /* Adjusted height */
            position: relative;
            margin: 2% auto;
            max-width: 400px;
            padding: 10px;
            backdrop-filter: blur(5x);
            border-radius: 50px;
        }
        input[type="number"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="booking-form">
    <h1>Book Turf Slot</h1>
    <form action="process_booking.php" method="post">
        <!-- Removed date input -->
        <label for="hours">Number of Hours:</label><br>
        <input type="number" id="hours" name="hours" required min="1"><br><br>
        <label for="total_price">Total Price:</label>
        <input type="text" id="total_price" name="total_price" readonly>
        <input type="submit" value="Book Slot">
    </form>
</div>

<script>
    // JavaScript for calculating total price based on hours
    document.getElementById("hours").addEventListener("input", function() {
        var hours = parseFloat(this.value);
        if (hours < 1) {
            this.value = 1; // Set minimum value to 1 if user enters a negative number
            hours = 1;
        }
        var price_per_hour = 800; // Set your price per hour here
        var total_price = hours * price_per_hour;
        document.getElementById("total_price").value = "Rs" + total_price.toFixed(2);
    });
</script>

</body>
</html>
