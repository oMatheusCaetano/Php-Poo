<title>PHP-POO</title>
<pre>
<?php

require_once("./exercicio-01/Invoice.php");

$invoice = new Invoice(1, 20, 10, "Product Description");
print($invoice->getInvoiceAmount() . "<br>");
print_r($invoice);

?>
</pre>