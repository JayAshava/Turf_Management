<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Slot Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
        }
        form {
            margin: 20px auto;
            width: 300px;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form label {
            display: block;
            margin-bottom: 5px;
        }
        form input[type="text"],
        form input[type="time"],
        form input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        tr:hover {
            background-color: #f2f2f2;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        td a {
            margin-right: 5px;
            text-decoration: none;
            color: #333;
        }
        td a:hover {
            color: red;
        }
    </style>
</head>
<body>
    <h2>Admin Slot Management</h2>
    <h3>Manage Slots</h3>
    <table>
        <tr>
            <th>Slot ID</th>
            <th>Slot Name</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Action</th>
        </tr>
        <?php
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



        // Edit slot
        if(isset($_POST['edit_slot'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $start_time = $_POST['start_time'];
            $end_time = $_POST['end_time'];

            $sql = "UPDATE slots SET name='$name', start_time='$start_time', end_time='$end_time' WHERE id='$id'";

            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }

        // Delete slot
        if(isset($_GET['delete_id'])) {
            $id = $_GET['delete_id'];

            $sql = "DELETE FROM slots WHERE id='$id'";

            if ($conn->query($sql) === TRUE) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . $conn->error;
            }
        }

        // Fetch slots data
        $sql = "SELECT * FROM slots";
        $result = $conn->query($sql);

        $slots = array();

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $slots[] = $row;
            }
        }

        foreach ($slots as $slot): ?>
            <tr>
                <td><?php echo $slot['id']; ?></td>
                <td><?php echo $slot['name']; ?></td>
                <td><?php echo $slot['start_time']; ?></td>
                <td><?php echo $slot['end_time']; ?></td>
                <td>
                    <a href="edit_slot.php?id=<?php echo $slot['id']; ?>">Edit</a>
                    <a href="?delete_id=<?php echo $slot['id']; ?>" onclick="return confirm('Are you sure you want to delete this slot?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
