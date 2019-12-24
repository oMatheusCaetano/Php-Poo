
    <?php 
        require_once("./exercicio-07/Contador.php");
        $contador = new Contador();
        print("Contador = {$contador->getValor()} <br>");
        $contador->incrementar(10);
        print("Contador = {$contador->getValor()} <br>");
        $contador->zerar();
        print("Contador = {$contador->getValor()} <br>");
    ?>