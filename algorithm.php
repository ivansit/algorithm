<?php
	$x = rand(0, 100);
echo 'Число ' . $x;

$a = 1;
$b = 1;

if ($a > $x) {
	echo 'Задуманное число не входит в числовой ряд <br>';
}
if ($a <= $x) {
	if ($a === $x) {
	 echo 'Задуманное число входит в числовой ряд <br>';
	}
}
else {
	$c = $a;
	$a = $a + $b;
	$b = $c;
}
return $x;