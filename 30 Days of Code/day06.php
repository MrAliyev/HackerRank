<?php

/*
 * Objective 
  Today we're expanding our knowledge of Strings and combining it with what we've already learned about loops. Check out the Tutorial tab for learning materials and an instructional video!

  Task
  Given a string, SS, of length NN that is indexed from 00 to N−1N−1, print its even-indexed and odd-indexed characters as 22 space-separated strings on a single line (see the Sample below for more detail).

  Note: 00 is considered to be an even index.

  Input Format

  The first line contains an integer, TT (the number of test cases).
  Each line ii of the TT subsequent lines contain a String, SS.

  Constraints

  1≤T≤101≤T≤10
  2≤length of S≤100002≤length of S≤10000
  Output Format

  For each String SjSj (where 0≤j≤T−10≤j≤T−1), print SjSj's even-indexed characters, followed by a space, followed by SjSj's odd-indexed characters.

  -------------------------------------------
  Sample Input

  2
  Hacker
  Rank
 
 * ------------------------------------------
  Sample Output

  Hce akr
  Rn ak

  -------------------------------------------
  Explanation

  Test Case 0: S="Hacker"S="Hacker"
  S[0]="H"S[0]="H"
  S[1]="a"S[1]="a"
  S[2]="c"S[2]="c"
  S[3]="k"S[3]="k"
  S[4]="e"S[4]="e"
  S[5]="r"S[5]="r"
  The even indices are 00, 22, and 44, and the odd indices are 11, 33, and 55. We then print a single line of 22 space-separated strings; the first string contains the ordered characters from SS's even indices (HceHce), and the second string contains the ordered characters from SS's odd indices (akrakr).

  Test Case 1: S="Rank"S="Rank"
  S[0]="R"S[0]="R"
  S[1]="a"S[1]="a"
  S[2]="n"S[2]="n"
  S[3]="k"S[3]="k"
  The even indices are 00 and 22, and the odd indices are 11 and 33. We then print a single line of 22 space-separated strings; the first string contains the ordered characters from SS's even indices (RnRn), and the second string contains the ordered characters from SS's odd indices (akak).
 * 
 *  */

$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */


$n = fgets($_fp);
for ($s = 0; $s < $n; $s++) {
    printChars(fgets($_fp));
}

function printChars($string) {
    $even = null;
    $odd = null;
    for ($i = 0, $len = strlen(trim($string)); $i < $len; $i++) {
        $char = $string[$i];
        if ($i % 2 == 0) {
            $even .= $char;
        } else {
            $odd .= $char;
        }
    }
    echo $even . " " . $odd . "\n";
}

fclose($_fp);
?>
