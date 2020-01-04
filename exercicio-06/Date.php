<?php
class Date {

    private $day;
    private $month;
    private $year;

    public function Date($day, $month, $year) {
        $this->setDay($day); 
        $this->setmonth($month);
        $this->setYear($year);
    }

    private function validateMonthSize($moth) { return ($this->month == 4 || $this->month == 6 || $this->month == 9 || $this->month == 11 && $this->day > 30) ? false : true; }

    public function showDate() {
        return "$this->day/$this->month/$this->year";
    }
    
    public function getDay() { return $this->day; }

    public function setDay($day) { $this->day = (!is_numeric($day) || $day < 1 || $day > 31) ? date(d) : $day; }

    public function getMonth() { return $this->month; }

    public function setMonth($month) { $this->month = (!is_numeric($month) || $month < 1 || $month > 12 || !$this->validateMonthSize($month)) ? date(m) : $month; }

    public function getYear() { return $this->year; }

    public function setYear($year) { $this->year = (!is_numeric($year) || $year < 1) ? date("Y") : $year; }
}
