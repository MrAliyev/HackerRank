<?php

/*
  Objective
  Today, we're working with binary numbers.

  Task
  Given a base-10 integer, n, convert it to binary (base-2). Then find and print the base-10 integer denoting the maximum number of consecutive 1's in n's binary representation.

  Input Format

  A single integer, n.

  Constraints

  1≤n≤106
  
 Output Format

  Print a single base-10 integer denoting the maximum number of consecutive 1's in the binary representation of n.
 
 * ---------------------------------------------
  Sample Input 1

  5
  
 * ---------------------------------------------
 Sample Output 1

  1

 * --------------------------------------------- 
  Sample Input 2

  13
 
 * ---------------------------------------------
  Sample Output 2

  2
  
 * --------------------------------------------- 
  Explanation

  Sample Case 1:
  The binary representation of 5 is 101, so the maximum number of consecutive 1's is 1.

  Sample Case 2:
  The binary representation of 13 is 1101, so the maximum number of consecutive 1's is 2.
 */

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $n);

function convertToBinary($n) {
    while ($n > 0) {
        $binary[] = ($n % 2) ? 1 : 0;
        $n = intval($n / 2);
    }

    return $binary;
}

function countOnes($arr) {
    $max = 0;
    $cur = 0;
    foreach ($arr as $num) {
        if ($num === 1) {
            $cur++;
        } else {
            $cur < $max ? : $max = $cur;
            $cur = 0;
        }
    }

    return $max > $cur ? $max : $cur;
    //return max($max, $cur);
}

print(countOnes(convertToBinary($n)));
