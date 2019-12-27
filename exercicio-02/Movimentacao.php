<?php
class Movimentacao {

    private $descricao;
    private $valor;
    private $tipo;

    public function getDescricao() { return $this->descricao; }

    public function setDescricao($descricao) { $this->descricao = $descricao; }

    public function getValor() { return $this->valor; }

    public function setValor($valor) { $this->valor = $valor; }

    public function getTipo() { return $this->tipo; }

    public function setTipo($tipo) { $this->tipo = $tipo; }
}
