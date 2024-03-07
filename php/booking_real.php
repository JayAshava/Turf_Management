<?php
session_start(); // Start the session to access session variables

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect user to index page or handle the situation where user is not logged in
    header("Location: index.php"); // Redirect to index page
    exit(); // Stop further execution
}

// Database connection
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "cus_login"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Add new slot
if(isset($_POST['add_slot'])) {
    $date = $_POST['date'];
    $name = $_POST['name'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $user_id = $_SESSION['user_id']; // Retrieve user_id from session

    // Construct the SQL query to insert a new slot
    $sql = "INSERT INTO slot_booking (date, user_id, name, start_time, end_time) VALUES ('$date', '$user_id', '$name', '$start_time', '$end_time')";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>