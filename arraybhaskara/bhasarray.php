<?php

echo "<pre>";
$a = 1;
$b = -5;
$c = 6;
$delta = ($b*$b)-((4*$a)*$c);
$x1 = ($b + sqrt ($delta)) / (2 * $a);
$x2 = ($b - sqrt ($delta)) / (2 * $a);

$meuPrimeiroArray["$a"] = 1;
$meuPrimeiroArray["$b"] = -5;
$meuPrimeiroArray["$c"] = 6;
$meuPrimeiroArray["delta"] = ($b*$b)-((4*$a)*$c);
$meuPrimeiroArray["x1"] = ($b + sqrt ($delta)) / (2 * $a);
$meuPrimeiroArray["x2"] = ($b - sqrt ($delta)) / (2 * $a);


echo " O valor de a é $a"; "<br>";
echo " O valor de b é $b"; "<br>";
echo " O valor de c é $c"; "<br>";
echo " O valor de delta é $delta"; "<br>";
echo " O valor de x1 é $x1"; "<br>";
echo " O valor de x2 é $x2"; "<br>";

var_dump($meuPrimeiroArray);

var_dump($_POST);

?>
