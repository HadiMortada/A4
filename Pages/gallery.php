<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: loginpage.php");
  exit();
}

$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
  <link rel="stylesheet" href="../css/Css_Style.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <style>
    /* Add some CSS styles for the modal */
    .modal {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: rgba(0, 0, 0, 0.8);
      padding: 20px;
      z-index: 1000;
    }

    .modal img {
      max-width: 80%;
      /* Adjust this value to control the width of the images in the modal */
      max-height: 80vh;
    }

    .close {
      position: absolute;
      top: 56px;
      right: 66px;
      color: #fff;
      font-size: 20px;
      cursor: pointer;
    }
  </style>
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

  <div>
    <h1 style=" color:white; text-align: center;margin-top: 51px;">My Gallery</h1>
  </div>

  <div class="gallery">
    <?php
    // Specify the path to your gallery text file
    $galleryFilePath = '../Pages/gallery.txt';

    // Check if the file exists
    if (file_exists($galleryFilePath)) {
      // Read the gallery file line by line into an array
      $imageNames = file($galleryFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

      // Loop through each image name and generate HTML for the image
      foreach ($imageNames as $imageName) {
        echo '<a href="#modal' . $imageName . '" class="thumbnail">';
        echo '<img src="../Pages/images/' . $imageName . '" alt="Image">';
        echo '</a>';
      }
    } else {
      echo '<p>Gallery file not found.</p>';
    }
    ?>
  </div>

  <?php
  // Read the gallery file again to generate modals
  if (file_exists($galleryFilePath)) {
    $imageNames = file($galleryFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Loop through each image name and generate HTML for the modal
    foreach ($imageNames as $imageName) {
      echo '<div id="modal' . $imageName . '" class="modal">';
      echo '<a href="#" class="close">&times;</a>';
      echo '<div class="modal-content" style="display: contents;">';
      echo '<img src="../Pages/images/' . $imageName . '" alt="Modal Image">';
      echo '</div>';
      echo '</div>';
    }
  }
  ?>

</body>

</html>