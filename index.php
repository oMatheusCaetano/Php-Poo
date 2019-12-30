<pre>
<?php 
    require_once("./exercicio-02/Banco.php");
    require_once("./exercicio-02/ContaCorrente.php");

    $banco = new Banco();
    $conta = new ContaCorrente(1234, 12000, 5000);
    $conta2 = new ContaCorrente(134, 12000, 5000);
    $banco->abrirConta($conta);
    $banco->abrirConta($conta2);
    print_r($banco);
    print($banco->fecharConta($conta2));
    print_r($banco);

?>
</pre>