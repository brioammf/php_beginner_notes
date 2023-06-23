<?php
/*$color = array('white', 'green', 'red'')
Write a PHP script which will display the colors in the following way :
Output :
white, green, red,
 green
 red
 white*/
$color=array('white','green','red');
asort($color);
foreach($color as $value){
    echo ("$value <br>");
}
echo "<br>";

/* $x = array(1, 2, 3, 4, 5);
Delete an element from the above PHP array. After deleting the element, 
integer keys must be normalized.
Sample Output :
array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }*/
$x=array(1,2,3,4,5);
var_dump($x);
echo "<br>";
unset($x[3]);
var_dump($x);
 /* 3.Write a PHP script that inserts a new item in an array in any position.
Expected Output :
Original array :
1 2 3 4 5
After inserting '$' the array is :
1 2 3 $ 4 5 */
 $num=array(1,2,3,4,5);
 echo'<br>';
 array_splice($num,3,0,"$");
 echo implode($num);
 echo'<br>';
 /*4. Write a PHP script to calculate and display average temperature, five 
lowest and highest temperatures.
Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 
76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Expected Output :
Average Temperature is : 70.6
List of seven lowest temperatures : 60, 62, 63, 63, 64,
List of seven highest temperatures : 76, 78, 79, 81, 85, */
 $temp=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 
 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
 $num=array_sum($temp);
$number=count($temp);
$mean=$num/$number;
echo($mean ); 
echo'<br>';

sort($temp);
$lowest7=array_slice($temp,0,7);
echo implode(' ',$lowest7);
echo'<br>';
$high7=array_slice($temp,23,30);
echo implode(' ',$high7);
echo'<br>';
 
/*5. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be 
no hyphen(-) at starting and ending position.*/
for($a=1; $a<=10; $a++){
    if ($a<10){
        echo "$a-";

    }
    else{
        echo"$a". "<br>";
    }
}
 /*6. Create a script using a for loop to add all the integers between 0 and 30 
and display the total.
*/
 $total=0;
  for($t=0; $t<=30; $t++ ){
   $total += $t;
}
echo $total;
echo "<br>";
/*7. Create a script to construct the following pattern, using nested for loop.*/

$rows = 5; 

for ($i = 1; $i <= $rows; $i++) {
  for ($j = 1; $j <= $i; $j++) {
    echo "* ";
  }
  echo "<br>";
}
?>
<!DOCTYPE html>
<body>
    <table width ="270px" border="10px">

<?php
for ($row=1; $row<=8; $row++){
   
    for ($col=1;$col<=8; $col++ ) {
      $total=$col+$row;
      if($total%2==0){
        echo "<td height=30px width=30px bgcolor=#000000></td>";

      }
      else{
        echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
      }
    }echo"</tr>";
  } ?>

    
</table>
</body>
</html>
<?php
/*9 . Write a PHP program to compute the sum of the two given integer values. 
If the two values are the same, then returns triple their sumiy.
Sample Input
1, 2
3, 2
2, 2*/
function computeSum($num1, $num2) {
  $sum = $num1 + $num2;

  if ($num1 == $num2) {
    $sum *= 3;
  }

  return $sum;
}

$input = [
  [1, 2],
  [3, 2],
  [2, 2]
];

foreach ($input as $pair) {
  $num1 = $pair[0];
  $num2 = $pair[1];
  $result = computeSum($num1, $num2);
  echo "Sum of $num1 and $num2: $result\n";
}



