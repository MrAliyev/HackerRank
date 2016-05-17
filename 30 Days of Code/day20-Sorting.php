<?php

/*
Objective 
Today, we're discussing a simple sorting algorithm called Bubble Sort.

Task 
Given an array, a, of size n containing distinct elements a[0], a[1],...,a[n-1], sort array a in ascending order using the Bubble Sort algorithm. 
Once sorted, print the following 3 lines:

1. Array is sorted in $numberOfSwaps swaps
where $numberOfSwaps is the number of swaps that took place.
2. First Element: $firstElement
where $firstElement is the first element in the sorted array.
3. Last Element: $LastElement
where $LastElement is the last element in the sorted array.
 */

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
array_walk($a,'intval');

$numberOfSwaps = 0;

for ($i = 0; $i < $n; $i++) {    
    for ($j = 0; $j < $n - 1 - $i; $j++) {
        if ($a[$j] > $a[$j + 1]) {
            $tmp = $a[$j];
            $a[$j] = $a[$j + 1];
            $a[$j + 1] = $tmp;
            $numberOfSwaps++;
        }
    }
}

print 'Array is sorted in ' . $numberOfSwaps . " swaps.\n";
print 'First Element: ' . $a[0] . "\n";
print 'Last Element: ' . $a[$n-1] . "\n";

