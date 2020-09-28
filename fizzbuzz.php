<?php

/*
 * Oskon
 * 
 * 1.Whenever a number multiple of 3 occurs or contains 3 in its representation, it should be replaced by the word “fizz”;
 * 2.If it is a multiple of 5, or it contains 5 in its representation, it should be changed to “buzz”;
 * 3.If it is a multiple of 3 and 5 it should be changed to “fizzbuzz”;
 * 4.If both rule 1 or rule 2 and rule 3 are checked at the same time, it should be changed to “lucky”;
 * 5.Rules 1 and 2 are cumulative. Example: 3 should be changed to “fizz fizz”.
 * 
 */

Class FizzBuzz {
    
    /**
     * Test number
     * 
     * @param int $number Number to test
     *
     * @return string Output result
     */
    public function testNumber(int $number) {
        if(strpos('3', (string) $number) !== false) {
            return 'lucky';
        } elseif($number % 15 === 0) {
            return 'fizzbuzz';
        } elseif($number % 5 === 0) {
            return trim(str_repeat('buzz ', $this->checkTimes($number, 5)));
        } elseif($number % 3 === 0) {
            return trim(str_repeat('fizz ', $this->checkTimes($number, 3)));
        } else {
            return $number;
        }
    }
    
    /**
     * Check divisible time
     * 
     * @param int $number Number to test
     *
     * @return int Times divisible
     */
    public function checkTimes(int $number, int $divider) {
        $mod = $number % $divider;
        return ($number - $mod) / $divider;
    }
    
    /**
     * Run example
     *
     * @return array Output result
     */
    public function getOutput() {
        
        $output  = []; //Save output
        $numbers = range(1, 20); // Test 1-20 numbers
        
        foreach($numbers as $number) {
            $output[] = $this->testNumber($number);
        }
        
        return $output; // Return output
    }
}

#$fizzbuzz = new FizzBuzz();
#var_dump($fizzbuzz->getOutput());

?>