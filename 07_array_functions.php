<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/


// get array length
$fruits=array('banana','oranges','apple','lemon','grape','watermelon','pineaple','guava','tomato','peas');
echo count($fruits);

//search element in a arry
echo in_array('strawberry',$fruits);

//adding element to an array
$fruits[]='kiwi';
var_dump($fruits, 'dates ','pawpaw','mango');
// removing an array from an element

array_pop($fruits);//function to remove the last element in array
 
array_shift($fruits);//function to remove the first element in an array

unset($fruits[3]);//remove specific element in array
print_r($fruits);