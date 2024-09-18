<?php
// A feature that take two dates and calculates the number of days between them.

// eg:
//     date1 = '2024-09-10'
//     date2 = '2024-09-19'

// O/P => ( 9 days)

class DateCalculator {
    private $date1, $date2;


    public function __construct($date1, $date2) {
        $this->date1 = new DateTime($date1);
        $this->date2 = new DateTime($date2);
    }
    public function calculateDays() {
        $interval = $this->date2->diff($this->date1);
        return abs($interval->days); 
    }

    public function __toString() {
        return "The number of days between the two dates is " . $this->calculateDays() . " days.";
    }
}


$date1 = '2024-09-10';
$date2 = '2024-09-19';


$dateCalculator = new DateCalculator($date1, $date2);

echo $dateCalculator;

?>
