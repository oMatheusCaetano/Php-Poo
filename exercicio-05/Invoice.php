<!-- 
 Crie uma classe chamada Invoice que possa ser utilizado por uma loja de
 suprimentos de informática para representar uma fatura de um item vendido
 na loja. Uma fatura deve incluir as seguintes informações como atributos
 
 > número do item faturado,
 > descrição do item,
 > quantidade comprada do item
 > preço unitário do item.
 
 Sua classe deve ter um construtor que inicialize os quatro atributos.
 Se a quantidade não for positiva, ela deve ser configurada como 0.
 Se o preço por item não for positivo ele deve ser configurado como 0.0.
 Forneça um método set e um método get para cada variável de instância.
 Além disso, forneça um método chamado getInvoiceAmount que calcula o valor
 da fatura (isso é, multiplica a quantidade pelo preço por item) e depois
 retorna o valor como um double.
-->

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
