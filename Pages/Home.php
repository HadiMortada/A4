<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../Pages/LoginPage.php");
    exit();
}

$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html>
<head>
  <title>Main Page</title>
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
        <a href="../Pages/logout.php" style="text-decoration: none; color:white; width:10%; float:right; margin-top:5px; margin-left:14px" class="button-like">Log Out</a>
        <div style="width:10%;color:white; float:right; margin-top:0px">Welcome, <?php echo $username; ?>!</div>
    </div>

    

</body>
</html>
