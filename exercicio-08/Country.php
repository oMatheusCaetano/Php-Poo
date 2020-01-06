<?php
class Country {

    private $name;
    private $capital;
    private $size;
    private $borders = array();
    
    public function Country($name = "NO NAME", $capital = "NO CAPITAL", $size = 0) {
        $this->name = $name;
        $this->capital = $capital;
        $this->size = $size;        
    }
    
    public function equal($country) { return ($this->name == $country->getName() && $this->capital == $country->getCapital()) ? true : false; }
    
    public function Neighboring($country) {
        $Neighboring = array();
        foreach ($this->borders as $border) {
            foreach ($country->getBorders() as $nBorder) {
                if ($border->equal($nBorder)) {
                    array_push($Neighboring, $border);
                }
            }
        }
        return $Neighboring;
    }
    
    function getName() { return $this->name; }

    function getCapital() { return $this->capital; }

    function getSize() { return $this->size; }

    function getBorders() { return $this->borders; }

    function setName($name) { $this->name = $name; }

    function setCapital($capital) { $this->capital = $capital; }

    function setSize($size) { $this->size = $size; }

    function setBorders($borders) { 
        foreach ($borders as $border) {
            if ($this->equal($border)) {return false;}
        }
        $this->borders = $borders;
    }
}
