<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Simple Image Gallery</title>
    <style>
      .img-box {
        display: inline-block;
        text-align: center;
        margin: 0 15px;
      }
    </style>
  </head>
  <body>
    <?php
    // Array encompassing sample image file names
    $images = ["france.png"];

    // Looping through the array to generate an image gallery
    foreach ($images as $image) {
        echo '<div class="img-box">';
        echo '<img src="' . $image . '" width="200" alt="' . pathinfo($image, PATHINFO_FILENAME) . '">';
        echo '<p><a href="download.php?file=' . urlencode($image) . '">Download</a></p>';
        echo '</div>';
    }
    ?>




  </body>
</html>