<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/
function HelloName(){
  echo "HelloName";
};
HelloName();
 function addingFunction($num1,$num2){
  $sum=$num1+$num2;
  echo "print $sum";
 }
 addingFunction(50,29);
  function MyName($Fname,){
   $Myname= $Fname;
    
    echo "print $Myname <br>";
  }
MyName("Brian.Komo <br>");
function subtractingfunction($num1,$num2){
  $sum=$num1-$num2;
  echo "print $sum";
}
subtractingfunction(60,30);


function multipleFunction($n1, $n2){
  $mult=$n1*$n2;
  echo " $mult";
}
multipleFunction(60,30); 