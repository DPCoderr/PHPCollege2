<?php

require 'functions/function.php';

/**
 * Group Underdogs: 
 *  - Daniel Pustjens (AD Software Development Student Year 1).
 *  - Jordy Meijer (AD Software Development Student Year 1).
 *  - Omar Pustjens (AD Software Development Student Year 1).
 * 
 * Homework software language 1 (week 2):
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
        'Hobbies' => 'Work-out, Game, Sleep, Boxing, MMA'
    ],
    [
        'Name' => 'Jordy Meijer',
        'Age' => 19,
        'Mobile' => 31634271862,
        'Email' => 'jmeijer04@hotmail.com',
        'College name' => 'Windesheim',
        'College study' => 'AD Software Development',
        'College year' => 'Year 1',
        'Family' => 'Father, Mother', 'Brother',
        'Languages' => 'PHP, Javascript, HTML, CSS',
        'Hobbies' => 'Work-out, Gaming, Reading, Coding'
    ],
    [
        'Name' => 'Omar Omicevic',
        'Age' => 21,
        'Mobile' => 31646571019,
        'Email' => 'omarcevic2002@gmail.com',
        'College name' => 'Windesheim',
        'College study' => 'AD Software Development',
        'College year' => 'Year 1',
        'Family' => 'Father, Mother, Sister',
        'Languages' => 'PHP, Javascript, HTML, CSS',
        'Hobbies' => 'Gaming, Cycling, Fortnite Battle Pass'
    ]
];

echo "<i>Array for 1 group: </i><br><br>";
echo "<b>Group: Underdogs </b><br><br>";
// In the group array are multiple arrays for every member.
foreach ($group as $member) {
    // Each member array is an associative array with their information stored in there.
    foreach ($member as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }
    echo "<hr>";
}

// In the group array are multiple arrays for every member.
for ($i = 0; $i < count($group); $i++) {
    // Each member array is an associative array, which means you need to know 
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
            'Name' => 'Daniel Pustjens',
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
            'Name' => 'Jordy Meijer',
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
            'Name' => 'Omar Omicevic',
            'Age' => 21,
            'Mobile' => 31646571019,
            'Email' => 'omarcevic2002@gmail.com',
            'College name' => 'Windesheim',
            'College study' => 'AD Software Development',
            'College year' => 'Year 1',
            'Family' => 'Father, Mother, Sister',
            'Languages' => 'PHP, Javascript, HTML, CSS',
            'Hobbies' => 'Gaming, Cycling, Fortnite Battle Pass'
        ]
    ]
];

echo "<i>Array for multiple groups: </i><br><br>";
// Array $groups is an associative array (key: group, value: group members).
foreach ($groups as $group => $members) {
    echo "<b>Group: ". $group . "</b><br><br>";
    // Each member array is an associative array with their information stored in there.
    foreach ($members as $member) {
        // The information for each member is kept in an associative array.
        foreach ($member as $key => $value) {
            echo $key . ": " . $value . "<br>";
        }
        echo "<hr>";
    }
}
?>