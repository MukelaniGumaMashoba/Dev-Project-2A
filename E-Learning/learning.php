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
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="learning.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../menu.css">
</head>
<body>
<header id="header">
        <a href="" class="logo">Eclectic</a>
        <div class="navigation">
            <div class="navigation-items">

                <?php
                if(isset($_SESSION["userUsername"])){
                    echo "<a href='../Home.php'>Home</a>";
                    echo "<a href='learning.php'>E-Learning</a>";
                    echo "<a href='../Match A Graduate/job_post.php'>Match a graduate</a>";
                    echo "<a href='../ecd.php'>ECD</a>";
                    echo "<a href='../Funds/Fund.php'>Funds</a>";
                    echo "
                    <img src='./images/user.png' alt='' class='user-pic' onclick='toggleMenu()'>

                    <div class='sub-menu-wrap' id='subMenu'>
                        <div class='sub-menu'>
                            <div class='user-info'>
                                <img src='./images/user.png'>
                                <h3>$_SESSION[userUsername]</h3>
                            </div>  
                            
                            <hr>
                            <a href='../logout.php' class='sub-menu-link'>
                                <img src='./images/logout.png' alt=''>
                                <p>Logout</p>
                                <span>></span>
                            </a>
        
                        </div>
                    </div>
                    ";

                }
                else{
                    echo "<a href='../Home.php'>Home</a>";
                    echo "<a href=''>E-Learning</a>";
                    echo "<a href=''>Match a graduate</a>";
                    echo "<a href=''>ECD</a>";
                    echo "<a href=''>About</a>";
                    echo "<a class='logIn' href='./SignLogin/login.php'>Log in</a>";
                    echo "<a class='signUp' href='./SignLogin/signup.php'>Sign up</a>";
                }

                ?>
                
            </div>
        </div>
    </header>
    <br/>

    <div class="container">
        <br/><h1>E-Learning</h1><br/>

        <form id="form" action="">
            <div class="formI">
                <input type="text" class="formInput" id="search" placeholder="search bar" required>
            </div>
            <br/>
            <div class="formI">
                <input type="submit" class="btnSearch" value="search">
            </div>
        </form>

        <p id="p"></p>

        <div class="">
            <div class="">
                <div id="videos">

                </div>
            </div>
        </div>

    </div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="learning.js"></script>
<script src="../menu.js"></script>
</html>