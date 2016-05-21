<?php

/*
Task 
A Node class is provided for you in the editor. A Node object has an integer data field, data, and a Node instance pointer, next, pointing to another node (i.e.: the next node in a list).

A removeDuplicates function is declared in your editor, which takes a pointer to the head node of a linked list as a parameter. Complete removeDuplicates so that it deletes any duplicate nodes from the list and returns the head of the updated list.

Note: The head pointer may be null, indicating that the list is empty. Be sure to reset your next pointer when performing deletions to avoid breaking the list.
 */

class Node {

    public $data;
    public $next;

    function __construct($d) {
        $this->data = $d;
        $this->next = NULL;
    }

}

class Solution {

    function removeDuplicates($head) {

        if ($head == null) {
            return $head;
        }
        $node = $head;
        while ($node->next != null) {
            if ($node->data === $node->next->data) {
                $node->next = $node->next->next;
            } else {
                $node = $node->next;
            }
        }
        return $head;
    }

    function insert($head, $data) {
        //complete this method
        $p = new Node($data);
        if ($head == null) {
            $head = $p;
        } else if ($head->next == null) {
            $head->next = $p;
        } else {
            $start = $head;
            while ($start->next != null) {
                $start = $start->next;
            }
            $start->next = $p;
        }
        return $head;
    }

    function display($head) {
        $start = $head;
        while ($start) {
            echo $start->data, ' ';
            $start = $start->next;
        }
    }

}

$T = intval(fgets(STDIN));
$head = null;
$mylist = new Solution();
while ($T-- > 0) {
    $data = intval(fgets(STDIN));
    $head = $mylist->insert($head, $data);
}
$head = $mylist->removeDuplicates($head);
$mylist->display($head);
