<?php
class Counter {

    private $counter;

    public function incrementCounter($quantity) { $this->counter += $quantity; }

    public function resetCounter() { $this->counter = 0; }

    public function getCounter() { return $this->counter; }

    public function setCounter($counter) { $this->counter = $counter; }
}
