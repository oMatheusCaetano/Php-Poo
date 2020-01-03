<?php
class Point2D {

    private $x;
    private $y;

    public function Point2D($x = 0, $y = 0) {
        $this->x = $x;
        $this->y = $y;
    }

    public function distance($point2D) {
        return array(
            "x" => $this->x - $point2D->getX(),
            "y" => $this->y - $point2D->getY(),
        );
    }

    public function move($point2D) {
        $this->x = $point2D->getX();
        $this->y = $point2D->getY();
    }

    public function equal($point2D) { return ($this->x == $point2D->getX() && $this->y == $point2D->getY()) ? true : false; }

    public function clone() { return new Point2D($this->x, $this->y); }

    public function getX() { return $this->x; }

    public function setX($x) { $this->x = $x; }

    public function getY() { return $this->y; }

    public function setY($y) { $this->y = $y; }
}
