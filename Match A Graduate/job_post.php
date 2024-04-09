<?php
require("./Config/server.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post A Job</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../footer.css">
    <link rel="stylesheet" href="../menu.css">
    <link rel="stylesheet" href="jobPosts.css">
    <link rel="stylesheet" href="job.css">


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
                    echo "<a href=''>Match a graduate</a>";
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
                    echo "<a href='Match A Graduate/job_post.php'>Match a graduate</a>";
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
    <h1 class="jobs">Post a Job<span><br></span></h1>
    <br>   

    <form  method="post">
            <div>
                <label for="job title" class="form-label">Job Title</label><br>
                <input type="text" name="job_title" class="" placeholder="Enter Job Title" required><br>

                <label for="job description" class="form-label">Job Description</label><br>
                <input type="text" name="job_description" class="" placeholder="Enter Job Description" required><br>

                <label for="job requirements" class="form-label">Job Requirements</label><br>
                <input type="text" name="job_requirements" class="" placeholder="Enter Job Requirements" required><br>

                <label for="location" class="form-label">Location</label><br>
                <input type="text" name="location" class="" placeholder="Enter Job Location" required><br>

                <label for="email" class="form-label">Email</label><br>
                <input type="email" name="email" class="" placeholder="organisation@mail.com" required><br>
    
                <label for="contact" class="form-label">Contact</label><br>
                <input type="text" name="contact" class="" placeholder="+27 65 254 9987" required><br>
            </div>
            <br>
            <button name="post" type="submit" class="">Post Job</button> 
        </form>
        <br>
        <h2>View Jobs Available</h2> <br> <button name="seeJob" type="submit" class=""><a href="jobPosts.php" style="background-color:transparent; color: white;">Jobs</a></button>
</div>
</main>
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
<script src="../menu.js"></script>
</html>