<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>
    <?php
    // Array containing sample image file names
    $images = array("test.pdf");
    // Loop through array to create image gallery
    foreach($images as $image){
            echo '<p><a href="download.php?file=' . urlencode($image) . '">Download</a></p>';
    }
    ?>
</body>
</html>
