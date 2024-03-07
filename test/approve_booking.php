<?php
include("db_connect.php");

if(isset($_GET['id'])) {
    $booking_id = $_GET['id'];
    // Update booking status to approved in the database
    $query = "UPDATE bookings SET status='approved' WHERE booking_id=$booking_id";
    mysqli_query($conn, $query);
    header("Location: admin_bookings.php");
}
?>
