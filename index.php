<?php

require 'functions/function.php';


/**
 * Array
 */

// $kites = [
//     $Gin = ["size" => 8],
//     $Gaastra = ["size" => 12], 
//     $Naish = ["size" => 10]
// ];

$kites = [
    "name" => "Gin",
    "size" => 8,
    "name" => "Gaastra",
    "size" => 12,
    "name" => "Naish",
    "size" => 10
];

// foreach ($kites as $key => $value) {
//     echo "$key : $value <br>";
// }

$DDD = [
    ['name' => 'Tim', 'age' => 19, 'hobby' => 'gamen', 'address' => ''],
    ['name' => 'Meric', 'age' => 21, 'hobby' => 'trainen, gamen', 'address' => 'Winterkoning'],
    ['name' => 'Jeroen', 'age' => 20, 'hobby' => 'voetbal, gamen', 'address' => '']
];

$numbers = [
    'stephan' => [1, 2, 3],
    'polina' => [4, 5, 6],
    'andy' => [7, 8, 9]
];



foreach ($numbers as $number => $value) {
    echo $number . ": ";
    foreach ($value as $item) {
        echo $item . " ";
    }
    echo "<br>";
}

// die(var_dump($DDD));

sort($DDD);
// foreach ($DDD as $student) {
//     echo $student["name"] . " " . $student["age"] . "<br>&nbsp;" . $student["hobby"] . "<hr>";

// }

for ($i = 0; $i < count($DDD); $i++) {
    echo $DDD[$i]['name'] . " " . $DDD[$i]['hobby'] . " <br>";
    if ($DDD[$i]['address'] != '') {
        echo $DDD[$i]['address'] . "<br><hr>";
    } else {
        echo "Geen adres <br><hr>";
    }
}

// Voor elke kites per kite
// laat naam zien onder elkaar

// foreach ($kites as $kite) {
//     foreach ($kite as $key => $value){
//         echo "$key $value";
//     }
//     echo "<hrr>";
// }

// for ($i = 0; $i < count($kites); $i++) {
//     echo "$kites[$i] <br>";
// }

//print_r($kites);
//die(var_dump($kites[2]));

/**
 * Multidimensional Array
 */

/**
 * for-loop
 */

/**
 * foreach-loop
 */

/**
 * Haal de presentatie van een variabele binnen
 */

// Excercise 2
$name = "Daniel Pustjens";
$age = 22;
$mobile =  31615601397;
$email = "daniel.pustjens@gmail.com";
$collegeName = "Windesheim";
$collegeStudy = "AD Software Development";
$family = ["Father", "Mother"];
$languages = [
    "PHP",
    "Javascript",
    "HTML",
    "CSS",
    "C"
];
$hobbies = [
    "Work-out",
    "Game",
    "Sleep",
    "Boxing",
    "MMA"
];


$daniel = [
    'Daniel Pustjens',
    22,
    31615601397,
    'daniel.pustjens@gmail.com',
    'Windesheim',
    'AD Software Development',
    'Year 1',
    [
        'Father',
        'Mother'
    ],
    [
        'PHP',
        'Javascript',
        'HTML',
        'CSS',
        'C'
    ],
    [
        'Work-out',
        'Game',
        'Sleep',
        'Boxing',
        'MMA'
    ]
];

// echo "<pre>";
// print_r($daniel);
// echo "</pre>";

// for($i = 0; $i < count($daniel); $i++) {
//     if (is_array($daniel[$i])){
//         for($j = 0; $j < count($daniel[$i]); $j++) {
//             echo $daniel[$i][$j];
//         };   
//     } else {
//     echo $daniel[$i] . "<br>";
//     }
// }


// foreach ($daniel as $info) {
//     if (is_array($info)){
//         foreach ($info as $value) {
//             echo $value;
//         };   
//     } else {
//         echo $info . "<br>";
//     }
// }


//---------------------------------------------------------------------
// Exercise 3
$group = [
    [
        'name' => 'Daniel Pustjens',
        'age' => 22,
        'mobile' => 31615601397,
        'email' => 'daniel.pustjens@gmail.com',
        'collegeName' => 'Windesheim',
        'collegeStudy' => 'AD Software Development',
        'CollegeYear' => 'Year 1',
        'family' => 'Father, Mother',
        'languages' => 'PHP, Javascript, HTML, CSS, C',
        'hobbies' => 'Work-out, Game, Sleep, Boxing, MMA',
    ],
    [
        'name' => 'Jordy',
        'age' => 22,
        'mobile' => 31615601397,
        'email' => 'daniel.pustjens@gmail.com',
        'collegeName' => 'Windesheim',
        'collegeStudy' => 'AD Software Development',
        'CollegeYear' => 'Year 1',
        'family' => 'Father, Mother',
        'languages' => 'PHP, Javascript, HTML, CSS, C',
        'hobbies' => 'Work-out, Game, Sleep, Boxing, MMA',
    ],
    [
        'name' => 'Omar',
        'age' => 22,
        'mobile' => 31615601397,
        'email' => 'daniel.pustjens@gmail.com',
        'collegeName' => 'Windesheim',
        'collegeStudy' => 'AD Software Development',
        'CollegeYear' => 'Year 1',
        'family' => 'Father, Mother',
        'languages' => 'PHP, Javascript, HTML, CSS, C',
        'hobbies' => 'Work-out, Game, Sleep, Boxing, MMA',
    ]
];

