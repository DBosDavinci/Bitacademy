<?php

echo "Welke operatie wil je uitvoeren? (+, -)";

$operatie = readline();

echo "Eerste getal?";

$getal1 = readline();

echo "Tweede getal?";

$getal2 = readline();

if ($operatie == "+") {
    echo $getal1 + $getal2;
} else {
    echo $getal1 - $getal2;
}

?>