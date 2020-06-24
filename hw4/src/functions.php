<?php
 const NAMES = [
    'Dima', 'Vasja', 'Petja', 'Masha', 'Kolja'
];

function createUser()
{
    return [
        'name' => NAMES[array_rand(NAMES)],
        'age' => mt_rand(18, 45)
    ];
}