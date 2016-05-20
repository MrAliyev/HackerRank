<?php

/*
  Objective
  Today, we're going further with Binary Search Trees.

  Task
  A level-order traversal, also known as a breadth-first search, visits each level of a tree's nodes from left to right, top to bottom. You are given a pointer, root, pointing to the root of a binary search tree. Complete the levelOrder function provided in your editor so that it prints the level-order traversal of the binary search tree.
 */

class Node {

    public $left, $right;
    public $data;

    function __construct($data) {
        $this->left = $this->right = null;
        $this->data = $data;
    }

}

class Solution {

    public function insert($root, $data) {
        if ($root == null) {
            return new Node($data);
        } else {
            if ($data <= $root->data) {
                $cur = $this->insert($root->left, $data);
                $root->left = $cur;
            } else {
                $cur = $this->insert($root->right, $data);
                $root->right = $cur;
            }
            return $root;
        }
    }

    public function levelOrder($root) {

        $nodes = [$root];

        while (count($nodes) > 0) {
            $node = array_shift($nodes);
            if ($node->left) {
                $nodes[] = $node->left;
            }
            if ($node->right) {
                $nodes[] = $node->right;
            }
            print $node->data . " ";
        }
    }

}

$myTree = new Solution();
$root = null;
$T = intval(fgets(STDIN));
while ($T-- > 0) {
    $data = intval(fgets(STDIN));
    $root = $myTree->insert($root, $data);
}
$myTree->levelOrder($root);
