<?php

/*
 * Pole - auta
 * Zjistěte kolik aut máte na skladě a počet prodaných kusů
 */

$cars = array (
	//značka, prodané množství, skladové množství
	array("Volvo",22,18),
	array("BMW",15,13),
	array("Skoda",1203,763),
	array("Hyundai",2143,329),
	array("Audi",22,8),
	array("Porsche",4,1),
	array("Saab",5,2),
	array("Land Rover",17,15)
);
$prodane = 0;
$skladove = 0;

foreach ($cars as $car) {
	$prodane += $car[1];
	$skladove += $car[2];
}

echo "Celkovy pocet prodanych aut: " . $prodane . "<br>";
echo "Aut na sklade: " . $skladove;
//reseni

?>