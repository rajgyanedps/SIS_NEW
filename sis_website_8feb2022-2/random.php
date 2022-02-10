<?php
session_start();
 
//if (empty($_SESSION['rand_code'])) {
    $str = "";
    $length = 0;
    for ($i = 0; $i < 2; $i++) {
// this numbers refer to numbers of the ascii table (small-caps)
    $str .= chr(rand(97, 122));
	if($i%2==0)
	$str .=rand(1,9);
// }
 $_SESSION['rand_code'] = $str;
} 
$imgX = 90;
$imgY = 20;
$image = imagecreatetruecolor(90, 20);
 
$backgr_col = imagecolorallocate($image, 223,223,223);
$border_col = imagecolorallocate($image, 223,223,223);
$text_col = imagecolorallocate($image, 255,0,0);
 
imagefilledrectangle($image, 0, 0, 90, 20, $backgr_col);
imagerectangle($image, 0, 0, 59, 22, $border_col);
 
$font = "assets/fonts/captcha.ttf"; 
$font_size = 12;
$angle = 0;
$box = imagettfbbox($font_size, $angle, $font, $_SESSION['rand_code']);
$x = (int)($imgX - $box[4]) / 2;
$y = (int)($imgY - $box[5]) / 2;
imagettftext($image, $font_size, $angle, $x, $y, $text_col, $font, $_SESSION['rand_code']);
 
header("Content-type: image/png");
imagepng($image);
imagedestroy ($image);
?>