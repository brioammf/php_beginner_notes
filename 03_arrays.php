<?php
/* ----------- Arrrays ----------- */

/*
  
  arrays are collections of items or data of the same data type stored at contogious memory location.
  Arrays hold multiple values. Each value in an array is called an "element"

 


  
  

*/
//example of an array
// simple arrys of numbers
//An example of Index Array
$numbers=[1,2,3,4,5,6,7,8,9];


// simple array of strings
$colors= ["white,red,blue,black,yellow,orange,<br>"];
$colorss= "colourless";
//echo $colorss;
//echo $colors[4];
//var_dump($colors);
//print_r($numbers);
// Types of Arrays
// 1: Associative Arrays- they allow us  to use name keys to identify values
// single dimention arrays
$rangi=[
  'red' => '#f00',
  'green' => '#0f0',
  'blue' => '00f',
];
//echo $rangi['red'];
//var_dump($rangi);
// 2: multidimention arrays
$people = [
  $person1=[
    'first name' => 'Brian',
    'last name' => 'Komo',
    'email addres' => 'briankomo234@gmail.com'
    ],

  $person2=[
    'first name' => 'Ian',
    'last name' => 'Komo',
    'email addres' => 'iankomo234@gmail.com'
  ],

  $person3=[
    'first name' => 'Nan',
    'last name' => 'Komo',
    'email addres' => 'nankomo234@gmail.com'
  ],
    
  ];
  // Hypertext Preprocessor
 
   //echo $people[2]['email addres '];
   // asignment

$CountCap = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallin",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw"
);
asort($CountCap);

foreach ($CountCap as $country => $capital) {
  echo "Capital:, " . $capital . " Country:, " . $country . "<br>";
}


// asort is used to arrange array in ascending order

//the purpose foreach is to loop





