<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/xampp/htdocs/project6/css/login_register.css">
          
</head>
<body>

    <form id='register' class='input-group-register' action='connect.php' method='POST'>
        <input type='text' class='input-field' placeholder='First Name' id='fname' name='fname' required>
        <input type='text' class='input-field' placeholder='Last Name ' id='lname' name='lname' required>
        <input type='phone' class='input-field' placeholder='Phone Number' id='phone_no' name='phone_no' required>
        <input type='email' class='input-field' placeholder='Email Address' id='email_id' name='email_id' required>
        <input type='text' class='input-field' placeholder='Address' id="address" name="address" required>
        <input type='password' class='input-field' placeholder='Enter Password' id='password' name='password' required>
        <input type='password' class='input-field' placeholder='Confirm Password' id='confirm_password' name='confirm_password' required>
        <input type='checkbox' class='check-box'><span>I agree to the terms and conditions</span>
        <button type='submit' class='submit-btn' name='register'>Register</button>
        
    </form>

</body>
</html>
