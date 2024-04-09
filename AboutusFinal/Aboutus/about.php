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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../menu.css">

    <style>
      .facebook {
        background-color: #1877F2;
        color: #fff;
      }

      .twitter {
        background-color: #1DA1F2;
        color: #fff;
      }

      .instagram {
        background-color: #E4405F;
        color: #fff;
      }

      input{
        border-radius: 12px;
        padding: 12px;
      }

    </style>
    
</head>
<body>
<header>
        <a href="" class="logo">Eclectic</a>
        <div class="navigation">
            <div class="navigation-items">

                <?php
                if(isset($_SESSION['userUsername'])){
                    echo "<a href='../../Home.php'>Home</a>";
                    echo "<a href='../../E-Learning/learning.php'>E-Learning</a>";
                    echo "<a href='../../Match A Graduate/job_post.php'>Match a graduate</a>";
                    echo "<a href='../../ecd.php'>ECD</a>";
                    echo "<a href='../../Funds/Fund.php'>Funds</a>";
                    echo "
                    <img src='../../images/user.png' alt='' class='user-pic' onclick='toggleMenu()'>

                    <div class='sub-menu-wrap' id='subMenu'>
                        <div class='sub-menu'>
                            <div class='user-info'>
                                <img src='../../images/user.png'>
                                <h3>$_SESSION[userUsername]</h3>
                            </div>  
                            
                            <hr>

                            <a href='../../logout.php' class='sub-menu-link'>
                                <img src='../../images/logout.png' alt=''>
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
        <!-- <video class="videos active" src="../../videos/graduation.mp4" autoplay muted loop></video> -->
        
        <div class="content active">
        <h1 id="opening">About Eclectic Dreamers</h1>
            <p class="para"> We're a team of 6 people, co-Founders of Eclectic Dreamers.Briefly, we are simply students who are devoted into seeing change within the education department.</p>

        </div>

        <div class="videoSlider">
            <div class="navBtn active"></div>
        </div>
    </main>

  <div class="firstpart">
    <!-- <h1 id="opening">About Eclectic Dreamers</h1>
    <div class="contents">
        <h3 id="firstheader">Who we are</h3>
        <p>
            We're a team of 6 people, co-Founders of Eclectic Dreamers.Briefly, we are simply students who are devoted into seeing change within the education department.
           As part of the IT gurus, we figured if we can do something to bring a change to the school experience our little brothers
           and sisters get then why not just go ahead and do it.It may not be big but if it helps someone out there, the Eclectic Dreamers are happy to deliver.
        </p>

        <h3 id="secondheader">Our mission</h3>
        <p>
            Our focus is on the disparities that exist in the quality of education across South African schools, with many of the schools lacking basic infrastructure and resources.
            Not to mention the significant challenges schools have been facing regarding education inequality, particularly between rural and urban areas.It is sad to see such occurances
            and sit back and watch.It just came as a thought that if there are schools with resources and better education quality and schools that lack those within the same country...
            what harm can it do to share and help if you can.The <b>how</b> part is where we come in.It is for that reason the we created this virtual learning environment where top-performing
            schools contribute to the site by uploading educational content that can be accessed by all underprivileged schools.Think of it as one big online classroom that caters to thousands
            of learners at the same time across the country.<br>
            <br>
            Above all else,the aim is to contribute in building our future professions of this country and not let them suffer from things
            they can't control.Proudly,<b id="name">Eclectic Dreamers</b>.

        </p>
      </div> -->

      <section>
        <div class="row">
        </div>
        <div class="row">
          <div class="column">
            <div class="card">
              <div class="img-container">
                <img src="nonku.jpg">

              </div>
              <h3><b>Nonkululeko Majodina</b></h3>
              <p>BUSINESS ANALYST <br>PROJECT MANAGER<br>DOCUMENTATION</p>
            </div>

          </div>
          <div class="column">
            <div class="card">
              <div class="img-container">
                <img src="me.jpg" id="leko">

              </div>
              <h3><b>Nolwazi Thabethe</b></h3>
              <p>SOCIAL MEDIA MANAGER<br>BACKEND DEVELOPER<br>DOCUMENTATION<br></p>
            </div>

          </div>
          <div class="column">
            <div class="card">
              <div class="img-container">
                <img src="bile2.jpg">

              </div>
              <h3><b>Nqobile Masuku</b></h3>
              <p>FUllSTACK DEVELOPER<br>BUSINESS ANALYST<br><br></p>
            </div>

          </div>
          <div class="column">
            <div class="card">
              <div class="img-container">
                <img src="gradi2.jpg">

              </div>
              <h3><b>Gradi Mudiangombe</b></h3>
              <p>LEAD FULL STACK DEVELOPER</p>
              <p>UI DESIGNER</p>
            </div>

          </div>
          <div class="column">
            <div class="card">
              <div class="img-container">
                <img src="mukelani.jpg">

              </div>
              <h3><b>Mukelani Mashoba</b></h3>
              <p>FULLSTACK DEVELOPER</p>
              <p>UI DESIGNER</p>
              <p></p>
            </div>

          </div>
          <div class="column">
            <div class="card">
              <div class="img-container">
                <img src="mihlali.jpg">

              </div>
              <h3><b>Mihlali Ndongana</b></h3>
              <p>BACKEND DEVELOPER</p>
              <p>FIGMA DESIGNER</p>

            </div>
          </div>

        </div>
      </section>
      <div class="container">
        <h1 id="header">Connect with us <br>Feel free to get in touch with us</h1>
        <div class="contact-box">
          <div class="contact-left">
            <h3 id="request">Send your request</h3>
            <form autocomplete="off">
              <div class="input-row">
                <div class="input-group">
                  <label>Name</label>
                  <input type="text" id="name" placeholder="eclecticdreamers" required>
                </div>
                <br>
                <div class="input-group">
                  <label>Phone</label>
                  <input type="text" placeholder="021 567 2345" required>
                </div>

              </div>
              <br>
              <div class="input-row">
                <div class="input-group">
                  <label>Email</label>
                  <input type="email" placeholder="eclecticdreamers@gmail.com">
                </div>
                <br>
                <div class="input-group">
                  <label>Subject</label>
                  <input type="text" placeholder="Assistance">
                </div>

              </div>

              <label>Message</label>
              <textarea rows="5" placeholder="your message" id="message"></textarea>

              <button type="button" id="myBtn" onclick="submitMessage()">Submit</button><br><br>

              <p id="messageDisplay"></p>


            </form>


          </div>
          <div class="contact-right">
            <h3 id="reachus">Reach Us</h3>
            <table>
              <tr>
                <td>Email <i class="glyphicon glyphicon-envelope"></i></td>
                <td>eclecticdreamers@gmail.com</td>
              </tr>
              <tr>
                <td>Phone</td>
                <td>021 567 2345</td>
              </tr>
              <tr>
                <td>Social Platforms</td>
                <td>
                <div class="social-icons">
                  <a href="https://www.instagram.com/eclecticdreamers_6/" target="_blank"><br>
                  <i class="fa fa-instagram instagram" style="font-size:27px"></i>
                  </a>
                  <a href="https://twitter.com/eclecticdr6" target="_blank"><br>
                  <i class="fa fa-twitter twitter" style="font-size:27px"></i>
                    
                  </a>
                  <a href="https://www.facebook.com/profile.php?id=100093378063842" target="_blank"><br>
                  <i class="fa fa-facebook-f facebook" style="font-size:27px"></i>
                  </a>
                </div>

                </td>
              </tr>
            </table>

          </div>

        </div>
        

      </div>


        <script src="java.js"></script>
        <script src="../../menu.js"></script>
</body>
</html>