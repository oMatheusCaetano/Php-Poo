<?php
class Employee {

    private $name;
    private $lastName;
    private $salary;

    public function Employee($salary, $name = "NO NAME", $lastName = "NO  LAST NAME") {
        $this->setName($name);
        $this->setLastName($lastName);
        $this->setSalary($salary);
    }

    public function salaryIncrease() { $this->salary += $this->salary * 10 / 100; }

    public function getName() { return $this->name; }

    public function setName($name) { $this->name = $name; }

    public function getLastName() { return $this->lastName; }

    public function setLastName($lastName) { $this->lastName = $lastName; }

    public function getSalary() { return $salary; }

    public function setSalary($salary) { $this->salary = $salary < 0 ? 0 : $salary; }
}
