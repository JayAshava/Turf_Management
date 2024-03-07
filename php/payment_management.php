<?php
// Database connection
$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "cus_login"; 
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Function to add a payment
function addPayment($user_id, $amount) {
    global $conn;
    $payment_date = date("Y-m-d");
    $sql = "INSERT INTO payment_management(user_id, amount, payment_date) VALUES ('$user_id', '$amount', '$payment_date')";
    if (mysqli_query($conn, $sql)) {
        echo "<div class='success'>Payment added successfully.</div>";
    } else {
        echo "<div class='error'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</div>";
    }
}

// Function to view payments
function viewPayments() {
    global $conn;
    $sql = "SELECT * FROM payment_management";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>Payment ID</th><th>User ID</th><th>Amount</th><th>Date</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["payment_id"]. "</td><td>" . $row["user_id"]. "</td><td>$" . $row["amount"]. "</td><td>" . $row["payment_date"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<div class='info'>No payments found.</div>";
    }
}

// Example usage
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST["user_id"];
    $amount = $_POST["amount"];
    addPayment($user_id, $amount);
}

// Close database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Payment Management</title>
    <style>

body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        h1, h2 {
            color: #333;
            text-align: center;
        }
        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .success {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            margin-bottom: 20px;
            text-align: center;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .error {
            background-color: #f44336;
            color: white;
            padding: 15px;
            margin-bottom: 20px;
            text-align: center;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .info {
            background-color: #2196F3;
            color: white;
            padding: 15px;
            margin-bottom: 20px;
            text-align: center;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        /* Your CSS styles */
    </style>
</head>
<body>
<h1>Admin Payment Management</h1>
    <form action="payment_management.php" method="post">
        <label for="user_id">User ID:</label>
        <input type="text" id="user_id" name="user_id" required><br>
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" required><br>
        <input type="submit" value="Add Payment">
        
    </form>
    <hr>
    <h2>Payments</h2>
    <?php
    viewPayments();
    ?>
    <!-- Your HTML content -->
</body>
</html>

