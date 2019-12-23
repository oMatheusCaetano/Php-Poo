<!--
 A fim de representar empregados em uma firma, crie uma classe chamada
 Empregado que inclui as três informações a seguir como atributos:
 
 > um primeiro nome
 > um sobrenome
 > um salário mensal.
 
 Sua classe deve ter um construtor que inicializa os três atributos.
 Forneça um método set e get para cada atributo. Se o salário mensal não for
 positivo, configure-o como 0.0. Crie um método que exiba o salário anual
 e um que dê 10% de aumento no salário.
-->

<?php 
class Empregado {

    private $nome;
    private $sobrenome;
    private $salario;

    public function Empregado($nome, $sobrenome, $salario) {
        
    }
}