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
	array("Hundai",2143,329),
	array("Audi",22,8),
	array("Porsche",4,1),
	array("Saab",5,2),
	array("Land Rover",17,15)
);

//reseni
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".,<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".,<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".,<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".,<br>";
echo $cars[4][0].": In stock: ".$cars[4][1].", sold: ".$cars[4][2].".,<br>";
echo $cars[5][0].": In stock: ".$cars[5][1].", sold: ".$cars[5][2].".,<br>";
echo $cars[6][0].": In stock: ".$cars[6][1].", sold: ".$cars[6][2].".,<br>";
echo $cars[7][0].": In stock: ".$cars[7][1].", sold: ".$cars[7][2].".,<br>";

?>