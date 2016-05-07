<?php

/**
 * Objective 
Today, we're learning about the Array data structure. Check out the Tutorial tab for learning materials and an instructional video!

Task 
Given an array, AA, of NN integers, print AA's elements in reverse order as a single line of space-separated numbers.

Input Format

The first line contains an integer, NN (the size of our array). 
The second line contains NN space-separated integers describing array AA's elements.

Constraints

1≤N≤10001≤N≤1000
1≤Ai≤100001≤Ai≤10000, where AiAi is the ithith integer in the array.
Output Format

Print the elements of array AA in reverse order as a single line of space-separated numbers.

Sample Input

4
1 4 3 2
Sample Output

2 3 4 1

 */


$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $n);
$arr_temp = fgets($handle);
$arr = explode(" ", $arr_temp);
array_walk($arr, 'intval');

$reverse = [];
for ($i = 0, $len = count($arr); $i < $len; $i++) {
    $reverse[] = array_pop($arr);
}

print implode(" ", $reverse);
?>

