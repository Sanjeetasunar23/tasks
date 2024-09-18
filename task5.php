<?php
// A f(x) which takes Sample Input Strings eg: This is a sample file.

// Output:

//    .elif elpmas a si sihT

class StringReverser {
    private $String;

    public function __construct($String) {
        $this->String = $String;
    }

    
    public function reverseString() {
        return strrev($this->String); 
    }

    
    public function __toString() {
        return $this->reverseString();
    }
}


$x = "This is a sample file.";


$stringReverser = new StringReverser($x);


echo $stringReverser;

?>
