<?php
include "config.php";
session_start();
ob_start();
$message="";
if(isset($_POST['login'])){
    $email_id=$_POST['email_id'];
    $password=$_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    echo $email_id." ".$password;
    $sql="SELECT * From user where email_id= ?";
    $stmt=$conn->prepare($sql);
        $stmt->bind_param("s",$email_id);
        if ($stmt->execute()) {
            $result=$stmt->get_result();
            if($result->num_rows>0){
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
    <title>Document</title>
    <link rel="stylesheet" href="/xampp/htdocs/project6/css/style.css">
    <script src="/xampp/htdocs/project6/js/index.js" defer></script>
    <head>
   
</head>

</head>

<body>
    <div class="navbar">
        <div>
            <a href='index.php '>Turf Management System</a>
        </div>
       
        <nav>
            <ul id='MenuItems'>
                <li><a href='#' onclick="document.getElementById('home').style.display='flex';document.getElementById('login-form').style.display='none';document.getElementById('service').style.display='none';" style="width:auto;">Home</a></li>
                <li><a href='service.php' onclick="document.getElementById('service').style.display='flex';document.getElementById('login-form').style.display='none';document.getElementById('home').style.display='none';" style="width:auto;">Services</a></li>
                <li><a href='/php/adminindex.php'>Admin</a></li>
                <li><a href='#'>About us</a></li>
                <li><a href='loginform.php'>Login</a></li>
            </ul>
        </nav>
   
    </div>
    <!-- Other content here -->

</body>

        <div id='login-form' class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button' onclick='login()' class='toggle-btn'>Log In</button>
                    <button type='button' onclick='register()' class='toggle-btn'>Register</button>
                </div>
                <form id='login' class='input-group-login' action="" method="post">
                <?php include "loginform.php"; ?>

                </form>
                <form id='register' class='input-group-register' action='connect.php' method='POST'>
                 <?php include "register_user.php"; ?>

                </form>
                <form id='forget-password' class='input-group-login' onsubmit='event.preventDefault()'>
                    <input type='text' class='input-field' placeholder='Email Id' required>
                    <input type='password' class='input-field' placeholder='New Password' required>
                    <input type='password' class='input-field' placeholder='Confirm Password' required>
                    <button type='submit' class='submit-btn' onclick="login()">Change Password</button>
                </form>
            </div>
        </div>
        <div id='home' class='home-page'>
            <div class='home'> 
                
            <section class="pimg1">
                    <div class="ptext">  
                    </div>
            </section>
            <section class="section section-1">
            <h2>Sports</h2>
            <p>
             Sports turf refers to the specialized type of grass or artificial surface used for athletic activities such as soccer,
             cricket, football, baseball, and golf.
             It's designed to withstand heavy use and provide a safe and reliable playing surface for athletes.
           </p>
            </section>


                <section class="pimg2">
                    <div class="ptext">
                         </div>
                </section>
               
               
                 <section class="section section-2">
                    <h2>Playing Area</h2>
                    <p>
                    A turf playing area, commonly referred to as a turf field or turf pitch, 
                    is a specially designed surface for various sports and recreational activities.
                    Unlike natural grass fields, turf fields are made of synthetic fibers, typically polyethylene or polypropylene,
                    woven into a backing material and filled with infill materials such as rubber granules or sand to provide stability and cushioning. 
                    </p>
                </section>


                <section class="pimg3">
                    <div class="ptext">
                    </div>
                </section>
               
                <section class="section section-3">
                    <h2>Safety</h2>
                    <p>
                     Safety is a paramount concern in sports and recreation.
                     Turf fields are designed with safety features to reduce the risk of injuries for athletes. 
                     The cushioning provided by infill materials helps absorb impact forces, reducing the likelihood of sprains,
                     strains, and abrasions. Additionally, turf systems may incorporate shock pads or underlayments to further enhance player safety,
                     especially in high-impact sports like football or rugby.
                    </p>
                </section>
            
                        <section class="pimg4">
                    <div class="ptext">

                    </div>
                     </section>

                 <section class="section section-4">
                <h2>Versatile</h2>
                   <p>
                    a turf playing area provides a versatile and durable surface for a wide range of sports and recreational activities, 
                    offering consistent performance and playability in various weather conditions. 
                    Proper installation, maintenance, 
                    and consideration of environmental factors are essential for ensuring the longevity and sustainability of turf fields.
                    </p>
                </section>
            </div>
</div>

</body>


</html>