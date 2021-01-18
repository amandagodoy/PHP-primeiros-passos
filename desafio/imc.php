<?php 

$peso = 89;
$altura = 1.70;
$imc = $peso / ($altura * $altura);

if($imc < 18.5) {
    echo "Você está magro(a)";
} elseif ($imc <= 24.9) {
    echo "Você está sobrepeso";
} else {
    echo "Você está obeso";
}