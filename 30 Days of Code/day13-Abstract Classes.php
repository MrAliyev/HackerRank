<?php

/*
Objective 
Today, we're taking what we learned yesterday about Inheritance and extending it to Abstract Classes. Because this is a very specific Object-Oriented concept, submissions are limited to the few languages that use this construct.

Task 
Given a Book class and a Solution class, write a MyBook class that does the following:

Inherits from Book
Has a parameterized constructor taking these 3 parameters:

string title
string author
int price

Implements the Book class' abstract display() method so it prints these 33 lines:

Title:, a space, and then the current instance's titletitle.
Author:, a space, and then the current instance's authorauthor.
Price:, a space, and then the current instance's priceprice.

Note: Because these classes are being written in the same file, you must not use an access modifier (e.g.: publicpublic) when declaring MyBook or your code will not execute.

Input Format

You are not responsible for reading any input from stdin. The Solution class creates a Book object and calls the MyBook class constructor (passing it the necessary arguments). It then calls the display method on the Book object.

Output Format

The void display() method should print and label the respective titletitle, authorauthor, and priceprice of the MyBook object's instance (with each value on its own line) like so:

Title: $title
Author: $author
Price: $price
Note: The $ is prepended to variable names to indicate they are placeholders for variables.

Sample Input

The following input from stdin is handled by the locked stub code in your editor:

The Alchemist
Paulo Coelho
248

Sample Output

The following output is printed by your display() method:

Title: The Alchemist
Author: Paulo Coelho
Price: 248
 */

abstract class Book {

    protected $title;
    protected $author;

    function __construct($t, $a) {
        $this->title = $t;
        $this->author = $a;
    }

    abstract protected function display();
}

class MyBook extends Book {

    private $price = 0;

    public function __construct($title, $author, $price) {
        parent::__construct($title, $author);
        $this->price = $price;
    }

    public function display() {
        print "Title: " . $this->title;
        print "Author: " . $this->author;
        print "Price: " . $this->price;
    }

}

$title = fgets(STDIN);
$author = fgets(STDIN);
$price = intval(fgets(STDIN));
$novel = new MyBook($title, $author, $price);
$novel->display();
