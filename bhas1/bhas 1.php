<?php

$a = 1;
$b = -5;
$c = 6;

$delta = ($b*$b)-((4*$a)*$c);

$x1 = ($b + sqrt ($delta)) / (2 * $a);
$x2 = ($b - sqrt ($delta)) / (2 * $a);

echo " O valor de a é $a";
"<br>";
echo " O valor de b é $b";
"<br>";
echo " O valor de c é $c";
"<br>";
echo " O valor de delta é $delta";
"<br>";
echo " O valor de x1 é $x1";
"<br>";
echo " O valor de x2 é $x2";
"<br>";
?>
