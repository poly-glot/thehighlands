<?php
require_once __DIR__ . '/inc/functions.php';

header('Content-Type: image/png');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');

$bgcolor = "#e3e3e3";
$color = "#000000";

if(!isset($_SESSION['CAPTCHA']) || $_SESSION['CAPTCHA'] === null)
    $_SESSION['CAPTCHA'] = rand(1000000,9999999);

$_img = imagecreatetruecolor(100,20);
imagealphablending($_img, false);
imagesavealpha($_img, true);

$bg = hex2rgb($bgcolor);
$bg = imagecolorallocatealpha($_img, $bg[0], $bg[1], $bg[2],0);
imagefill($_img, 0, 0, $bg);

$color = hex2rgb($color);
$color = imagecolorallocatealpha($_img, $color[0], $color[1], $color[2],0);

imagestring($_img, 5, 18, 3, $_SESSION['CAPTCHA'], $color);
imageline($_img, 10, 8, 87, 8, $color);
imageline($_img, 13, 12, 90, 12, $color);

imagepng($_img);

imagedestroy($_img);
