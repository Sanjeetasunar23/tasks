<?php
//  function that take two arrays and returns a new array containing the elements that are both in  first array but not in the second array.

class Arrayfrequency {
    public $x;
    public $y;

    
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    
    public function getDifference() {

        $result = array_diff($this->x, $this->y);
        return $result;
    }
}
$x = [1, 2, 3, 4, 5];
$y = [4, 5, 6, 7];

$arrayDifference = new Arrayfrequency($x, $y);

$result = $arrayDifference->getDifference();
print_r($result);

?>
