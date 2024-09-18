<?php
// a function that takes a string as input and returns an object where the keys are the words in the string and the values are the frequencies of the words.

// eg : input => "the man the boss and the worker"
//      output => {'the' : 3, 'man' : 1, 'boss' : 1, 'worker' : 1, 'and' : 1 }

class WordFrequencyCounter {
    private $wordFrequencies;


    public function __construct($String) {
        $this->wordFrequencies = $this->countWords($String);
    }


    private function countWords($String) {
        $wordFrequencies = [];


        $String = strtolower($String);

        $words = preg_split('/\s+/', $String, 0, PREG_SPLIT_NO_EMPTY);

    
        foreach ($words as $word) {
            $wordFrequencies[$word] = isset($wordFrequencies[$word]) ? $wordFrequencies[$word] + 1 : 1;

        }

        return $wordFrequencies;
    }

    
    public function getWordFrequencies() {
        return (object) $this->wordFrequencies;
    }
}


$String = "the man the boss and the worker";


$wordCounter = new WordFrequencyCounter($String);


$result = $wordCounter->getWordFrequencies();
print_r($result);

?>
