<?php

/*
  Objective
  Today, we're working with regular expressions.

  Task
  Consider a database table, Emails, which has the attributes First Name and Email ID.
  Given N rows of data simulating the Emails table, print an alphabetically-ordered list of people
  whose email address ends in @gmail.com.

  Input Format

  The first line contains an integer, N, total number of rows in the table.
  Each of the N subsequent lines contains 2 space-separated strings denoting a person's first name and email ID, respectively.


 */

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $N);
for ($a0 = 0; $a0 < $N; $a0++) {
    //fscanf($handle,"%s %s",$firstName,$emailID);
    preg_match("/(\w+)(.+@gmail\.com)/", fgets($handle), $matches[]);
}

sort($matches);

foreach ($matches as $name) {
    if (!empty($name))
        print $name[1] . "\n";
}