<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $booking_date = $_POST["booking_date"];
    $start_time = $_POST["start_time"];
    $end_time = $_POST["end_time"];
    $hours = $_POST["hours"];
    $total_price = $_POST["total_price"];

    // Here you can perform additional validation, such as checking if the fields are not empty, if the start time is before the end time, etc.

    // Example: Save the booking data to a database (you'll need to replace the database credentials and table name with your own)
    $servername = "localhost";
    $email_id= "email_id"; // Replace with your MySQL username
    $password = "password"; // Replace with your MySQL password
    $cus_login = "cus_login    "; // Replace with your MySQL database name

    // Create connection
    $conn = new mysqli($servername, $email_id, $password, $cus_login);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to insert the booking data into the database
    $sql = "INSERT INTO bookings (booking_date, start_time, end_time, hours, total_price) VALUES ('$booking_date', '$start_time', '$end_time', $hours, $total_price)";

    if ($conn->query($sql) === TRUE) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    // If the form is not submitted, redirect back to the booking form
    header("Location: booking_form.php");
    exit();
}
?>
