# PHP Interview  Prep

## Difference between variable and constants

### Variables
* The value of the variable can be changed during the execution.
* Variables must be named with a '$' at bthe start.
* You can define a variable just by assigning it
* Default scope is the current access scope

### Constants
* Constant value cannot be chnaged during script execution
* No dollar sign is required in the naming of a constant, it can start with a letter or underscore
* Constants cannot be defined by simple assignments, They are defined using the 'define()' function
* Constants can be accessed throughout without any scoping rules
**TODO WHAT ABOUT OUTSIDE FILES???**

#### Example of defining a constant
```php
define(name, value, case-insensitive = false)

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;

define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]); ## defining a constant array

```

**Note:** Defining case-insensitive constants was deprecated in PHP 7.3. PHP 8.0 accepts only false, the value true will produce a warning.


## Difference between the include() and require() functions?

### include() function
* This function copies all the contents of the file it calls, into the file from where it is called from.
* When the file is included cannot be found, it only produces a warning (E_ WARNING) and the script will continue the execution.

### require() function
* Does the same copying process as include()
* When the file included cannot be found, it will produce a fatal error (E_COMPILE_ERROR) and terminates the script

#### Best Practice with these functions
Should use require() in large-scale software systems, can pinpoint issues straight away with the fatal error and fix inaccurancies quicker and easier.
#### require_once() and include_once()
The require() function is used to include a PHP file into another irrespective of whether the file is included before or not. The requie_once() will first check whether a file is already included or not and if it is already included then it will not include it again. Same for include_once()
**TODO Best practises here**


## Difference between Gstatic and dynamic website
### Static website 
* Content cannot be manipulated after the script execution
* No way to change the content as it is predefined

### Dynamic website
* Content can be changed even at runtime
* Content can be changed easily by manipulation and reloading

## Strings in PHP
When you create a strring in PHP by enclosing a sequence of characters in either single quotes or double quotes then PHP will interpret them differently
### Single quoted strings
Single-quoted strings will output each character exactly as specified. The exception for single-quoted strings is a single quote.
So to get **string's** outputed you would need to write it as **string\'s**
**Note:** if you want to render \', you must use three backslashes (\\\'). First \\ to render the backslash itself, and then \' to render the apostrophe. 
**TODO FINISH THIS BIT**

## Difference between break and continue in PHP
They are both used to skip iterations of a loop and hence can be a useful way to control the flow of a program
* Use break to jump out of a loop
* Use continue to skip an iteration of a loop
**TODO** how to use them properly in switch statements



## Passing by reference vs passing by value

## Scoping in PHP

## Method chaining
Joining of multiple methods called on an object so as to increase the readability of the code 

Without method chaining:
```php

$obj = new studentDetails();
$obj->setStudentId(1423);
$obj->setStudentName('John');
$obj->setStudentAddress('LA');
```

With method chaining:
```php
$obj = new studentDetails();
$studentInfo = $obj->setStudentId(1423)
                   ->setStudentName('John')
                   ->setStudentAddress('LA');
```

For method chaining to work you need to return $this object in the methods so the next method that is chained on can handle that object.


```php
 public function setStudentAddress($address) {
  $this->address = $address;
  return $this;
 }
```
