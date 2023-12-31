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
  <title>Contact Us</title>
  <link rel="stylesheet" type="text/css" href="../css/contact_style.css">
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
  <div class="contact-section">
    <h2>Contact Us</h2>
    <div class="contact-info">
      <p class="contact-label">Name: Hadi Mortada</p>
      
      <p class="contact-label">Email: hadi.mortada@lau.edu</p>
      
      <p class="contact-label">ID Number: 202105121</p>
      
    </div>
    <div>


        <a href="https://www.linkedin.com/in/hadi-mortada-30145b24b"><img
            style="width:50px;height: auto; margin: 15px;" src="assests/LinkedInLogo (1).png"
            alt="LinkedIN"></a>
        <a href="tel:+96181921075"><img style="width: 50px; height: auto; margin: 15px;"
            src="assests/whatsapp.png" alt="calling"></a>

      </div>
  </div>
</body>
</html>
