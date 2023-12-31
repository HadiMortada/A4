<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: loginpage.php");
  exit();
}

$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html>

<head>
  <title>Hadi Mortada's Profile</title>
  <link rel="stylesheet" type="text/css" href="../css/WebStyle.css" />
  <link rel="stylesheet" type="text/css" href="../css/style.css">


</head>

<body>

  <div class="row" id="header">
    <div id="dropdown-menu">
      <span><i class="ico burger-ico"></i>MENU</span>
      <div class="dropdown-content">
        <ul>
          <a href="Home.php">
            <li><i class="ico ico-l burger-ico"></i>Back to Menu</li>
          </a>
          <a href="WebCV.php">
            <li><i class="ico ico-l CV-ico"></i>CV</li>
          </a>
          <a href="gallery.php">
            <li><i class="ico ico-l gall-ico"></i>Gallery</li>
          </a>
          <a href="Contact.php">
            <li><i class="ico ico-l Contact-ico"></i>Contact us</li>
          </a>
        </ul>
      </div>
    </div>
  </div>

  <div class="profile-card">

    <div class="headerboarder">
      <div>
        <img class="profile-image" src="assests/WhatsApp Image 2023-09-22 at 3.51.27 PM.jpeg" alt="Profile Image">
      </div>
      <div style=" width: -webkit-fill-available; margin: 10px;">

        <ul>
          <h6 style="    
              padding: 15px;
              margin-bottom: 0;
              border: 0px;
              ">Hadi Mortada</h1>


            <h6 style="padding: 15px;
              margin-bottom: 0;
              border: 0px;
              ">Computer Science Student</h1>



              <h6 style="padding: 15px;
            margin-bottom: 0;
            border: 0px;
            ">Hadi.mortada@lau.edu</h1>

                <h6 style="padding: 15px;
            margin-bottom: 0;
            border: 0px;
             ">#202105121</h1>

                  <div>


                    <a href="https://www.linkedin.com/in/hadi-mortada-30145b24b"><img
                        style="width:50px;height: auto; margin: 15px;" src="assests/LinkedInLogo (1).png"
                        alt="LinkedIN"></a>
                    <a href="tel:+96181921075"><img style="width: 50px; height: auto; margin: 15px;"
                        src="assests/whatsapp.png" alt="calling"></a>

                  </div>

                  <div class="language-bar">
                    <div class="language" style="width: 95%;"><span>Arabic</span><span>100%</span></div>
                    <div class="language" style="width: 80%;"><span>English</span><span>80%</span></div>
                    <div class="language" style="width: 60%;"><span>Turkish</span><span>60%</span></div>
                  </div>




        </ul>

      </div>

    </div>





    <div class="about-me">
      <h3>About Me</h3>

      <p class="hidden-text">
        I have chosen to study computer science because I am fascinated by how computers work, and I spend most of my
        spare time designing programs and web pages because I enjoy problem solving and logical thinking. Most users see
        a computer at the front and use the graphical user interfaces. The first time I used a computer, it intrigued me
        to know how these interfaces work, the theory behind computers and the methodology of how they work.
      </p>
    </div>

    <h3>Education</h3>
    <ul>
      <li class="image1">B.S. In Computer Science - LEBANESE AMERICAN UNIVERSITY (2021 - Present)</li>
    </ul>

    <h3>Programming Skills</h3>
    <ul>
      <li class="image2">Java - 10/10</li>
      <li class="image3">C++ - 8/10</li>
      <li class="image4">Python - 10/10</li>
      <li class="image5">C - 10/10</li>
      <li class="image6">C# - 8/10</li>
    </ul>

    <h3>Hobbies</h3>
    <ul>
      <li class="image7">Gymnastics</li>
      <li class="image8">Swimming</li>
      <li class="image9">Photography</li>
      <li class="image10">Listening to Music</li>
      <li class="image11">Drawing</li>
    </ul>

    <h3>Frameworks</h3>
    <ul>
      <li class="image12">Unity</li>
      <li class="image13">Unreal Engine</li>
      <li class="image14">Adobe Photoshop</li>
      <li class="image15">Microsoft Word</li>
      <li class="image16">Linux Kali</li>
    </ul>

    <h3>Activities</h3>
    <ul>
      <li class="image17">Participation in LCPC in 2022 & 2023</li>
      <li class="image18">Passed Qualification Round in GOOGLE Code Jam</li>
      <li class="image19">Certification in Google Analytics</li>
    </ul>

    <h3>Project</h3>
    <p style=" color: #ffffff ;margin-top: 14px;">
      Monster Chase: Designed and implemented a 2D game using Unity and C#
    </p>


    <h3>Soft Skills</h3>

    <ul>
      <li class="special-ul">Creativity</li>
      <li class="special-ul">Leadership</li>
      <li class="special-ul">Organization</li>
      <li class="special-ul">Problem Solving</li>
      <li class="special-ul">Teamwork</li>
      <li class="special-ul">Fast Learner</li>
      <li class="special-ul">Working Under Pressure</li>
    </ul>

  </div>
</body>

</html>