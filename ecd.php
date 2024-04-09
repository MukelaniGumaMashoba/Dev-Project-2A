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
    <link rel="stylesheet" href="ecd.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="menu.css">
</head>
<body>
    <header>
        <a href="" class="logo">Eclectic</a>
        <div class="navigation">
            <div class="navigation-items">

                <?php
                if(isset($_SESSION["userUsername"])){
                    echo "<a href='Home.php'>Home</a>";
                    echo "<a href='E-Learning/learning.php'>E-Learning</a>";
                    echo "<a href='./Match A Graduate/job_post.php'>Match a graduate</a>";
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
                    echo "<a class='logIn' href='./SignLogin/login.php'>Log in</a>";
                    echo "<a class='signUp' href='./SignLogin/signup.php'>Sign up</a>";
                }

                ?>
                
            </div>
        </div>
    </header>

    <main class="home">
        <video class="videos active" src="videos/graduation.mp4" autoplay muted loop></video>
        
        <div class="content active">
            <!-- <h1>EARLY CHILDHOOD<span><br> DEVELOPMENT PROGRAM</span></h1> -->
            <p class="para">Dare to dream far beyond your wildest limitations. Education is the passport to the future, for tomorrow belongs to those who prepare for it today.</p>
               <p class="para2">EARLY CHILDHOOD DEVELOPMENT</p>
        </div>

        <div class="videoSlider">
            <div class="navBtn active"></div>
        </div>
    </main>

    <section class="ecd">
        <div class="ecd_section">
            <div class="ecd_text">
                <h1>EARLY CHILDHOOD DEVELOPMENT PROGRAM </h1>
                <h5>Developing early literacy <span>skills</span> is essential <span>for future academic success</span></h5>
                <p>
                    Introduce early childhood development programs in underprivileged communities to foster basic reading and numeracy skills.
                    Developing early literacy skills is essential for future academic success.
                    This can be done in collaboration with the schools that already exist in these communities, where children can partake in activities such as reading, storytelling, book-making, problem-solving, mathematics, etc.
                    Part of the funds raised through our initiative will go into investing in these programs so that the children have the adequate resources they need whilst ensuring that the program is of high quality and provides the best possible support for the children.
                </p>
            </div>
            <video controls src="videos/thinking.mp4"></video>
        </div>
    </section>

    <section class="ecd">
        <div class="ecd_section">
            <img class="pic1" src="img/ecd2.jpg" alt="">
            <div class="ecd_text">
                <h5>Developing early literacy <span>skills</span> is essential <span>for future academic success</span></h5>
                <p>
                Early childhood development programs typically provide a curriculum that is tailored to the 
                needs and interests of young children. The curriculum may include activities that promote 
                cognitive development (such as reading and math activities), social-emotional development 
                (such as cooperative play and conflict resolution), and physical development (such as outdoor play and movement activities).
                </p>
            </div>
        </div>
    </section>
    
    <section class="ecd">
        <div class="ecd_section">
            <div class="ecd_text">
                <h5>Developing early literacy <span>skills</span> is essential <span>for future academic success</span></h5>
                <p>
                The primary goal of early childhood development programs is to support children's healthy 
                development in all areas of their lives, including their physical, emotional, cognitive, 
                and social development.
                Health and nutrition services: Many early childhood development programs provide health 
                and nutrition services to ensure that children are healthy and well-nourished. These 
                services may include health screenings, immunizations, and healthy meal options.
                </p>
            </div>
            <video controls src="videos/writing.mp4"></video>
        </div>
    </section>

    <section class="ecd">
        <div class="ecd_section">
        <img class="pic1" src="img/ecd4.jpg" alt="">
            <div class="ecd_text">
                <h5>Developing early literacy <span>skills</span> is essential <span>for future academic success</span></h5>
                <p>
                Parent education and involvement: Early childhood development programs often involve 
                parents in their children's education and development. This may include parent-teacher 
                conferences, parenting workshops, and opportunities for parents to volunteer in the 
                classroom.

                Support for children with special needs: Many early childhood development programs 
                provide services for children with special needs, such as speech therapy, occupational 
                therapy, and other specialized services.
                </p>
            </div>
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
    <script src="menu.js"></script>
</HTML>