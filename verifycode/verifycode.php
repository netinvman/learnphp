<?php
session_start();
header('content-type: image/png');

// make verifycode 's string
$strseq = array_merge(range(0, 9), range('a', 'z'), range('A', 'Z'));
shuffle($strseq);
$arrcode = array_slice($strseq, 0, 4);
$vcode = join('', $arrcode);
$_SESSION['vcode'] = $vcode;

// make the image
$im = imagecreatetruecolor(100, 40);
$white = imagecolorallocate($im, 255, 255, 255);
$font = 'fonts/msyh.ttf';
imagettftext($im, 20, 0, 15, 30, $white, $font, $vcode);
imagepng($im);
imagedestroy($im);
?>
