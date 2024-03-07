<?php 

function encryptPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

function passwordsMatch($password, $confirmPassword) {
    return $password === $confirmPassword;
}

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone_no = $_POST['phone_no'];
$email_id = $_POST['email_id'];
$address = $_POST['address'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirm_password'];


if (!empty($fname) && !empty($lname) && !empty($phone_no) && !empty($email_id) && !empty($address) && !empty($password) && !empty($confirmPassword)) {
    if (passwordsMatch($password, $confirmPassword)) {
        $encryptedPassword = encryptPassword($password);
        
        $conn = new mysqli("localhost", "root", "", "cus_login");
        if($conn->connect_error) {
            die('Connection failed:' . $conn->connect_error);
        } else {
            $stmt = $conn->prepare("INSERT INTO user (fname, lname, phone_no, email_id, address, password) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $fname, $lname, $phone_no, $email_id, $address, $encryptedPassword);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            
            header('Location: /php/Regis.php');
            exit;
        }
    } else {
        echo "Password and Confirm Password do not match!";
    }
} else {
    echo "Please fill in all fields.";
}
?>
