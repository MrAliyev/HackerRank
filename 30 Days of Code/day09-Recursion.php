<?php

/*
  Objective
  Today, we're learning and practicing an algorithmic concept called Recursion.

  Recursive Method for Calculating Factorial
  factorial(N)={1N×factorial(N−1)N≤1otherwise
  factorial(N)={1N≤1N×factorial(N−1)otherwise
  Task
  Write a factorial function that takes a positive integer, NN as a parameter and prints the result of N!N! (NN factorial).

  Note: If you fail to use recursion or fail to name your recursive function factorial, you will get a score of 00.

  Input Format

  A single integer, NN (the argument to pass to factorial).

  Constraints

  2≤N≤122≤N≤12
  Your submission must contain a recursive function named factorial.
  Output Format

  Print a single integer denoting N!N!.

 * ---------------------------------------------
  Sample Input

  3

 * ---------------------------------------------
  Sample Output

  6



 * ---------------------------------------------
  Explanation

  Consider the following steps:

  factorial(3)=3×factorial(2)factorial(3)=3×factorial(2)
  factorial(2)=2×factorial(1)factorial(2)=2×factorial(1)
  factorial(1)=1factorial(1)=1
  From steps 22 and 33, we can say factorial(2)=2×1=2factorial(2)=2×1=2; then when we apply the value from factorial(2)factorial(2) to step 11, we get factorial(3)=3×2×1=6factorial(3)=3×2×1=6. Thus, we print 66 as our answer.
 */

$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

$n = abs((int) fgets($_fp));

function factorial($n) {
    if ($n < 2) {
        return 1;
    }
    return $n * factorial($n - 1);
}

echo factorial($n);