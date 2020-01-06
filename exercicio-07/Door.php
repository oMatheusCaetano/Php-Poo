<?php
class Door {

    private $open;
    private $color;
    private $x;
    private $y;
    private $z;

    public function open() { $this->open = true; }

    public function close() { $this->open = false; }

    public function getOpen() { return $this->open; }

    public function setOpen($open) { $this->open = $open; }

    public function getColor() { return $this->color; }

    public function setColor($color) {$this->color = $color; }

    public function getX() { return $this->x; }

    public function setX($x) { $tis->x = $x; }

    public function getY() { return $this->y; }

    public function setY($y) { $tis->y = $y; }

    public function getZ() { return $this->z; }

    public function setZ($z) { $tis->z = $z; }
}
