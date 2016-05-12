<?php

/*
Objective 
Today we're working with Linked Lists.

A Node class is provided for you in the editor. A Node object has an integer data field, data, and a Node instance pointer, next, pointing to another node (i.e.: the next node in a list).

A Node insert function is also declared in your editor. It has two parameters: a pointer, head, pointing to the first node of a linked list, and an integer data value that must be added to the end of the list as a new Node object.

Task 
Complete the insert function in your editor so that it creates a new Node (pass data as the Node constructor argument) and inserts it at the tail of the linked list referenced by the head parameter. Once the new node is added, return the reference to the head node.

Note: If the head argument passed to the insert function is null, then the initial list is empty.

Input Format

The insert function has  parameters: a pointer to a Node named , and an integer value, . 
The constructor for Node has  parameter: an integer value for the  field.

You do not need to read anything from stdin.

Output Format

Your insert function should return a reference to the  node of the linked list.
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

    function insert(&$head, $data) {
        if ($head === null) {
            return new Node($data);
        }
        $head->next = $this->insert($head->next, $data);

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
$mylist->display($head);
