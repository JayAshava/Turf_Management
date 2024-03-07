<?php
include "config.php";
session_start();
ob_start();
$message="";

if(isset($_POST['login'])){
    $email_id=$_POST['email_id'];
    $password=$_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    $sql="SELECT * FROM user WHERE email_id= ?";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("s",$email_id);
    
    if ($stmt->execute()) {
        $result=$stmt->get_result();
        if($result->num_rows > 0){
            $rows=$result->fetch_assoc();
            $hashedPasswordFromDB = $rows['password'];
            // Compare hashed input password with hashed password from the database
            if (password_verify($password, $hashedPasswordFromDB)) {
                 // Passwords match, proceed with login
                 $_SESSION['name'] = $rows['fname'] . " " . $rows['lname'];
                 $_SESSION['email'] = $email_id;
                 header('Location: userhomedemo.php');
                 exit;
            } else {
                 // Passwords do not match
                $message = "Invalid Password";
            }
        }
        else {
            $message = "Invalid Email/Password";
        }
    } else {
        $message = "Some Error Occurred";
    }
}

echo $message;
ob_end_flush();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/login_register.css">
   
</head>
<body>
    <form id='login' class='input-group-login' action="" method="post">
        <input type='text' class='input-field' placeholder='email_id' id="email_id" name="email_id" required>
        <input type='password' class='input-field' placeholder='password' id="password" name="password" required>
        <input type='checkbox' class='check-box'><span>Remember Password</span>
        <a href="#" class="FP"><span onclick='forgetpassword()'>Forgot Password?</span></a>
        <button type='submit' class='submit-btn' name="login">Log in</button><br>
       <p>Not registered? <a href="register_user.php">Register here</a>.</p>
    </form>
</body>
</html>
