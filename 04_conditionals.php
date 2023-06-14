<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */
// They are special characters or symbols that are used to perform operation on statements or operands(figures that are being operated)
//1 arithematic operators 
// Thye are used to carry out arthemtic operations examples +  -  *  /
$desks=3;
 $table=1;
 $furnitures= $desks+$table;
 echo $furnitures;
 /* Logical Operators
 1.And (||) only tends to execute something if both conditions are met
 2.or($$) only executes something if either or both conditions are met
 3.not(!) - refus the current state
 4.Comparison Operators- are used to compare

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/


/* -------- Switch Statements ------- */
// types of datatypes

//if statements
$team1=89;
$team2=84;
if($team1>$team2){
  echo"team1 is greater than team2 <br> ";}
//if else statement
if($team1<$team2){
  echo"team1 is greater than team2";
}
else
{
  echo"team2 greater than team1";
}
$age=50;
if($age<30){
  echo "age is less than 30";
}elseif($age>30  &&  $age<40){
  echo "your age is between 30 and 40 <br> ";

}elseif($age>40 && $age<50){
  echo "your age is between 40 and 50 <br>";

}else{echo "yourage is greater than 50 <br>";}
// write a single phpcode to see whether someone is aligleble to vote or not
// write a simple php program to check whether a number is positive or negative

//queation 1
$age=10;
if($age<18){
  echo "Not able to vote <br> ";
}
elseif($age>18){
  echo"able to vote <br> ";
}
// question2
$number=-1;
if($number<0){
  echo "the number is negative";

}
elseif($number>0){
  echo "the number is positive";
}
//what do you use to key in data in php in the console

