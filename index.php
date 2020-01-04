<title>PHP-POO</title>
<pre>
<?php

require_once("./exercicio-05/Circle.php");

$p1 = new Circle(5, 4, 1);
$p2 = new Circle(1);
$p2->move($p1);
print_r($p1);
print_r($p2);

?>
</pre>