<title>PHP-POO</title>
<pre>
<?php
require_once("exercicio-02/Banco.php");
require_once("exercicio-02/ContaCorrente.php");
$banco = new Banco();
$conta = new ContaCorrente(1, 20000, 2500);
$conta2 = new ContaCorrente(2, 15000, 3000);
$conta3 = new ContaCorrente(3, 30000, 10000);
$banco->abrirConta($conta);
$banco->abrirConta($conta2);
$banco->abrirConta($conta3);
$banco->fecharConta($conta);
//$banco->fecharConta($conta2);
//$banco->fecharConta($conta3);
print_r($banco);
?>
</pre>