<?php

/*
 * Oskon testing
 * 
 * 1.Whenever a number multiple of 3 occurs or contains 3 in its representation, it should be replaced by the word “fizz”;
 * 2.If it is a multiple of 5, or it contains 5 in its representation, it should be changed to “buzz”;
 * 3.If it is a multiple of 3 and 5 it should be changed to “fizzbuzz”;
 * 4.If both rule 1 or rule 2 and rule 3 are checked at the same time, it should be changed to “lucky”;
 * 5.Rules 1 and 2 are cumulative. Example: 3 should be changed to “fizz fizz”.
 * 
 */

require_once dirname(__FILE__) . '/../fizzbuzz.php';

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @test Test Fizz
     */
    public function testFizz()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals('fizz fizz', $fizzbuzz->testNumber(6));
    }

    /**
     * @test Test Buzz
     */
    public function testBuzz()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals('buzz', $fizzbuzz->testNumber(5));
    }

    /**
     * @test Test FizzBuzz
     */
    public function testFizzBuzz()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals('fizzbuzz', $fizzbuzz->testNumber(15));
    }

    /**
     * @test Test Lucky
     */
    public function testLucky()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals('lucky', $fizzbuzz->testNumber(3));
    }

    /**
     * @test Test number
     */
    public function testReturnsInt()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals(2, $fizzbuzz->testNumber(2));
    }
    
    /**
     * @test Test output
     */
    public function testOutput(): void
    {
        $fizzbuzz = new FizzBuzz();
        $output = $fizzbuzz->getOutput();
        $this->assertFalse(array_key_exists(-1, $output));
        $this->assertTrue(array_key_exists(0, $output));
        $this->assertTrue(array_key_exists(9, $output));
        $this->assertTrue(array_key_exists(19, $output));
        $this->assertFalse(array_key_exists(100, $output));
    }
}

?>