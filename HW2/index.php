<?php
declare(strict_types=1);
require_once "Color.php";

$color = new Color(250,250,250);
$secondColor = new Color(0,0,250);
$thirdColor = new Color (250,250,250);

echo $secondColor->getGreen() . PHP_EOL;
echo $color->equals($thirdColor) . PHP_EOL;
$randColor = Color::random();
 var_dump($randColor) . PHP_EOL;
$mixedColor = $color->mix(new Color(100, 100, 100));
echo $mixedColor->getRed() .PHP_EOL;
echo $mixedColor->getGreen() . PHP_EOL;
echo $mixedColor->getBlue() . PHP_EOL;