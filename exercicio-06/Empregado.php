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
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->setSalario($salario);
    }

    public function darAumento() {
        $this->salario += $this->salario * 10 / 100;
    }

    public function salarioAnual() {
        return $this->salario * 12;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        $this->salario = $salario < 0 ? 0 : $salario;
    }
}