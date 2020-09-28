PHP FizzBuzz

Requirements:

1.Whenever a number multiple of 3 occurs or contains 3 in its representation, it should be replaced by the word “fizz”;
2.If it is a multiple of 5, or it contains 5 in its representation, it should be changed to “buzz”;
3.If it is a multiple of 3 and 5 it should be changed to “fizzbuzz”;
4.If both rule 1 or rule 2 and rule 3 are checked at the same time, it should be changed to “lucky”;
5.Rules 1 and 2 are cumulative. Example: 3 should be changed to “fizz fizz”.

To execute:

$fizzbuzz = new FizzBuzz();

$result = $fizzbuzz->testNumber(5); // Test number: 'buzz'

$output = $fizzbuzz->getOutput(); // Run example from range 1-20
