<?php
class Banco {

    private $contas = array();

    public function fecharConta($conta) {
        for ($i = 0; $i < count($this->contas); $i++) { 
            if ($this->contas[$i]->getNumero() == $conta->getNumero()) {
                $this->contas[$i] = null;
                return true;   
            }
        }
        return false;
    }

    public function abrirConta($conta) {
        if (!$this->contaExiste($conta->getNumero())) {
            array_push($this->contas, $conta);
            return true;
        } else return false;
    }

    private function contaExiste($numero) {
        foreach ($this->contas as $conta) {
            if ($conta.getNumero() == $numero) {
                return true;
            }
        }
        return false;
    }

    public function getContas() { return $this->contas; }

    public function setContas($contas) { $this->contas = $contas; }
}
