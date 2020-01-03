<title>PHP-POO</title>
<pre>
<?php

require_once("./exercicio-03/Counter.php");

$em = new Counter();
$em->incrementCounter(6);
print_r($em);

?>
</pre>