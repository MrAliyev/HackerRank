<?php

/*
  Welcome to Day 18! Today we're learning about Stacks and Queues.

  A palindrome is a word, phrase, number, or other sequence of characters which reads the same backwards and forwards. Can you determine if a given string, s, is a palindrome?

  To solve this challenge, we must first take each character in s, enqueue it in a queue, and also push that same character onto a stack. Once that's done, we must dequeue the first character from the queue and pop the top character off the stack, then compare the two characters to see if they are the same; as long as the characters match, we continue dequeueing, popping, and comparing each character until our containers are empty (a non-match means s isn't a palindrome).
 */

class Solution {

    private $stack = [];
    private $queue = [];
    
    public function pushCharacter($char){
        $this->stack[] = $char;
    }
    
    public function enqueueCharacter($char){
        $this->queue[] = $char;
    }
    
    public function popCharacter(){
        return array_pop($this->stack);
    }
        
    public function dequeueCharacter(){
        return array_shift($this->queue);
    }

}

// read the string s
$s = fgets(STDIN);

$obj = new Solution();

$len = strlen($s);
$isPalindrome = true;

// push/enqueue all the characters of string s to stack
for ($i = 0; $i < $len; $i++) {
    $obj->pushCharacter($s{$i});
    $obj->enqueueCharacter($s{$i});
}

/*
  pop the top character from stack
  dequeue the first character from queue
  compare both the characters
 */
for ($i = 0; $i < $len / 2; $i++) {
    if ($obj->popCharacter() != $obj->dequeueCharacter()) {
        $isPalindrome = false;

        break;
    }
}

if ($isPalindrome) {
    echo "The word, " . $s . ", is a palindrome.";
} else {
    echo "The word, " . $s . ", is not a palindrome.";
}
