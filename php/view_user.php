<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th { 
            background-color: #f2f2f2;
        }
        .btn-view {
            background-color: green;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 4px;
        }
        .btn-view:hover {
            background-color: darkgreen;
        }
        
        
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .view-user-details label {
            display: inline-block;
            width: 120px; /* Adjust width as needed */
            margin-right: 20px; /* Adjust spacing between labels */
            font-weight: bold;
        }
        .view-user-details p {
            display: inline-block;
            margin: 0;
        }


        /* Add more styles for other buttons if needed */
    </style>
</head>
<body>


<?php
// Establish a database connection (replace these values with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cus_login";

if(isset($_GET['id'])) {
    // Get the ID from the URL
    $id = $_GET['id'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to select all users
$sql = "SELECT * FROM user WHERE id=$id";  
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
  ?>
<div class="container">
    <h1>User Details</h1>
    <div class="view-user-details">
    <label for="id">ID:</label>
        <p><?php echo $row['id']; ?></p><br><br>


        <label for="fname">First Name:</label>
        <p><?php echo $row['fname']; ?></p><br><br>

        <label for="lname">Last Name:</label>
        <p><?php echo $row['lname']; ?></p><br><br>


        <label for="phone_no">Phone Number:</label>
        <p><?php echo $row['phone_no']; ?></p><br><br>

        <label for="email_id">Email_id:</label>
        <p><?php echo $row['email_id']; ?></p><br><br>


        <label for="address">Address:</label>
        <p><?php echo $row['address']; ?></p><br>

            <!-- Add more details as needed -->
        </form>
    </div>
</div>
<?php }
}        else {
        echo "No user found with ID: $id";
    }

    $conn->close();
} else {
    echo "User ID not provided.";
}
 
?>
</body>
</html>
