<?php
/*write a php program print the word hello world using variables.* */
$name="Hello world";
echo"$name";
echo"<br>";

/*write a php program to show the current month using switch.* */

$months=date('F');
switch($months){
    case 'JANUARY';
    echo'THE CURRENT MONTH IS JANUARY';
    break;
    case 'FEBRUARY';
    echo'THE CURRENT MONTH IS FEBRUARY';
    break;
    case 'MARCH';
    echo'THE CURRENT MONTH IS MARCH';
    break;
    case 'April';
    echo'THE CURRENT MONTH IS April';
    break;
    case 'MAY';
    echo'THE CURRENT MONTH IS MAY';
    break;
    case 'JUNE';
    echo'THE CURRENT MONTH IS JUNE';
    break;
    case 'JULY';
    echo'THE CURRENT MONTH IS JULY';
    break;
    case 'AUGUST';
    echo'THE CURRENT MONTH IS AUGUST';
    break;
    case 'SEP';
    echo'THE CURRENT MONTH IS SEP';
    break;
    case 'OCT';
    echo'THE CURRENT MONTH IS OCT';
    break;
    case 'NOV';
    echo'THE CURRENT MONTH IS NOV';
    break;
    case 'DEc';
    echo'THE CURRENT MONTH IS dec';
    break;

}
echo '$months';

/**  write a php program to add two numbers.*/
function addingnumbers($num1,$num2){
  $sum=$num1+$num2;
    echo"$sum";
};
addingnumbers(1,3);
echo "<br>";

/* write a php program to caclulate the cirumfrence of a circle.*
 */
function circumfrenceofacircle($pie,$radius){
  $answer=$pie*$radius*2;
  echo "$answer";
}
circumfrenceofacircle(3.142,75);
echo "<br>";
/* write a php program to reverse a string technology.* */
$string='techonlogy';
echo strrev($string);



