<?php

// --------------------------Practice --------------------------------------------
// $numbers = [
//     'stephan' => [1, 2, 3],
//     'polina' => [4, 5, 6],
//     'andy' => [7, 8, 9]
// ];

// foreach ($numbers as $name => $value) {
//     echo $name . ": ";
//     foreach ($value as $item) {
//         echo $item . " ";
//     }
//     echo "<br>";
// }
// echo "<hr>"; 
//----------------------------------------


// $kites = [
//     $Gin = ["size" => 8],
//     $Gaastra = ["size" => 12], 
//     $Naish = ["size" => 10]
// ];

// $kites = [
//     "name" => "Gin",
//     "size" => 8,
//     "name" => "Gaastra",
//     "size" => 12,
//     "name" => "Naish",
//     "size" => 10
// ];

// foreach ($kites as $key => $value) {
//     echo "$key : $value <br>";
// }

//---------------------------------------------

// $DDD = [
//     ['name' => 'Tim', 'age' => 19, 'hobby' => 'gamen', 'address' => ''],
//     ['name' => 'Meric', 'age' => 21, 'hobby' => 'trainen, gamen', 'address' => 'Winterkoning'],
//     ['name' => 'Jeroen', 'age' => 20, 'hobby' => 'voetbal, gamen', 'address' => '']
// ];

// sort($DDD);
// foreach($DDD as $index) {
//     foreach ($index as $keys => $value) {
//         echo $keys . " :" . $value . "<br>";
//     }
//     echo "<hr>";
// }

//------------------------------------------

// $persons = [
//     'person 1' => [ 
//         'name' => 'rickb',
//         'hobby' => 'gamen',
//         'age' => '22',
//     ],
//     'person 2' => [ 
//         'name' => 'bas',
//         'hobby' => 'mma',
//         'age' => '26',
//     ],
//     'person 3' => [ 
//         'name' => 'jan',
//         'hobby' => 'niks',
//         'age' => '21',
//     ]
// ];

// foreach ($persons as $key => $value) {
//     echo $key . "<br>";
//     foreach ($value as $keyy => $valuee) {
//         echo $keyy . " : ". $valuee . "<br>";
//     }
//     echo "<hr>";
// }

//----------------------------------------

// $groups = [
//     [ 
//         'JeRiCan' => [
//             ['name' => 'rickb', 'hobby' => 'gamen'],
//             ['name' => 'ricks', 'hobby' => 'gamen'],
//             ['name' => 'djimairo', 'hobby' => 'gamen']
//         ]

//     ],
//     [
//         'GGG' => [
//             ['name' => 'hi', 'hobby' => 'gamen'],
//             ['name' => 'hola', 'hobby' => 'gamen'],
//             ['name' => 'hello', 'hobby' => 'gamen']
//         ]
//     ]
// ];

// foreach ($groups as $group) {
//     foreach ($group as $groupName => $value) {
//         echo $groupName . ": <br>";
//         foreach ($value as $member) {
//             foreach ($member as $key => $values) {
//                 echo $key . " = " . $values . "<br>";
//             }
//         }
//     }
//     echo "<hr>";
// }

//-------------------------------------------------------------

// --------------------------End of practice --------------------------------------------

// // Dimensional array without associative arrays. 
// $group1 = [ 
//     [
//         'Daniel',
//         22,
//         31615601397,
//         'daniel.pustjens@gmail.com',
//         'Windesheim',
//         'AD Software Development',
//         'Year 1',
//         [
//             'Father',
//             'Mother'
//         ],
//         [
//             'PHP',
//             'Javascript',
//             'HTML',
//             'CSS',
//             'C'
//         ],
//         [
//             'Work-out',
//             'Game',
//             'Sleep',
//             'Boxing',
//             'MMA'
//         ]
//     ],
//     [
//         'Jordy',
//         19,
//         31634271862,
//         'daniel.pustjens@gmail.com',
//         'Windesheim',
//         'AD Software Development',
//         'Year 1',
//         [
//             'Father',
//             'Mother'
//         ],
//         [
//             'PHP',
//             'Javascript',
//             'HTML',
//             'CSS',
//             'C'
//         ],
//         [
//             'Work-out',
//             'Game',
//             'Sleep',
//             'Boxing',
//             'MMA'
//         ]
//     ],
//     [
//         'Omar',
//         20,
//         31615601397,
//         'daniel.pustjens@gmail.com',
//         'Windesheim',
//         'AD Software Development',
//         'Year 1',
//         [
//             'Father',
//             'Mother'
//         ],
//         [
//             'PHP',
//             'Javascript',
//             'HTML',
//             'CSS',
//             'C'
//         ],
//         [
//             'Work-out',
//             'Game',
//             'Sleep',
//             'Boxing',
//             'MMA'
//         ]
//     ]
// ];

// // echo "<pre>";
// // print_r(count($group1));
// // echo "</pre>";

// for($i = 0; $i < count($group1); $i++) {
//     if (is_array($group1[$i])){
//         for($j = 0; $j < count($group1[$i]); $j++) {
//             echo "<pre>";
//             print_r(count($group1[$i][$j]));
//             echo "</pre>";
//             // echo $group1[$i][$j] . "<br>";
//         }
//     } else {
//         echo $group1[$i] . "<br>";
//     }
//     echo "<hr>";
// }




// // Loops all the members arrays.
// foreach ($group1 as $members) {
//     // Loops each member array.
//     foreach ($members as $member) {
//     // Filters the values in each member array, for when they're arrays or ints/strings.
//         if (is_array($member)){
//             // Loops the values kept in an array
//             foreach ($member as $valueArray) {
//                 echo $valueArray . "<br>";
//             }
//             echo "<br>";   
//         } else {
//             echo $member . "<br>";
//         }
//     }
//     echo "<hr>"; 
// }



?>