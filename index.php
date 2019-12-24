
    <?php 
        require_once("./exercicio-06/Empregado.php");
        $empregado = new Empregado("Marcos", "Almeida", 1000);
        print("Nome = {$empregado->getNome()} <br>
        Sobrenome = {$empregado->getSobrenome()} <br>
        Salário = {$empregado->getSalario()}<br>
        Salário Anual = {$empregado->salarioAnual()}<br>");
        $empregado->darAumento();
        print("Salário com aumento = {$empregado->getSalario()}<br>
        Salário anual com aumento = {$empregado->salarioAnual()}");
    ?>