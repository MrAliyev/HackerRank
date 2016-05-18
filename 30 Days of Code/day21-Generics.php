<?php

/* 
Objective 
Today we're discussing Generics; be aware that not all languages support this construct, so fewer languages are enabled for this challenge.

Task 
Write a single generic function named printArray; this function must take an array of generic elements as a parameter (the exception to this is C++, which takes a vector). The locked Solution class in your editor tests your function.

Note: You must use generics to solve this challenge. Do not write overloaded functions.
 */

import java.lang.reflect.Method;

class Solution {
    public static <T> void printArray(T[] arr){
        for(T a : arr){
            System.out.println(a);
        }
    }
    public static void main(String args[]){
        Integer[] intArray = { 1, 2, 3 };
        String[] stringArray = { "Hello", "World" };

        printArray( intArray  );
        printArray( stringArray );

        if(Solution.class.getDeclaredMethods().length > 2){
            System.out.println("You should only have 1 method named printArray.");
        }
    }
}

