    <?php 
    include "config.php";
    $message = "";
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // Password is correct, start a new session
            session_start();

            // Store data in session variables
            $_SESSION["loggedin"] = true;
            $_SESSION["email"] = $email;

            // Redirect user to dashboard
            header('location: /php/admindashboard.php');
            exit;
        } else {
            // Invalid credentials
            $message = "Invalid email or password";
        }
    }
    ?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Login</title>
        <style>
    body {
        font-family: Arial, sans-serif;
        background: url('/xampp/htdocs/project6/photo/turf\ football.jpg') no-repeat center center fixed;
        background-size: cover;
        display: flex;
        justify-content: left;
        align-items:center;
        height: 100vh;
        color: #fff;
        
    }

    .wrapper {
        
        width: 300px;
        padding: 30px 30px;
        background-color: rgba(0, 0, 0, 0.7);
        border-radius: 10px;
        margin: 50px auto;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    }

    h2 {
        font-family:serif;
        text-align: center;
        color: #fff;
    }

    p {
        font-family:initial;
        text-align: center;
        color: #ccc;
    }

    .form-group {
        margin-bottom: 5%;

    }
   label {
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
        color: #ccc;
    }

    input[type="text"],
    input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #666;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: rgba(255, 255, 255, 0.2);
            color: #fff;
            transition: border-color 0.3s ease, background-color 0.3s ease, color 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
        border-color: #4caf50;
        background-color: rgba(255, 255, 255, 0.3);
        color: #fff;
    }

    .btn {
        width: 100%;
        padding: 10px;
        background-color: #4caf50;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #45a049;
    }

    .help-block {
        color: #ff0000;
        font-size: 14px;
        margin-top: 5px;
    }

        </style>
    </head>

    <body>
        <div class="wrapper">
            <h2>Admin Login</h2>
            <?php if($message) echo "<p>$message</p>"; ?>
            <p>Please fill in your credentials to login.</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
                </div>    
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="login" class="btn btn-primary" value="Login">
                </div>
            </form>
        </div>    
    </body>
    </html>