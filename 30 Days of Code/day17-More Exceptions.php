<?php
/*
  Objective
  Yesterday's challenge taught you to manage exceptional situations by using try and catch blocks. In today's challenge, you're going to practice throwing and propagating an exception.

  Task
  Write a Calculator class with a single method: int power(int,int). The power method takes two integers, n and p, as parameters and returns the integer result of n^p. If either n or p is negative, then the method must throw an exception with the message: n and p should be non-negative.

  Note: Do not use an access modifier (e.g.: public) in the declaration for your Calculator class.
 */

class Calculator {

    public function power($n, $p) {
        if ($n < 0 or $p < 0) {
            throw new Exception('n and p should be non-negative');
        }
        return pow($n, $p);
    }

}

$myCalculator = new Calculator();
$T = intval(fgets(STDIN));
while ($T-- > 0) {
    list($n, $p) = explode(" ", trim(fgets(STDIN)));
    try {
        $ans = $myCalculator->power($n, $p);
        echo $ans . "\n";
    } catch (Exception $e) {
        echo $e->getMessage() . "\n";
    }
}