<?php
class Invoice {

    private $code;
    private $description;
    private $quantity;
    private $price;

    public function Invoice($code, $price, $quantity, $description = "NO DESCRIPTION") {
        $this->setCode($code);
        $this->setDescription($description);
        $this->setQuantity($quantity);
        $this->setPrice($price);
    }

    public function getInvoiceAmount() { return $this->getQuantity() * $this->getPrice(); }

    public function getCode() { return $this->code; }

    public function setCode($code) { $this->code = $code; }

    public function getDescription() { return $this->description; }

    public function setDescription($description) { $this->description = $description; }

    public function getQuantity() { return $this->quantity; }

    public function setQuantity($quantity) { $this->quantity = $quantity < 0 ? 0 : $quantity; }

    public function getPrice() { return $this->price; }

    public function setPrice($price) { $this->price = $price < 0 ? 0 : $price; }
}
