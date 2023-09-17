<?php

require 'functions/function.php';

/**
 * Maker: Daniel Pustjens (AD Software Development Student Year 1)
 * 
 * Homework software language 1 (week 2):
 * 
 * - Make an array with all your members variables. 
 * - Echo the array using a for loop and foreach loop.
 * 
 */

// Dimensional array for 1 group with members in there.
$group = [
    [
        'Name' => 'Daniel Pustjens',
        'Age' => 22,
        'Mobile' => 31615601397,
        'Email' => 'daniel.pustjens@gmail.com',
        'College name' => 'Windesheim',
        'College study' => 'AD Software Development',
        'Colleg year' => 'Year 1',
        'Family' => 'Father, Mother',
        'Languages' => 'PHP, Javascript, HTML, CSS, C',
        'Hobbies' => 'Work-out, Game, Sleep, Boxing, MMA',
    ],
    [
        'Name' => 'Jordy',
        'Age' => 22,
        'Mobile' => 31615601397,
        'Email' => 'daniel.pustjens@gmail.com',
        'College name' => 'Windesheim',
        'College study' => 'AD Software Development',
        'College year' => 'Year 1',
        'Family' => 'Father, Mother',
        'Languages' => 'PHP, Javascript, HTML, CSS, C',
        'Hobbies' => 'Work-out, Game, Sleep, Boxing, MMA',
    ],
    [
        'Name' => 'Omar',
        'Age' => 22,
        'Mobile' => 31615601397,
        'Email' => 'daniel.pustjens@gmail.com',
        'College name' => 'Windesheim',
        'College study' => 'AD Software Development',
        'College year' => 'Year 1',
        'Family' => 'Father, Mother',
        'Languages' => 'PHP, Javascript, HTML, CSS, C',
        'Hobbies' => 'Work-out, Game, Sleep, Boxing, MMA',
    ]
];

echo "Array for 1 group: <br><br>";
// Loop the whole group array that has 3 members arrays inside of it.
foreach ($group as $member) {
    // Loop each member array which is an associative array.
    foreach ($member as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }
    echo "<hr>";
}

// Loop the whole group array that has 3 members arrays inside of it.
for ($i = 0; $i < count($group); $i++) {
    // Each member has an associative array, which means you need to know 
    // how many keys/values there are to know how many times the for loop has to loop.
    $keysMember = array_keys($group[$i]);
    $valuesMember = array_values($group[$i]);
    for ($j = 0; $j < count($keysMember); $j++) {
        echo $keysMember[$j] . ": " . $valuesMember[$j] . "<br>";
    }
    echo "<hr>";
}
echo "<hr><hr>";

//  Dimensional array for multiple groups with members in there.
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

echo "Array for multiple groups: <br><br>";
// Array $groups needs to loop first an associative array (key: group, value: information group members).
foreach ($groups as $group => $member) {
    echo $group . "<br>";
    // The information value is kept in an array with other arrays in there for every member, so a normal foreach loop.
    foreach ($member as $infoMember) {
        // The information for each member is kept in associative arrays.
        foreach ($infoMember as $key => $value) {
            echo $key . ": " . $value . "<br>";
        }
        echo "<hr>";
    }
}
?>