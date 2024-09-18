<?php
//  function groupnamesbyage($people){
//      $result = [];
        

// foreach ($people as $person) {
//     $result[$person->age][] = $person->name;
// }

//     return $result;
// }

// $people = [
//     (object) ['name' => 'ram', 'age' => 25],
//     (object) ['name' => 'sita', 'age' => 30],
//     (object) ['name' => 'shyam', 'age' => 25],
//     (object) ['name' => 'laxman', 'age' => 40],
//     (object) ['name' => 'radha', 'age' => 30]
// ];

// $grouped = groupnamesbyage($people);

// print_r($grouped);

// a function that take a array of objects as input, where each object represents a person with keys 'name' and 'age', and returns a new array where the keys are the ages and the values are list of names that are related to that age.


class AgeGroup {
    private $people;

    
    public function __construct($people) {
        $this->people = $people;
    }

    public function getNamesByAge() {
        $result = [];

        foreach ($this->people as $person) {
            $result[$person->age][] = $person->name;
        }

        return $result;
    }
    
}

$people = [
    (object) ['name' => 'ram', 'age' => 25],
    (object) ['name' => 'sita', 'age' => 30],
    (object) ['name' => 'shyam', 'age' => 25],
    (object) ['name' => 'laxman', 'age' => 40],
    (object) ['name' => 'radha', 'age' => 30]
];


$ageGroup = new AgeGroup($people);

$result = $ageGroup->getNamesByAge();
print_r($result);
?>



