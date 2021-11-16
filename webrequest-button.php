<?php

header("Content-type: image/png");
$string = "Visit webrequest.cc";
$im = imagecreate(110, 20);
$orange = imagecolorallocate($im, 220, 210, 60);
$px     = (imagesx($im) - 7.5 * strlen($string)) / 2;

imagestring($im, 3, $px, 9, $string, $orange);
imagepng($im);
imagedestroy($im);
