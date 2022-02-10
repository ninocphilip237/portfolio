<?php
$filename = "./assets/img/resume/ninocphilip_updated.pdf";
header("Content-type: application/pdf");
header("Content-Length: " . filesize($filename));
readfile($filename);
// <a href="./download.php" class="email"><i class="bx bxs-download"></i></a>

$file = 'filename.pdf';
$filename = "./assets/img/resume/ninocphilip_updated.pdf";

// Header content type
header('Content-type: application/pdf');

header('Content-Disposition: inline; filename="' . $filename . '"');

header('Content-Transfer-Encoding: binary');

header('Accept-Ranges: bytes');

// Read the file
@readfile($file);

?>
