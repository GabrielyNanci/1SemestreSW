<?php

echo '<pre>';

$aleatorio = array();

for ($i=10; $i < 20; $i++) {
  $aleatorio[] = rand();

}
echo "O valor de Entrada é: " . $_GET["campo1"];
echo "<br>O valor de Saída é: " . $_GET["campo2"];


  $variavel = 16;
  if ($variavel % 2 == 0) {
  echo $variavel . "O número é par";
}

function par($numero) {

  if ($numero % 2 == 0) {
    $retorno = true;
  } else {
      $retorno = false;
  }

  return $retorno;
}

var_dump(par(32));

foreach ($aleatorio as $key => $value) {
  echo "O numero $value ";
   if (par($value)) {
    echo "O número é par";
  } else {
    echo "O número é Impar";
  }
  echo "<br>";
}
