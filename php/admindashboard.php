<?php
// Establishing a database connection
$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "cus_login"; 


// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<
!DOCTYPE html>
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
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="slot_management_admin.php">
				<i class='bx bx-calendar-event'></i>
					<span class="text">Slot Management</span>
				</a>
			</li>
			<li>
				<a href="payment_management.php">
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
				<a href="#" class="logout">
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
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" >Home</a>
						</li>
					</ul>
				</div>
				
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						
						<p>New Customer</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<p>Customer</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<p>Total Payment</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Orders</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
					<tbody>
                            <?php
                            // PHP code for fetching recent orders
                            // Assuming you have a database connection established
                            $query = "SELECT * FROM slots ORDER BY date DESC LIMIT 4"; // Assuming 'orders' is your table name
                            $result = mysqli_query($conn, $query);

                            // Check if there are any records
                            if (mysqli_num_rows($result) > 0) {
                                // Loop through each row of the result set
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<tr>';
                                    echo '<td>' . $row['name'] . '</td>';
                                    echo '<td>' . $row['date'] . '</td>';
                                    echo '<td>' . $row['start_time'] . '</td>';
									echo '<td>' . $row['end_time'] . '</td>';
                                    echo '</tr>';
                                }
                            } else {
                                // No records found
                                echo '<tr><td colspan="3">No recent orders found</td></tr>';
                            }
                            ?>
                        </tbody>
						<thead>
							<tr>
								<th>User</th>
								<th>Date Order</th>
								<th>Status</th>
							</tr>
						</thead>
					</table>
				</div>
				
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="/xampp/htdocs/project6/js/admindash.js"></script>
</body>
</html>