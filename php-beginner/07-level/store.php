<?php

$games = [
	["Call of Duty", "Shooter", 59.95],
	["Rocket League", "Sport", 19.95],
	["Assassins Creed", "RP", 49.95]
];

foreach ($games as $value) {
	$total += $value[2];
	$chartotal += strlen($value[0]);
}

echo "Gemiddelde prijs: €", round($total / count($games), $precision = 2);
echo "\nGemiddelde lengte van titel: ", round($chartotal / count($games));

?>
