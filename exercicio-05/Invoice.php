<?php
class Invoice {

    private $numero;
    private $descricao;
    private $quantidade;
    private $preco;

    public function Invoice($numero, $descricao, $quantidade, $preco) {
        $this->numero = $numero;
        $this->descricao = $descricao;
        $this->setQuantidade($quantidade);
        $this->setPreco($preco);
    }

    public function getInvoiceAmount() {
        return $this->quantidade * $this->preco;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade < 0 ? 0 : intval($quantidade);
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco < 0 ? 0 : $preco;
    }
}