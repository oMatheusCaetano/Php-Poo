<title>PHP-POO</title>
<pre>
<?php

require_once("./exercicio-07/House.php");
require_once("./exercicio-07/Door.php");

$doors = [
    new Door(),
    new Door(),
    new Door()
];

$doors[0]->setOpen(true);
$doors[1]->setOpen(true);
$doors[2]->setOpen(false);

$property = new House();
$property->setDoors($doors);
$property->addDoor(new Door());
print_r($property);

?>
</pre> 