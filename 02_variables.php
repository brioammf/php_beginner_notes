<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/
// a variable is used to nmae a location



$name= "brian";
$gender= "male" ;
$favfood="pilau" ;
$age=20;
echo "Hello  my name is $name  I like eating $favfood currently  I am $age <br>  ";
$car=8;
$mamcars=2;
$father=1;
$brocars=2;
$remainingcars= $car-($mamcars+$father+$brocars );
echo " $remainingcars ";
