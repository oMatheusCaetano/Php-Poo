<title>PHP-POO</title>
<pre>
<?php

require_once("./exercicio-04/Point2D.php");

$p1 = new Point2D(5, 4);
$p2 = new Point2D();
print_r($p1);
print_r($p2);
print_r($p1->distance($p2)["x"]);

?>
</pre>