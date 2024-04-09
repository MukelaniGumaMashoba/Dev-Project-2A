<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fund.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../footer.css">
    <link rel="stylesheet" href="../menu.css">
    <title>Donation</title>
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
                    echo "<a href='../Match A Graduate/job_post.php'>Match a graduate</a>";
                    echo "<a href='../ecd.php'>ECD</a>";
                    echo "<a href=''>Funds</a>";
                    echo "
                    <img src='../images/user.png' alt='' class='user-pic' onclick='toggleMenu()'>

                    <div class='sub-menu-wrap' id='subMenu'>
                        <div class='sub-menu'>
                            <div class='user-info'>
                                <img src='../images/user.png'>
                                <h3>$_SESSION[userUsername]</h3>
                            </div>  
                            
                            <hr>
        
                            </a>
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
        <video class="videos active" src="../videos/graduation.mp4" autoplay muted loop></video>
        
        <div class="content active">
            <!-- <h1>EARLY CHILDHOOD<span><br> DEVELOPMENT PROGRAM</span></h1> -->
            <p class="para">We all love to see progress and success to our schools and future
                    students.So why dont you contribute to their success. Be part of their success
                    by supporting by donating.</p>
               <p class="para2">Funding</p>
        </div>

        <div class="videoSlider">
            <div class="navBtn active"></div>
        </div>
    </main>

        <div class="container">
            <div class="EFT">
                <h2>Donate Via EFT</h2>
                <span>Name: Eclectic Dreamers</span><br>
                <span>Bank : Standard Bank</span><br>
                <span>Account number : 52023231938</span><br>
                <span>Branch Number : 233542</span><br>
                <spa>SWIFT: FRNZAJJ</spa>
            </div>
        </div>

    <section class="form">
        <div>
            <h1>
                <center>Add Beneficiary</center>
            </h1>
            <div id="Dorm">
                <form class="Dorm" action="https://sandbox.payfast.co.za​/eng/process" method="post" autocomplete="off">
                    <div>
                        <label>Name</label> <br><input type="text" autocomplete="given-name" name="name_last" required>
                    </div>

                    <input type="hidden" name="item_name" value="Donation Money">

                    <div>
                        <label>Email</label> <br><input type="email" name="email_address" autocomplete="email" required>
                        <input type="hidden" name="email_confirmation" value="1">
                    </div>

                    <div>
                        <label>Company</label> <br><input type="text" autocomplete="organization-title">
                    </div>

                    <div>
                        <label>Phone Number</label> <br><input type="number" autocomplete="tel-local" maxlength="10">
                    </div>

                    <div>
                        <label>Card Number</label><br>
                        <input type="number" placeholder="1123-4354-4653-4256" name="number" maxlength="16"
                            maxlength="16" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" required>
                    </div>

                    <div>
                        <label>CVV</label><br>
                        <input type="number" name="CVV" maxlength="3" autocomplete="cc-number" required>
                    </div>

                    <input type="hidden" name="confirmation_address" value="222175892@student.uj.ac.za">

                    <div>
                        <label>Donate Amount</label><br>
                        <input type="number" name="amount" placeholder="R100.00" value="" required>
                        <!-- <input type="hidden" name="amount" value="120"> -->
                    </div>

                    <input type="hidden" name="item_name" value="Donation Eclectic Dreamers">

                    <div>
                        <button type="submit">Donate</button>
                    </div>

                    <input type="hidden" name="merchant_id" value="10000100">
                    <input type="hidden" name="merchant_key" value="46f0cd694581a">

                    <input type="hidden" name="item_name" value="Donation">

                    <input type="hidden" name="return_url" value="http://localhost/EclecticDreamer_Group8/HomePage/Funds/Fund.php">
                    <input type="hidden" name="cancel_url" value="http://localhost/EclecticDreamer_Group8/HomePage/Funds/Fund.php">

                </form>
            </div>
    </section>

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