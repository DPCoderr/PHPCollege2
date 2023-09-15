<?php

require 'functions/function.php';

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

$groups = [
    [ 
        'JeRiCan' => [
            ['name' => 'rickb', 'hobby' => 'gamen'],
            ['name' => 'ricks', 'hobby' => 'gamen'],
            ['name' => 'djimairo', 'hobby' => 'gamen']
        ]

    ],
    [
        'GGG' => [
            ['name' => 'hi', 'hobby' => 'gamen'],
            ['name' => 'hola', 'hobby' => 'gamen'],
            ['name' => 'hello', 'hobby' => 'gamen']
        ]
    ]
];

foreach ($groups as $group) {
    foreach ($group as $groupName => $value) {
        echo $groupName . ": <br>";
        foreach ($value as $member) {
            foreach ($member as $key => $values) {
                echo $key . " = " . $values . "<br>";
            }
        }
    }
    echo "<hr>";
}

//-------------------------------------------------------------

// --------------------------End of practice --------------------------------------------

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
$groups = [
    'Underdogs' => [
        [
            'Name' => 'Daniel',
            'Age' => 22, 
            'Mobile' => 31615601397,
            'Email' => 'daniel.pustjens@gmail.com',
            'College name' => 'Windesheim',
            'College study' => 'AD Software Development',
            'College year' => 'Year 1',
            'Family' => 'Father, Mother',
            'Languages' => 'PHP, Javascript, HTML, CSS, C',
            'Hobbies' => 'Work-out, Gaming, Sleep, Boxing, MMA'
        ],
        [
            'Name' => 'Jordy',
            'Age' => 19,
            'Mobile' => 31634271862,
            'Email' => 'jmeijer04@hotmail.com',
            'College name' => 'Windesheim',
            'College study' => 'AD Software Development',
            'College year' => 'Year 1',
            'Family' => 'Father, Mother, Brother',
            'Languages' => 'PHP, Javascript, HTML, CSS', 
            'Hobbies' => 'Work-out, Gaming, Reading, Coding'
        ],
        [
            'Name' => 'Omar',
            'Age' => 21,
            'Mobile' => 31646571019,
            'Email' => 'omarcevic2002@gmail.com',
            'College name' => 'Windesheim',
            'College study' => 'AD Software Development',
            'College year' => 'Year 1',
            'Family' => 'Father, Mother, Sister',
            'Languages' => 'PHP, Javascript, HTML, CSS, C',
            'Hobbies' => 'Gaming, Cycling, Fortnite battle pass'
        ]
    ]
];

// Array $groups needs to loop first an assosiative array (key: group, value: information group members).
foreach ($groups as $group => $infoMembers) {
    echo $group . "<br>";
    // The information value is kept in an array with other arrays in there for every member, so a normal foreach loop.
    foreach ($infoMembers as $infoMember) {
        // The information for each member is kept in assosiative arrays.
        foreach ($infoMember as $key => $value) {
            echo $key . ": " . $value . "<br>";
        }
        echo "<hr>";
    }
}