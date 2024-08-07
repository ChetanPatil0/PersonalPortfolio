
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChetanPortfolio</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <header >
    <h5 style="float:right; text-decoration:none;  margin-right:20px;"><a href="admin.php" style="color:#fff">Admin</a></h5>
        <!--Nav Bar Start-->
        <nav class="animate__animated animate__fadeInDown">
            <div class="logo">
                <p>Chetan Patil</p>
            </div>
            <div class="nav-items">
                <ul type="none">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="Images/ChetanResume.pdf" download>Resume</a></li>
                    <li><a href="#contactUs">Contact</a></li>
                </ul>
            </div>
            <div class="show-btn" id="show-btn" onclick="show_menu();">=</div>
        </nav>
        <!--Nav Bar End-->
        <!--Vertical Menu For Small Screens-->
        <!--Start-->
        <div class="nav-menu" id="nav-menu">
            <div class="remove-btn" onclick="hide_menu();">X</div>
            <ul type="none">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Skills</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Resume</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <!--End-->
        <!--Header Body Section Start-->
        <section class="header-body" id="header">
            <div class="header-left animate__animated animate__fadeInLeft">
                <div class="header-left-text">
                    <h2>Hello, I ' am</h2>
                    <h1>Chetan Patil</h1>
                    <ul>
                        <li><i class="fa-solid fa-phone"></i>
                            <p>+91 9522112259 </p>
                        </li>
                        <li><i class="fa-solid fa-envelope"></i>
                            <p>Patilchetan2905@gmail.com</p>
                        </li>
                        <li><i class="fa-solid fa-location-dot"></i>
                            <p>Nashik,Maharashtra,India</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header-right  animate__animated  animate__fadeInRight">
                <div class="header-right-img ">
                    <img src="Images/img-2.png" alt="">
                </div>
            </div>

            <!--Pop Up welcome alert-->
            <!--Start-->
            <div class="welcome_popup" id="welcome_popup">
                <h5 class="remove_btn" onclick="remove_popup();">x</h5>
                <h1>WELCOME TO MY PORTFOLIO</h1>
                <h3>Like ! Follow ! Share!</h3>
                <div class="popup-social-icons">
                    <i class="fa-brands fa-square-github" style="color:#333"></i>
                    <i class="fa-brands fa-linkedin" style="color:#0A66C2; "></i>
                    <i class="fa-brands fa-square-instagram" style="color:#f32170"></i>
                </div>
            </div>
            <!--End-->
            <!--Header Body End-->
        </section>

        <!--Header Footer Start-->
        <div class="header-footer animate__animated animate__zoomIn">
            <div class="box">
                <h1><i class="fa-brands fa-linkedin" style="color:#0A66C2; "></i></h1>
                <h2>200+ Connections</h2>
            </div>
            <div class="box">
                <h1><i class="fa-brands fa-github" style="color:#333; "></i></h1>
                <h2>5+ Repositorys</h2>
            </div>
            <div class="box">
                <h1><i class="fa-brands fa-qualification" style="color:#0A66C2; "></i></h1>
                <h2>MCA &nbsp;Pursuing </h2>
            </div>

        </div>
        <!--Header Footer End-->
        <!--Fixed Coding-Screen Background-->
        <!--Start-->
        <div class="fixed-background"></div>
        <!--End-->
    </header>
    <main>
        <!--About Section Start -->

        <section class="about" id="about">
            <div class="about-body">
                <div class="about-left">
                    <img src="Images/boy_vector.png" alt="Profile_img" class=" animate__animated animate__fadeInLeft">
                </div>
                <div class="about-right ">
                    <div class="about-text animate__animated animate__fadeInRight">
                        <h1>About Me</h1>
                        <p>Hello! I'm Chetan Pratap Patil, From Nashik.I am first year MCA student at KK Wagh College
                            Nashik. I completed my
                            BBA Computer Application in 2023. I want to become web devloper.i have good knowldge of
                            HTML, CSS, JavaScript, and Bootstrap and php.
                            Honesty is my core strength, and I thrive in a collaborative team environment.I believe in
                            the power of teamwork to achieve shared goals.
                            My immediate goal is to secure a position at a reputed company where I can continue
                            learning, contribute actively, and showcase my skills. I'm eager to take on new challenges
                            and make a positive impact.</br>
                            I'm on a journey to enhance my skills and make meaningful contributions. If you're looking
                            for a dedicated team player contact Me
                            <br><br>
                          <div style="display: flex; justify-content: space-between;">
                            <button class="resume-download-btn"><a href="Images/ChetanResume.pd" download="ChetanPatilResume">Resume <i class="fa-regular fa-circle-down"></i></a></button>
                            <p>Thank You !</p>
                          </div>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--About Section End-->
        <!--Skills Section Start-->
        <section class="skills" id="skills">
            <h1 class="animate__animated animate__flipInX">MY SKILLS</h1>
            <div class="skills-body">
                <div class="skills-left   animate__animated animate__zoomIn">
                    <label>C</label><progress value="90" max="100"></progress>
                    <label>HTML</label><progress value="80" max="100"></progress>
                    <label>CSS</label><progress value="75" max="100"></progress>
                    <label>Bootstrap</label><progress value="40" max="100"></progress>

                </div>
                <div class="skills-right  animate__animated animate__zoomIn">
                    <label>C++</label><progress value="70" max="100"></progress>
                    <label>JavaScript</label><progress value="50" max="100"></progress>
                    <label>Core PHP</label><progress value="70" max="100"></progress>
                    <label>ReactJs</label><progress value="20" max="100"></progress>
                </div>
            </div>
        </section>
        <!--Skills Section End-->
  
        <!--Projects Section End-->

        <section class="projects" id="projects">
            <h1 class="head-title animate__animated animate__zoomIn" >MY PROJECTS</h1>
         
            <div class="projects-body">
            <?php 
              include 'conn.php';
              $Query = "SELECT `Title`, `Description`, `TechStack`, `CodeLink`, `ProjectIOLink` FROM `project`";
              $Result = mysqli_query($conn,$Query);
              
              if(mysqli_num_rows($Result) == 0)
              {
                 echo `<h1>No Project TO Display<h1>`;
              }
              else{
              while($Data =mysqli_fetch_assoc($Result))
              {
                
        ?>
                <div class="project-card">
                    <h1 class="project-name"><?php echo $Data["Title"];?> </h1>
                    <p class="project-desc"><?php echo $Data['Description'];?></p>
                    <h4 class="tech-stack"><?php echo $Data['TechStack']; ?></h4>
                    <div class="buttons">
                        <button class="sourcecode-btn"><a href="<?php echo $Data['CodeLink']; ?>">Source Code</a></button>
                        <button class="liveview-btn"><a href="<?php echo $Data['ProjectIOLink']; ?>">Live Demo</a></button>
                    </div>
                </div>
                <?php }} ?>
            </div>
        </section>
       
        <!--projects Section End-->
        <!--Contact Us Section Start-->
        <section class="contactUs" id="contactUs">
            <h1 class="title animate__animated animate__zoomIn" >CONTACT US</h1>
            <div class="contactUs-body">
                <div class="leftside">
                    <h1>SEND MAIL TO ME</h1>
                    <p>For any query, project collaboration, & for hiring send mail to me</p>
                </div>
                <div class="rightside">
                    <table>
                        <form class="contactUs-form">
                            <tr>
                                <td>
                                    <label for="name">Name </label> <br>
                                    <input type="text" name="name" placeholder="Enter Your Name" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="mail">Email ID</label><br>
                                    <input type="email" name="mail" placeholder="Enter Your Email" required>
                                </td>
                            </tr>
                            <tr><br>
                                <td>
                                    <label for="mobile">Mobile No </label><br>
                                    <input type="tel" name="mobile" placeholder="Enter Your Mobile No (Optional)">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="message">Message</label><br>
                                    <textarea name="message" id="" cols="50" rows="5" placeholder="Enter your any message,Query..." style="background:none;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td> <button type="submit" class="mail-submit-btn">Send</button></td>
                            </tr>
                    </table>
                </div>
            </div>

            <br><br>
        </section>
        <!--Contact Us Section End-->
        <footer>
            <div class="footer-main">
                <br>
                     <h1>Get In Touch</h1>
                     <br>
                     <ul>
                        <li><i class="fa-brands fa-square-instagram"></i></li>
                        <li><i class="fa-brands fa-linkedin"></i></li>
                        <li><i class="fa-brands fa-square-github"></i> </li>
                        <li><i class="fa-brands fa-square-facebook"></i></li>
                     </ul>
                     <br>
                     
            </div>
        </footer>
    </main>
    <!-- JavaScript External File Link-->
    <script src="index.js">
    </script>
</body>

</html>