<?php

/*
  Objective
  Today, we're working with Binary Search Trees (BSTs).

  Task
  The height of a binary search tree is the number of edges between the tree's root and its furthest leaf. You are given a pointer, root, pointing to the root of a binary search tree. Complete the getHeight function provided in your editor so that it returns the height of the binary search tree.

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

    public function getHeight($root) {

        if ($root == null) {
            return -1;
        } else {
            if ($root->left) {
                $left = 1 + $this->getHeight($root->left);
            }
            if ($root->right) {
                $right = 1 + $this->getHeight($root->right);
            }
        }

        return max($left, $right);
    }

}

//End of Solution
$myTree = new Solution();
$root = null;
$T = intval(fgets(STDIN));
while ($T-- > 0) {
    $data = intval(fgets(STDIN));
    $root = $myTree->insert($root, $data);
}
$height = $myTree->getHeight($root);
echo $height;
