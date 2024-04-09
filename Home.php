<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="menu.css">

</head>
<body>
    <header>
        <a href="" class="logo">Eclectic</a>
        <div class="navigation">
            <div class="navigation-items">

                <?php
                if(isset($_SESSION['userUsername'])){
                    echo "<a href='Home.php'>Home</a>";
                    echo "<a href='E-Learning/learning.php'>E-Learning</a>";
                    echo "<a href='Match A Graduate/job_post.php'>Match a graduate</a>";
                    echo "<a href='ecd.php'>ECD</a>";
                    echo "<a href='Funds/Fund.php'>Funds</a>";
                    echo "
                    <img src='./images/user.png' alt='' class='user-pic' onclick='toggleMenu()'>

                    <div class='sub-menu-wrap' id='subMenu'>
                        <div class='sub-menu'>
                            <div class='user-info'>
                                <img src='./images/user.png'>
                                <h3>$_SESSION[userUsername]</h3>
                            </div>  
                            
                            <hr>

                            <a href='logout.php' class='sub-menu-link'>
                                <img src='./images/logout.png' alt=''>
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
                    echo "<a class='logIn' href='./SignLogin/login.php'>Sign Up</a>";
                    // echo "<a class='signUp' href='./SignLogin/signup.php'>Sign up</a>";
                }

                ?>
                
            </div>
        </div>
    </header>

    <main class="home">
        <video class="videos active" src="videos/graduation.mp4" autoplay muted loop></video>
        <video class="videos" src="videos/library.mp4" autoplay muted loop></video>
        <video class="videos" src="videos/unit.mp4" autoplay muted loop></video>
        <video class="videos" src="videos/thinking.mp4" autoplay muted loop></video>
        
        <div class="content active">
            <h1>Eclectic <span><br>Dreams</span></h1>

            <p class="para">Dare to dream far beyond your wildest limitations. Education is the passport to the future, for tomorrow belongs to those who prepare for it today.</p>
               <p class="para2"> Inspire | Educate | Empower | Help </p>
            <a href="../HomePage/ChatApp/index.php">Chat</a>
        </div>
        <div class="content">
            <h1>Eclectic <br><span>Dreamers</span></h1>
            <p class="para">The disparities that exist in the quality of education across South African schools, with many of the schools lacking basic infrastructure and resources. 
            </p>
            <a href="../HomePage/ChatApp/index.php">Chat</a>
        </div>
        <div class="content">
            <h1>Eclectic <br><span>Dreamers</span></h1>
            <p class="para">A virtual learning environment where top-performing schools contribute to the site by uploading educational content that can be accessed by all underprivileged schools. Think of it as one big online classroom that caters to thousands of learners at the same time across the country. The content will be organized in grades, spanning from primary to high school education. 
            </p>
            <a href="../HomePage/ChatApp/index.php">Chat</a>
        </div>
        <div class="content">
            <h1>Eclectic <br></r><span>Dreamers</span></h1>
            <p class="para">Well-performing schools can play an important role in supporting underprivileged schools and improving the overall quality of education in their communities.
                They can share resources such as textbooks and teaching materials.
                
                </p>
                <a href="../HomePage/ChatApp/index.php">Chat</a>
        </div>

        <div class="videoSlider">
            <div class="navBtn active"></div>
            <div class="navBtn"></div>
            <div class="navBtn"></div>
            <div class="navBtn"></div>
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
                <a href="AboutusFinal/Aboutus/about.php" class="btn1">ABOUT</a>
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
<script src="java.js"></script>
<script src="menu.js"></script>
</html>