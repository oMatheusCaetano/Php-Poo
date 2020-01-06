<title>PHP-POO</title>
<pre>
<?php

require_once("./exercicio-08/Country.php");
require_once("./exercicio-07/Door.php");

$c1 = new Country("Brasil", "Brasilia", 10000);
$c2 = new Country("Brasil", "Brasilia", 15000);

$fron = array(
    $c3 = new Country("Ba", "Br", 15000),
    $c4 = new Country("Bu", "Br", 15000),
);



$c1->setBorders($fron);
$c2->setBorders($fron);
$c3 = $c1->neighboring($c2);
print_r($c3);
?>
</pre> 