<?php

echo "Welke operatie wil je uitvoeren? (+, -, %)";

$operatie = readline();

if (in_array($operatie, array('+', '-', '%')) == false) {
    echo $operatie , " is geen geldige operatie";
    exit();
}

echo "Eerste getal?";

$getal1 = readline();

if (is_numeric($getal1) == false) {
    echo $getal1 , " is geen getal";
    exit();
}

echo "Tweede getal?";

$getal2 = readline();

if (is_numeric($getal2) == false) {
    echo $getal2 , " is geen getal";
    exit();
}

if ($operatie == "+") {
    echo $getal1 + $getal2;
} elseif ($operatie == "-") {
    echo $getal1 - $getal2;
} elseif ($operatie == "%") {
    echo $getal1 % $getal2;
}

?>