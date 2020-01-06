<?php
class Property {

    protected $color;
    protected $doors = array();
    protected $floors;

    public function quantityOfDoors() { return count($this->doors; )}

    public function addFloor() { $this->floors++; }

    public function getColor() { return $this->color; }   

    public function setColor($color) { $this->color = $color; } 

    public function getDoors() { return $this->doors; }

    public function setDoors($doors) { $this->doors = $doors; }

    public function getFloors() { return $this->floors; }

    public function setFloors($floors) { $this->floors = $floors; }
}
