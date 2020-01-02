<?php
class Banco {

    private $contas = array();

    public function fecharConta($contaCorrente) {
        for ($i = 0; $i < count($this->contas); $i++) {
            if ($this->contas[$i]->getNumero() == $contaCorrente->getNumero()) {
                unset($this->contas[$i]);
                return true;
            }
        }
        return false;
    }

    public function abrirConta($contaCorrente) {
        if ($this->contaExiste($contaCorrente)) return false;
        array_push($this->contas, $contaCorrente);
        return true;
    }

    public function contaExiste($contaCorrente) {
        foreach ($this->contas as $conta) {
            if ($conta->getNumero() == $contaCorrente->getNumero()) return $conta;
        }
        return null;
    }

    public function getContas() { return $this->contas; }

    public function setContas($contas) { $this->contas = $contas; }
}
