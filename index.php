<pre>
<?php 
    require_once("./exercicio-02/Banco.php");
    require_once("./exercicio-02/ContaCorrente.php");

    $banco = new Banco();
    $conta = new ContaCorrente(1234, 12000, 5000);
    $conta2 = new ContaCorrente(1234, 12000, 5000);
    $banco->abrirConta($conta);
    print_r($banco);
    $banco->abrirConta($conta2);
    print_r($banco);

?>
</pre>