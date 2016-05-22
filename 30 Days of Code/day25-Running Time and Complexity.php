<?php

/*
  Task
  A prime is a natural number greater than 1 that has no positive divisors other than 1 and itself. Given a number, n, determine and print whether it's Prime or Not prime.
 */

$_fp = fopen("php://stdin", "r");
$d = fgets($_fp);

while ($n = fgets($_fp)) {
    echo isPrime($n);
}

// O(sqrt(n)) algorithm, primes are of the form 6k ± 1, with the exception of 2 and 3
function isPrime($n) {
    if ($n == 2 || $n == 3) {
        return "Prime\n";
    }
    if ($n == 1 || $n % 2 == 0 || $n % 3 == 0) {
        return "Not prime\n";
    }
    $i = 5;

    while ($i * $i <= $n) {
        if ($n % $i == 0 || $n % ($i + 2) == 0) {
            return "Not prime\n";
        }
        $i+=6;
    }
    return "Prime\n";
}
