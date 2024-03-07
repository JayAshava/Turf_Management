<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* CSS for the modal */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div id="profileModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <!-- Add your profile information here -->
        <h2>Admin Profile</h2>
        <?php
        $servername = "localhost";
        $username = "root"; 
        $password = ""; 
        $dbname = "cus_login"; 

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query to fetch admin profile information
        $query = "SELECT name, email FROM admin"; // Assuming 'admin' is your table name
        $result = $conn->query($query);

        // Check if there is a result
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<p>Name: " . $row["name"] . "</p>";
                echo "<p>Email: " . $row["email"] . "</p>";
            }
        } else {
            echo "No admin profile found";
        }

        // Close database connection
        $conn->close();
        ?>
    </div>
</div>


<!-- Add a close button with class="close" -->
<span class="close">&times;</span>
</body>
</html>

<script>
    // JavaScript for the modal
    document.addEventListener('DOMContentLoaded', function() {
        var profileModal = document.getElementById('profileModal');
        var profileLink = document.querySelector('.profile');
        var closeBtn = document.querySelector('.close');

        profileLink.onclick = function() {
            profileModal.style.display = 'block';
        };

        closeBtn.onclick = function() {
            profileModal.style.display = 'none';
        };

        window.onclick = function(event) {
            if (event.target == profileModal) {
                profileModal.style.display = 'none';
            }
        };
    });
</script>
