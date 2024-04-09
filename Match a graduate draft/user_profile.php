<?php
session_start();

if (!isset($_SESSION["name"]) || !isset($_SESSION["surname"]) || !isset($_SESSION["specialties"]) || !isset($_SESSION["email"]) || !isset($_SESSION["about"]) || !isset($_SESSION["gender"])  || !isset($_SESSION["phone"])  || !isset($_SESSION["birthday"]) || !isset($_SESSION["moreInfo"])) {
  header("Location: job_application_form.php");
  exit();
}

$name = $_SESSION["name"];
$surname = $_SESSION["surname"];
$specialties = $_SESSION["specialties"];
$email = $_SESSION["email"];
$gender= $_SESSION["gender"];
$birthday= $_SESSION["birthday"];
$phone= $_SESSION["phone"];
$about = $_SESSION["about"];
$moreInfo = $_SESSION["moreInfo"];

//time posted
$timestamp = time();
$date_posted = date("F j,Y, g:i a",$timestamp);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>
<style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    h1 {
      color: #333;
      margin-bottom: 20px;
    }

    .profile {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h1{
        padding:20px;
        margin: 0 auto;
        text-align:center;
        color:blue;
    }
    nav {
      background-color: #f1f1f1;
      padding: 10px;
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

    nav li {
      display: inline;
    }

    nav a {
      display: inline-block;
      padding: 10px;
      text-decoration: none;
      color: #333;
    }

    nav a:hover {
      background-color: #333;
      color: #fff;
    }
  </style>

<nav>   
        <ul>
        <li><a href="job_postings.php">Job Posts</a></li>
        <li><a href="job_application_form.php">Create profile</a></li>
        </ul>
  </nav>

    <h1>User Profile</h1>
    <div class="container">
        <div class="profile">
        <p>Name: <?php echo $name; ?></p>
        <p>Surname: <?php echo $surname; ?></p>
        <p>Gender: <?php echo $gender; ?></p>
        <p>Birthday: <?php echo $birthday; ?></p>
        <p>Phone: <?php echo $phone; ?></p>
        <p>Email: <?php echo $email; ?></p>
        <p>About: <?php echo $about; ?></p>
        <p>Specialties: <?php echo $specialties; ?></p>
        <p>More: <?php echo $moreInfo; ?></p>

        <?php echo "Posted on: " . $date_posted; ?> <br>
        </div>
    </div>
    

</body>
</html>


    
