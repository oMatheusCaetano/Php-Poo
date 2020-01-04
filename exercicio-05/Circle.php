<?php
class Circle {

    private $x;
    private $y;
    private $radius;

    public function Circle($radius,$x = 0, $y = 0 ) {
        $this->x = $x;
        $this->y = $y;
        $this->setRadius($radius);
    }
 
    public function area() { return pi() * ($this->radius * 2); }

    public function move($point) {
        $this->x = $point->getX();
        $this->y = $point->getY();
    }

    public function increase($value) { $this->setRadius($this->radius + $value); }

    public function decrease($value) { $this->setRadius($this->radius - $value); }

    public function getX() { return $this->x; }

    public function setX($x) { $this->x = $x; }

    public function getY() { return $this->y; }

    public function setY($x) { $this->y = $y; }

    public function getRadius() { return $this->radius; }

    public function setRadius($radius) { $this->radius = $radius < 0 ? 0 : $radius; }
}
