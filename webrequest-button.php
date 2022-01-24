<?php

//header("Content-type: image/png");
$string = "Visit webrequest.cc";
$img = imagecreate(50, 100);
$px     = (imagesx($img) - 7.5 * strlen($string)) / 2;

echo "AA";

/*
$x1 = 0;
$y1 = 0;
$x2 = 50;
$y2 = 100;
$r = 5
$color  = imagecolorallocate($img, 220, 210, 60);
$r = min($r, floor(min(($x2 - $x1) / 2, ($y2 - $y1) / 2)));
// render corners
imagefilledarc($img, $x1 + $r, $y1 + $r, $r * 2, $r * 2, 180, 270, $color, IMG_ARC_PIE);
imagefilledarc($img, $x2 - $r, $y1 + $r, $r * 2, $r * 2, 270, 0, $color, IMG_ARC_PIE);
imagefilledarc($img, $x2 - $r, $y2 - $r, $r * 2, $r * 2, 0, 90, $color, IMG_ARC_PIE);
imagefilledarc($img, $x1 + $r, $y2 - $r, $r * 2, $r * 2, 0, 180, $color, IMG_ARC_PIE);
// middle fill, left fill, right fill
imagefilledrectangle($img, $x1+$r, $y1, $x2-$r, $y2, $color);
imagefilledrectangle($img, $x1, $y1+$r, $x1+$r, $y2-$r, $color);
imagefilledrectangle($img, $x2-$r, $y1+$r, $x2, $y2-$r, $color);

//imagestring($im, 3, $px, 9, $string, $orange);
imagepng($img);
imagedestroy($img);

*/
