<?php

/*
  Objective
  Today, we're working with binary numbers. Check out the Tutorial tab for learning materials and an instructional video!

  Task
  Given a base-1010 integer, nn, convert it to binary (base-22). Then find and print the base-1010 integer denoting the maximum number of consecutive 11's in nn's binary representation.

  Input Format

  A single integer, nn.

  Constraints

  1≤n≤1061≤n≤106
  Output Format

  Print a single base-1010 integer denoting the maximum number of consecutive 11's in the binary representation of nn.
 
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
  The binary representation of 55 is 101101, so the maximum number of consecutive 11's is 11.

  Sample Case 2:
  The binary representation of 1313 is 11011101, so the maximum number of consecutive 11's is 22.
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
