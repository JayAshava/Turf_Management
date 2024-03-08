<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="/xampp/htdocs/project6/css/admindash.css">

	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="admindashboard.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="slot_management_admin.php  ">
                <i class='bx bx-calendar-event'></i>
					<span class="text">Slot Management</span>
				</a>
			</li>
			<li>
				<a href="#">
                <i class='bx bx-credit-card'></i>
					<span class="text">Payment Management</span>
				</a>
			</li>
			<li>
				<a href="manageuser_1.php">
                <i class='bx bxs-group' ></i>
					<span class="text">Manage Users</span>

				</a>
			</li>
			<li>
				<a href="Feedbackreport.php">
                <i class='bx bxs-message-dots' ></i>
					<span class="text">Feedback</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="adminindex.php " class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				
			</a>
			<a href="#" class="profile">
				<img src="/xampp/htdocs/project6/photo/usericon.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul>
						<li>
						<a href="admindashboard.php">Home</a>
						<i class='bx bx-chevron-right' ></i>
						<a class="active" href="#">ManageUser</a>
						</li>
					</ul>
				</div>
				
			</div>
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
        .btn {
            padding: 8px 12px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
        .btn-view {
            background-color: green;
            color: white;
        }
        .btn-delete {
            background-color: grey;
            color: white;
        }
        .btn-block {
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            session_start();
            
            // Connect to the database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "cus_login";
            
            $conn = new mysqli($servername, $username, $password, $database);
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            // Query to retrieve user information
            $sql = "SELECT id, fname, lname FROM user";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["fname"] . "</td>";
                    echo "<td>" . $row["lname"] . "</td>";

                    echo "<td>
                    <button class='btn btn-view' data-id='" . $row["id"] . "'>View</button>
                  <button class='btn btn-delete' data-id='" . $row['id'] . "'>Delete</button>
                  <button class='btn btn-block' onclick='blockUser(" . $row['id'] . ")'>Block</button></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>0 results</td></tr>";
            }
            $conn->close();
        ?>
        
    </tbody>
</table>
<script>
    // Add event listener for view buttons
    document.querySelectorAll('.btn-view').forEach(button => {
        button.addEventListener('click', function() {
            // Get the user ID from the data-id attribute
            const userId = this.getAttribute('data-id');
            
            // Redirect to view_user.php with the user ID as a query parameter
            window.location.href = 'view_user.php?id=' + userId;
        });
    });

    // Add event listener for delete buttons
    document.querySelectorAll('.btn-delete').forEach(button => {
        button.addEventListener('click', function() {
            // Get the user ID from the data-id attribute
            const userId = this.getAttribute('data-id');
            
            // Here you can remove the code for deletion and only log the action
            console.log("Deleting user with ID:", userId);
            
            // Remove the row from the UI
            this.closest('tr').remove();
        });
    });


    function blockUser(userId) {
    // Here you can add code to perform the blocking action
    // For demonstration purposes, let's just log a message to the console
    console.log("User with ID " + userId + " blocked.");
    // You can replace the above line with the actual code to block the user
    // For example, you can make an AJAX request to your server to update the database
}
</script>

</body>
</html>
