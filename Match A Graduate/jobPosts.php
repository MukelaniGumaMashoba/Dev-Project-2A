<?php
require("./Config/server.php");
$sql = "SELECT * FROM `jobs`";
$result = $connection->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../footer.css">
    <link rel="stylesheet" href="../menu.css">
    <link rel="stylesheet" href="jobPosts.css">
    <link rel="stylesheet" href="popbox.css">
</head>
<body>
    <header>
        <a href="" class="logo">Eclectic</a>
        <div class="navigation">
            <div class="navigation-items">

                <?php
                if(isset($_SESSION['userUsername'])){
                    echo "<a href='../Home.php'>Home</a>";
                    echo "<a href='../E-Learning/learning.php'>E-Learning</a>";
                    echo "<a href='job_post.php'>Match a graduate</a>";
                    echo "<a href='../ecd.php'>ECD</a>";
                    echo "<a href='../Funds/Fund.php'>Funds</a>";
                    echo "
                    <img src='../images/user.png' alt='' class='user-pic' onclick='toggleMenu()'>

                    <div class='sub-menu-wrap' id='subMenu'>
                        <div class='sub-menu'>
                            <div class='user-info'>
                                <img src='../images/user.png'>
                                <h3>$_SESSION[userUsername]</h3>
                            </div>  
                            
                            <hr>

                            <a href='../logout.php' class='sub-menu-link'>
                                <img src='../images/logout.png' alt=''>
                                <p>Logout</p>
                                <span>></span>
                            </a>
        
                        </div>
                    </div>
                    ";

                }
                else{
                    echo "<a href='Home.php'>Home</a>";
                    echo "<a href=''>E-Learning</a>";
                    echo "<a href=''>Match a graduate</a>";
                    echo "<a href=''>ECD</a>";
                    echo "<a href=''>Funds</a>";
                    echo "<a class='logIn' href='./SignLogin/login.php'>Log in</a>";
                    echo "<a class='signUp' href='./SignLogin/signup.php'>Sign up</a>";
                }

                ?>
                
            </div>
        </div>
    </header>

    <main class="home">

        <div class="content active">
            <h1>JOBS POSTED <span><br></span></h1>
            <h2>See down below</h2>
    </main>
                <br>
    <body>

    <?php
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "
                <div class='job-card'>
                <div class='job-details'>
                    <h2>$row[ID] $row[JobTitle]</h2>
                    <span>Job Description: $row[JobDescription] </span><br>
                    <span>Job Requirements: $row[JobRequirements]</span><br>
                    <span>Location: $row[Location]</span><br>
                </div>
                <div class='job-contact'>
                    <h4>Contact</h4>
                    <span>Email: $row[Email]</span><br>
                    <span>Contact: $row[Contact] </span><br>
                    <span><a class='btnDelete' href='Delete.php?ID=$row[ID]'>Delete</a>
                    <a class='btnDelete' href='Update.php?ID=$row[ID]'>Update</a>
                    <form><input:submit</form></span><br>
                </div>
            </div>
                ";
            }
        }else{
            echo "No Jobs Found. Search Again Later";
        }

    ?>

<footer>
        <div class="row">
            <div class="col">
               <P>Above all else,the aim is to contribute in building our future professions of this country and not let them suffer from things
            they can't control.Proudly, Eclectic Dreamers.</P> 
            </div>
            <div class="col">
                <p>Email: EclecticDreamers@gmail.com</p>
                <p>Contact: 021 178 7985</p>
                <p>Organization: Eclectic Dreamers</p>
                <p>By: CEO</p>
                <br>
                <a href="../AboutusFinal/Aboutus/about.php" class="btn1">ABOUT</a>
            </div>
            <div class="col">
                <p>Street: 23 Bunting Road</p>
                <p>City: Johannesburg</p>
                <p>Area Code: 2092</p>
                <p>Company: Eclectic Dreamers</p>
            </div>
        </div>
    </footer>
</body>
<script src="../menu.js"></script>.
</html>