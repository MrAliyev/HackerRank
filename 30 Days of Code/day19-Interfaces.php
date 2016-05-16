<?php

/*
  Objective
  Today, we're learning about Interfaces.

  Task
  The AdvancedArithmetic interface and the method declaration for the abstract int divisorSum(int n) method are provided for you in the editor below. Write the Calculator class, which implements the AdvancedArithmetic interface. The implementation for the divisorSum method must be public and take an integer parameter, n, and return the sum of all its divisors.

  Note: Because we are writing multiple classes in the same file, do not use an access modifier (e.g.: public) in your class declaration (or your code will not compile); however, you must use the public access modifier before your method declaration for it to be accessible by the other classes in the file.
 */

interface AdvancedArithmetic {

    public function divisorSum($n);
}

class Calculator implements AdvancedArithmetic {

    public function divisorSum($n) {
        $i = 0;
        $sum = 0;
        while ($i++ <= $n) {
            if ($n % $i == 0) {
                $sum += $i;
            }
        }
        return $sum;
    }

}

$n = intval(fgets(STDIN));
$myCalculator = new Calculator();
if ($myCalculator instanceof AdvancedArithmetic) {//checking if Calculator has implemented AdvancedArithemtic
    $sum = $myCalculator->divisorSum($n);
    echo "I implemented: AdvancedArithmetic\n" . $sum;
} else {
    echo "Wrong answer";
}