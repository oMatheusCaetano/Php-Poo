<!--
 Escreva em Java uma classe Contador, que encapsule um valor usado para
 contagem de itens ou eventos. A classe deve oferecer métodos que devem:
 
 > Zerar;
 > Incrementar;
 > Retornar o valor do contador.
-->
<?php
class Contador {

    private $valor;

    public function zerar() {
        $this->valor = 0;
    }

    public function incrementar($quantidade) {
        $this->valor += $quantidade;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }
}
