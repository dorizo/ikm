<?php

// Load And Create Image From Source
// echo dirname(__FILE__);
// die();
$img = imagecreatefromjpeg(dirname(__FILE__).'\undangan.jpg');
   
$white_color = imagecolorallocate($img, 0, 0, 0);

// Set Path to Font File
$font_path = dirname(__FILE__).'\arial.ttf';

// // Set Text to Be Printed On Image
$text ="Dr.H. Sudirman D.Hury, SH,MM,Msc";

$size=20;
$angle=0;
$left=355;
$top=1500;

imagettftext($img, $size,$angle,$left,$top, $white_color, $font_path, $text);
   // it will show the loaded image in the browser
   header('Content-type: image/jpg');
   
   imagejpeg($img);
   
   imagedestroy($img);
   die();

// Allocate A Color For The Text Enter RGB Value
$white_color = imagecolorallocate($our_image, 255, 255, 255);

// Set Path to Font File
$font_path = 'arial.ttf';

// Set Text to Be Printed On Image
$text ="Welcome To Talkerscode";

$size=200;
$angle=0;
$left=125;
$top=200;
	
// Print Text On Image
imagettftext($our_image, $size,$angle,$left,$top, $white_color, $font_path, $text);

// Send Image to Browser
imagejpeg($our_image);

// Clear Memory
imagedestroy($our_image);

?>