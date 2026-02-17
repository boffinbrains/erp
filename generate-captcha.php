<?php
session_start();

$num1 = rand(1, 10);
$num2 = rand(1, 10);
$operators = ['+', '-', 'x'];
$operator = $operators[array_rand($operators)];

switch($operator) {
    case '+':
        $answer = $num1 + $num2;
        break;
    case '-':
        if ($num1 < $num2) {
            $temp = $num1;
            $num1 = $num2;
            $num2 = $temp;
        }
        $answer = $num1 - $num2;
        break;
    case 'x':
        $answer = $num1 * $num2;
        break;
}

$_SESSION['captcha_answer'] = $answer;

$width = 200;
$height = 60;
$image = imagecreatetruecolor($width, $height);

$bgColor = imagecolorallocate($image, 255, 255, 255);
$textColor = imagecolorallocate($image, 30, 15, 71); 
$lineColor = imagecolorallocate($image, 19, 254, 254); 
$noiseColor = imagecolorallocate($image, 200, 200, 200);

imagefilledrectangle($image, 0, 0, $width, $height, $bgColor);

for ($i = 0; $i < 5; $i++) {
    imageline($image, rand(0, $width), rand(0, $height), rand(0, $width), rand(0, $height), $lineColor);
}

for ($i = 0; $i < 100; $i++) {
    imagesetpixel($image, rand(0, $width), rand(0, $height), $noiseColor);
}

$text = "$num1 $operator $num2 = ?";
$font = __DIR__ . '/fonts/arial.ttf'; 

if (file_exists($font)) {
    imagettftext($image, 20, 0, 30, 40, $textColor, $font, $text);
} else {
    imagestring($image, 5, 40, 20, $text, $textColor);
}

header('Content-Type: image/png');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Expires: Thu, 01 Jan 1970 00:00:00 GMT');

imagepng($image);
imagedestroy($image);
?>