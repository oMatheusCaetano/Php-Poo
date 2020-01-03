<title>PHP-POO</title>
<pre>
<?php

require_once("./exercicio-02/Employee.php");

$em = new Employee(1000, "Name", "Last Name");
$em->salaryIncrease();
print_r($em);

?>
</pre>