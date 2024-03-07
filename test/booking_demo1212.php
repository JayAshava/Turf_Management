<?php
// Database configuration
$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "cus_login"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the date is selected
    if (!empty($_POST["booking_date"])) {
        // Sanitize the input to prevent SQL injection
        $booking_date = mysqli_real_escape_string($conn, $_POST["booking_date"]);
        
        // Insert the booking date into the database
        $query = "INSERT INTO bookings (booking_date) VALUES ('$booking_date')";
        $result = mysqli_query($conn, $query);
        
        if ($result) {
            echo "Booking slot successfully reserved for date: " . $booking_date;
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Please select a date for booking slots.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Booking Form</title>
</head>
<body>
    <h2>Book a Slot</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="booking_date">Select Date:</label>
        <input type="date" id="booking_date" name="booking_date" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
