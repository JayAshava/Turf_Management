<?php
// Check if admin is logged in
include('session.php');
if(!isset($_SESSION['login_user'])){
   header("location: adminindex.php");
}
// Include database connection file
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Bookings</title>
</head>
<body>
    <div class="admin-container">
        <h2>Manage Bookings</h2>
        <table>
            <tr>
                <th>Booking ID</th>
                <th>User ID</th>
                <th>Slot ID</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php
            // Fetch bookings from database
            $query = "SELECT * FROM bookings";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['booking_id']."</td>";
                echo "<td>".$row['user_id']."</td>";
                echo "<td>".$row['slot_id']."</td>";
                echo "<td>".$row['status']."</td>";
                echo "<td><a href='approve_booking.php?id=".$row['booking_id']."'>Approve</a> | <a href='cancel_booking.php?id=".$row['booking_id']."'>Cancel</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>


<style>
/* Add or modify styles as needed */
.admin-container {
    width: 80%;
    margin: 20px auto;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
}
</style>