// //??????????????????
// for ($i = 0; $i < count($group); $i++) {
//     for ($j = 0; $j < count($group[$i]) ; $j++){
//         // echo array_keys($group[$i]) . array_values($group[$j]);


//         echo "<pre>";
//         print_r(array_values($group[$i]));
//         echo "</pre>";
//     }
// }
// //??????????????????


// echo "<pre>";
// print_r(array_keys($group[0]));
// echo "</pre>";

// echo count($group[0]);

// foreach ($group as $member){
//     echo $member["name"] . " (" . $member["age"] . ") <br>" . $member["mobile"] . "<br>" . 
//     $member["email"] . "<br><br>" . $member["collegeName"] . "<br>" . $member["collegeStudy"] .
//     "<br> Year " . $member["CollegeYear"] . "<br><br>" . $member["family"] . "<br>" . $member["languages"] .
//     $member["hobbies"] . "<hr>";
// }

// $studentKeys = array_keys($group);
// print_r( $studentKeys);
// for ($i = 0; $i < count($studentKeys); $i++) {
//     echo $studentKeys . $group[$studentKeys[$i]];
// }



// echo "<pre>";
// print_r(array_keys($group[0]));
// echo "</pre>";

// echo count($group[0]);



// // ----------------------------------
// foreach ($group as $member) {
//     foreach ($member as $key => $value) {
//         echo $key. ": " . $value . "<br>"; 
//     } 
//     echo "<br><hr>";
// }
// // ----------------------------------


// for ($i = 0; $i < count($group); $i++) {
//     echo $group[$i]["name"] . " (" . $group[$i]["age"] . ") <br>" . $group[$i]["mobile"] . 
//     "<br>" . $group[$i]["email"] . "<br><br>" . $group[$i]["collegeName"] . "<br>" . 
//     $group[$i]["collegeStudy"] . "<br> Year " . $group[$i]["CollegeYear"] . "<br><br>" . 
//     $group[$i]["family"] . "<br>" . $group[$i]["languages"] . $group[$i]["hobbies"] . "<hr>";
// }

// echo "<pre>";
// print_r($group);
// echo "</pre>";

// $underdogs = [
//     'Daniel Pustjens' => [ 
//         'name' => 'Daniel',
//         'age' => 22, 'mobile' => 31615601397,
//         'email' => 'daniel.pustjens@gmail.com',
//         'collegeName' => 'Windesheim',
//         'collegeStudy' => 'AD Software Development',
//         'CollegeYear' => 'Year 1',
//         'family' => 'Father, Mother',
//         'languages' => 'PHP, Javascript, HTML, CSS, C',
//         'hobbies' => 'Work-out, Game, Sleep, Boxing, MMA',
//     ],
//     'Jordy' => [
//         'age' => 22,
//         'mobile' => 31615601397,
//         'email' => 'daniel.pustjens@gmail.com',
//         'collegeName' => 'Windesheim',
//         'collegeStudy' => 'AD Software Development',
//         'CollegeYear' => 'Year 1',
//         'family' => 'Father, Mother',
//         'languages' => 'PHP, Javascript, HTML, CSS, C',
//         'hobbies' => 'Work-out, Game, Sleep, Boxing, MMA',
//     ],
//     'Omar' => [
//         'age' => 22,
//         'mobile' => 31615601397,
//         'email' => 'daniel.pustjens@gmail.com',
//         'collegeName' => 'Windesheim',
//         'collegeStudy' => 'AD Software Development',
//         'CollegeYear' => 'Year 1',
//         'family' => 'Father, Mother',
//         'languages' => 'PHP, Javascript, HTML, CSS, C',
//         'hobbies' => 'Work-out, Game, Sleep, Boxing, MMA',
//     ]
// ];

// foreach ($underdogs as $memberr => $values) {
//     echo $memberr . ":<br>";
//     foreach ($values as $keys => $valuess) {
//         echo $keys . ": " . $valuess . "<br>"; 
//     } 
//     echo "<br><hr>";
// }

$persons = [
   [ 
    'JeRiCan' => ['name' => 'rickb'],
                 ['name' => 'ricks'],
                 ['name' => 'djimairo']

    ],
    [
    'GGG' => ['name' => 'rickb'],
             ['name' => 'ricks'],
             ['name' => 'djimairo']
    ]

];

foreach ($persons as $team) {

}

    // echo "<pre>";
    // print_r($persons);
    // echo "</pre>";