<?php
class ContaCorrente {

    private $numero;
    private $saldo;
    private $limite;
    private $movimentacoes;

    public function __construct($numero, $saldo, $limite) {
        $this->numero = $numero;
        $this->setSaldo($saldo);
        $this->setLimite($limite);
    }

    public function getNumero() { return $this->numero; }

    public function setNumero($numero) { $this->numero = $numero; }

    public function getSaldo() { return $this->numero; }

    public function setSaldo($saldo) { $this->saldo = $saldo < 0 ? 0 : $saldo; }

    public function getLimite() { return $this->limite; }

    public function setLimite($limite) { $this->limite = $limite < 0 ? 0 : $limite; }

    public function getMovimentacoes() { return $this->movimentacoes; }

    public function setMovimentacoes($movimentacoes) { $this->movimentacoes = $movimentacoes; }
}
