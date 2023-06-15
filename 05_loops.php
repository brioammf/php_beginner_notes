<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/
for($count=1; $count<=5; $count++){
  echo "my output number is:$count <br> "; 
}


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }

*/
$value=1;
while($value<=5){
echo "increment number:$value<br>";
$value ++;}


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/
$number=10;
do{echo"increment number by :$number <br>;";
$number++;}

while($number<=20);



/* ---------- Foreach Loop ---------- */


/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/
$number=30;
$cars=45;
foreach("$number"){
  echo "the is number;";
}
// a loop is statement that stop repats itself until the statemnt is true
