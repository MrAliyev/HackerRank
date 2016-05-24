<?php

/*
Objective 
This challenge is very different from the others we've completed because it requires you to generate valid test cases for a problem 
instead of solving the problem. There is no input to read, you simply have to generate and print test values for the problem that satisfy both the problem's Input Format and the criteria laid out in the Task section. 
 
*/

import java.io.*;
import java.util.*;

public class Solution {
    Solution(int n, int k, int[] a){
        System.out.println(n + " " + k);
        for(int i = 0; i < n; i++){
            System.out.print(a[i] + " ");
        }
        System.out.println();
    }
    
    public static void main(String[] args) {
        int tests = 5;
        System.out.println(tests);
        new Solution(4, 3, new int[] {0, -1, 3, 2});
        new Solution(5, 4, new int[] {0, -1, 0, -1, 4});
        new Solution(7, 5, new int[] {1, 3, 0, -1, -2, 3, 2});
        new Solution(3, 2, new int[] {0, -1, 2});
        new Solution(8, 6, new int[] {1, 2, 0, -1, 4, 2, 1, 2});
    }
}


