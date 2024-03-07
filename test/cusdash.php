<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
    </head>
    <style>
        *
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.navbar
{
    display: flex;
    align-items: center;
    padding: 20px;
    padding-left: 50px;
    padding-right: 30px;
    padding-top: 50px;
}
nav
{
    flex: 1;
    text-align: right;
}
nav ul 
{
    display: inline-block;
    list-style: none;
}
nav ul li
{
    display: inline-block;
    margin-right: 70px;
}
nav ul li a
{
    text-decoration: none;
    font-size: 20px;
    color: white;
    font-family: sans-serif;
}
.full-page
{
    height: 100%;
	width: 100%;
	background-image: linear-gradient(rgba(0, 0, 0, 0.153),rgba(0, 0, 0, 0.23)),url(/photo/turf1.png);
	background-position: center;
	background-size: cover;
	position: absolute;
}
.para{
    width: 50%;
    position: relative;
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  color: white;
  text-align: center;
  bottom: 50%;
}
.parah{
    color:grey;
    bottom:70% ;
    align-content:center;
}
</style>
<body>
    <div class="full-page">
        <div class="navbar">
            <div>
              <h2>  <a href='/php/index.php'>Turf Management System</a></h2>
            </div>
            <nav>
                <ul id='MenuItems'>
                <li><a href='#'>Home</a></li>
                <li><a href='#'>Update Profile</a></li>
                <li><a href='#'>About us</a></li>
                <li><a href='#'>Logout</a></li>
                </ul>
            </nav>
        </div>
        <form class="parah">
        <div class="para">
            <p>
                <h2> Book Turf </h2>
                <h3>
                Planning to organize a friendly match?
                Don't worry, just gather the friends and we will sort your match with the friendly crewmates
                Book your slot and be ready for the excitement</h3>
                <li><button class='Services' onclick="document.getElementById('services').style.display='block'"
                            style="width:auto;">Services</button></li>
            </p>
        </div>
        </form>
    </div>
</body>
</html>